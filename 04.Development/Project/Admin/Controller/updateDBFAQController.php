<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add FAQ From
if(isset($_POST)){
    $faqQ = $_POST['faqQ'];
    $faqAns = $_POST['faqAns'];
    $UserName=$_SESSION['username'];

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_faq SET
        (
            faq_q_text = :faqQ,
            faq_ans_text = :faqAns,
            update_date=:todayDate,
            update_by=:adminName"
        
    );
    $sql->bindValue(":faqQ", $faqQ  );
    $sql->bindValue(":fAns",  $faqAns);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);

    $sql->execute();
    header("location: ../view/setting.php");
}