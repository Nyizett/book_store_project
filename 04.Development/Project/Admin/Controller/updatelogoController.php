<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $webLogo = $_POST['webLogo'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_site_master SET
        web_logo = :weblogo
        
        WHERE id = 1"
    );
    $sql->bindValue(":weblogo",  $webLogo);
    $sql->execute();
    header("location: ../view/setting.php");
}