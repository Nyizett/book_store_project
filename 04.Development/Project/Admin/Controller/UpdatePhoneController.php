<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $webPhone = $_POST['wPhone'];
    
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_site_master SET
        web_Phno = :webPh
        
        WHERE id = 1"
    );
    $sql->bindValue(":webPh",  $webPhone);
    
    $sql->execute();
    header("location: ../view/setting.php");
}