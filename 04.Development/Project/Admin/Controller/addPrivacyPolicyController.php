<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Category From
if(isset($_POST)){
    $privacytitle = $_POST['pptilt'];
    $privacyparg = $_POST['ppparg'];
    $UserName=$_SESSION['username'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_privacypolicy
        (
            pp_title,
            pp_paragraph,
            create_date,
            create_by
        )
        VALUES (
            :pptilte,
            :pppg,
            :todayDate,
            :adminName
            )"
    );
    $sql->bindValue(":pptilte", $privacytitle);
    $sql->bindValue(":pppg", $privacyparg);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);
    $sql->execute();
    header ("Location: ../View/setting.php");
}