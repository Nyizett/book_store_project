<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $webGML = $_POST['webGM'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_site_master SET
        g_map_link = :webGL
        
        WHERE id = 1"
    );
    $sql->bindValue(":webGL",  $webGML);
    $sql->execute();
    header("location: ../view/setting.php");
}