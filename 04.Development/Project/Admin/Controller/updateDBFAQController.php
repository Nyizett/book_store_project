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
        "UPDATE m_faq SET
        (
            faq_q_text = :faqQ,
            faq_ans_text = :faqAns,
            
            update_date  = :updateDate"
        
    );
    $sql->bindValue(":faqQ", $faqQ  );
    $sql->bindValue(":fAns",  $faqAns);
    
    $sql->bindValue(":updateDate", date("d/m/Y"));

    $sql->execute();
    header("location: ../view/setting.php");
}