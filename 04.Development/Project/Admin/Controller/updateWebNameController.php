<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $webName = $_POST['wName'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_site_master SET
        web_name = :webName
        WHERE id = 1"
    );
    $sql->bindValue(":webName",  $webName);
    $sql->execute();
    header("location: ../view/setting.php");
}