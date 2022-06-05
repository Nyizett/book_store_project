<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Category From
if(isset($_POST)){
    $categoryName = $_POST['catName'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_category
        (
            category_name
        )
        VALUES (
            :catname
            )"
    );
    $sql->bindValue(":catname", $categoryName);
    $sql->execute();
    header ("Location: ../View/setting.php");
}