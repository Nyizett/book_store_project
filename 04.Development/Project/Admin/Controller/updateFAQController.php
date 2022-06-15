<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if(isset($_POST)){
    $id = $_POST['id'];
    $Qtxt = $_POST['faqQ'];
    $ANstxt=$_POST['faqAns'];
    $UserName=$_SESSION['username'];
    
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_faq SET
        faq_q_text = :qtext,
        faq_ans_text= :anstext,
        update_date=:todayDate,
        update_by=:adminName
        WHERE id = :id"
    );
    
    $sql->bindValue(":qtext",  $Qtxt);
    $sql->bindValue(":anstext",  $ANstxt);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);
    $sql->bindValue(":id", $id);
    $sql->execute();
    header("location: ../view/setting.php");
}