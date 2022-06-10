<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    
    $webAddress = $_POST['wShop'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_site_master SET
        
        web_address =   :webAdd
        WHERE id = 1"
    );
    
    $sql->bindValue(":webAdd", $webAddress);
    $sql->execute();
    header("location: ../view/setting.php");
}