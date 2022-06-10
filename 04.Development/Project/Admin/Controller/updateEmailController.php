<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $webEmail = $_POST['wEmail'];
    
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_site_master SET
        
        web_email = :webEmail
        
        WHERE id = 1"
    );
    
    $sql->bindValue(":webEmail",  $webEmail);
    
    $sql->execute();
    header("location: ../view/setting.php");
}