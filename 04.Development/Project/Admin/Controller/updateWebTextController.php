<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if(isset($_POST)){
    $textOne = $_POST['textOne'];
    $textTwo = $_POST['textTwo'];
    $UserName=$_SESSION['username'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_site_master SET
        web_slider_text_1 = :sliderOne,
        web_slider_text_2 = :sliderTwo,
        update_date=:todayDate,
        update_by=:adminName
        WHERE id = 1
        "
    );
    $sql->bindValue(":sliderOne",  $textOne);
    $sql->bindValue(":sliderTwo",  $textTwo);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);
    $sql->execute();
    header("location: ../view/setting.php");
}
