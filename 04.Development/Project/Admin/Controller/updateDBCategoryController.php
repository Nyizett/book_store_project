<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $id = $_POST['id'];
    $categoryName = $_POST['catName'];
    
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_category SET
            category_name = :name
            WHERE id = :id"
    );
    $sql->bindValue(":name", $categoryName);
    $sql->bindValue(":id", $id);
    $sql->execute();
    header ("Location: ../View/setting.php");
}

