<?php
require_once "../Model/DBConnection.php";
session_start();
// Get Data from Add Category From
if(isset($_POST)){
    $Servicetitle = $_POST['servicett'];
    $Serviceparg = $_POST['serviceparg'];
    $UserName=$_SESSION['username'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_service
        (
            service_tilte,
            service_paragraph,
            create_date,
            create_by
        )
        VALUES (
            :stt,
            :spg,
            :todayDate,
            :adminName
            )"
    );
    $sql->bindValue(":stt", $Servicetitle);
    $sql->bindValue(":spg", $Serviceparg);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);
    $sql->execute();
    header ("Location: ../View/setting.php");
}