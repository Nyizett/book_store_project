<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if(isset($_POST)){
    $webLogo = $_POST['fIcon'];
    $UserName=$_SESSION['username'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_site_master SET
        fav_icon = :weblogo,
        update_date=:todayDate,
        update_by=:adminName
        WHERE id = 1"
    );
    $sql->bindValue(":weblogo",  $webLogo);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);
    $sql->execute();
    header("location: ../View/setting.php");
}