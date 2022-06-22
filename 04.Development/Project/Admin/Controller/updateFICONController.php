<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if(isset($_POST)){
    $file = $_FILES['fIcon']['name'];
    $location = $_FILES['fIcon']['tmp_name'];
    $UserName=$_SESSION['username'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    if(file_exists($_FILES['fIcon']['tmp_name'])){
    if (move_uploaded_file($location, "../../Images/" . $file)) {
    $sql = $dbconnect->prepare(
        "UPDATE m_site_master SET
        fav_icon = :weblogo,
        update_date=:todayDate,
        update_by=:adminName
        WHERE id = 1"
    );
    $sql->bindValue(":weblogo",  $file);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);
    $sql->execute();
    }
    }else{
        $sql = $dbconnect->prepare(
            "UPDATE m_site_master SET
            update_date=:todayDate,
            update_by=:adminName
            WHERE id = 1"
        );
        $sql->bindValue(":todayDate", date("d/m/Y"));
        $sql->bindValue(":adminName", $UserName);
        $sql->execute();
    }

    header("location: ../View/setting.php");
}