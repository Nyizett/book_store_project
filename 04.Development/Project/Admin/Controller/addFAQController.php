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
        "INSERT INTO m_faq
        (
            faq_q_text,
            faq_ans_text,
            create_date,
            create_by
        )
        VALUES (
            :fQue,
            :fAns,
            :todayDate,
            :adminName
        )"
    );
    $sql->bindValue(":fQue", $faqQ  );
    $sql->bindValue(":fAns",  $faqAns);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);

    $sql->execute();
    header("location: ../view/setting.php");
}