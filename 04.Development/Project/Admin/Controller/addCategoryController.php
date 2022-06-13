<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Category From
if(isset($_POST)){
    $categoryName = $_POST['catName'];
    $UserName=$_SESSION['username'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_category
        (
            category_name,
            create_date,
            create_by
        )
        VALUES (
            :catname,
            :todayDate,
            :adminName
            )"
    );
    $sql->bindValue(":catname", $categoryName);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);
    $sql->execute();
    header ("Location: ../View/setting.php");
}