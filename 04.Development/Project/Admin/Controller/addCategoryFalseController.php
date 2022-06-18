<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Category From
if(isset($_GET)){
    $categoryName = $_GET['id'];
    $UserName=$_SESSION['username'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "DELETE FROM `m_category` WHERE category_name=:catname"
    );
    $sql->bindValue(":catname", $categoryName);
    $sql->execute();
    header ("Location: ./addCategoryTrueController.php?id=$categoryName");
 
}