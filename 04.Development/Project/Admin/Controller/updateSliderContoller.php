<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $slider = $_POST['sliderOne'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_slider SET
        slider_image = :sImage
        WHERE id = 1"
        
    );
    $sql->bindValue(":sImage",  $slider);
    
    $sql->execute();
    header("location: ../view/setting.php");
}