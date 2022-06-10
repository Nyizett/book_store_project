<?php
require_once "../Model/DBConnection.php";
// Get Data from Add FAQ From
if(isset($_POST)){
    $faqQ = $_POST['faqQ'];
    $faqAns = $_POST['faqAns'];
    $faqCategory = $_POST['categoryID'];

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_faq
        (
            faq_q_text,
            faq_ans_text,
            faq_category,
            create_date
        )
        VALUES (
            :fQue,
            :fAns,
            :fCat,
            :createDate
        )"
    );
    $sql->bindValue(":fQue", $faqQ  );
    $sql->bindValue(":fAns",  $faqAns);
    $sql->bindValue(":fCat",  $faqCategory);
    $sql->bindValue(":createDate", date("d/m/Y"));

    $sql->execute();
    header("location: ../view/setting.php");
}