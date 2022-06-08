<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Category From
if(isset($_POST)){
    $Servicetitle = $_POST['servicett'];
    $Serviceparg = $_POST['serviceparg'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_service
        (
            service_tilte,
            service_paragraph
        )
        VALUES (
            :stt,
            :spg
            )"
    );
    $sql->bindValue(":stt", $Servicetitle);
    $sql->bindValue(":spg", $Serviceparg);
    $sql->execute();
    header ("Location: ../View/setting.php");
}