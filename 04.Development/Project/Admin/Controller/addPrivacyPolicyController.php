<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Category From
if(isset($_POST)){
    $privacytitle = $_POST['pptilt'];
    $privacyparg = $_POST['ppparg'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_privacypolicy
        (
            pp_title,
            pp_paragraph
        )
        VALUES (
            :pptilte,
            :pppg
            )"
    );
    $sql->bindValue(":pptilte", $privacytitle);
    $sql->bindValue(":pppg", $privacyparg);
    $sql->execute();
    header ("Location: ../View/setting.php");
}