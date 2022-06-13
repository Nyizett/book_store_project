<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if(isset($_POST)){
    $id = $_POST['id'];
    $categoryName = $_POST['catName'];
    $UserName=$_SESSION['username'];
    
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_category SET
            category_name = :name,
            update_date=:todayDate,
            update_by=:adminName
            WHERE id = :id"
    );
    $sql->bindValue(":name", $categoryName);
    $sql->bindValue(":id", $id);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);
    $sql->execute();
    header ("Location: ../View/setting.php");
}

