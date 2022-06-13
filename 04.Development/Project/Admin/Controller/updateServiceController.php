<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if(isset($_POST)){
    $UpdateSTT = $_POST['estt'];
    $UpdateSPG = $_POST['espg'];
    $id = $_POST['id'];
    $UserName=$_SESSION['username'];
    // echo $id;
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_service SET
        service_tilte = :title,
        service_paragraph = :paragraph,
        update_date=:todayDate,
        update_by=:adminName
        WHERE id = :id"
    );
    $sql->bindValue(":title",   $UpdateSTT);
    $sql->bindValue(":paragraph",  $UpdateSPG);
    $sql->bindValue(":id", $id);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);

    $sql->execute();
     header("location: ../view/setting.php");
}