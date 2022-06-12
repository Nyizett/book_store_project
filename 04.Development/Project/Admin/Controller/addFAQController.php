<?php
require_once "../Model/DBConnection.php";
// Get Data from Add FAQ From
if(isset($_POST)){
    $faqQ = $_POST['faqQ'];
    $faqAns = $_POST['faqAns'];
    

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_faq
        (
            faq_q_text,
            faq_ans_text,
            
            create_date
        )
        VALUES (
            :fQue,
            :fAns,
            
            :createDate
        )"
    );
    $sql->bindValue(":fQue", $faqQ  );
    $sql->bindValue(":fAns",  $faqAns);
    
    $sql->bindValue(":createDate", date("d/m/Y"));

    $sql->execute();
    header("location: ../view/setting.php");
}