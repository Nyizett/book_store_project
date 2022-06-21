<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if(isset($_POST)){
    $Guidephoto = $_POST['guideImg'];
    $Guidepg = $_POST['guideParagraph'];
    $id = $_POST['id'];
    $UserName=$_SESSION['username'];
    // echo $id;
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_guide SET
        guide_text = :gline,
        guide_image = :gphoto,
        update_date=:todayDate,
        update_by=:adminName
        WHERE id = :id"
    );
    $sql->bindValue(":gline",  $Guidepg);
    $sql->bindValue(":gphoto",  $Guidephoto);
    $sql->bindValue(":id", $id);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);

    $sql->execute();
     header("location: ../View/setting.php");
}