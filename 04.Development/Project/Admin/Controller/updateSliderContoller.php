<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $sliderOne = $_POST['sliderOne'];
    $sliderTwo = $_POST['sliderTwo'];
    $sliderThree = $_POST['sliderThree'];
    $sliderFour = $_POST['sliderFour'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_slider SET
        slider_image_1 = :image1,
        slider_image_2 = :image2,
        slider_image_3 = :image3,
        slider_image_4 = :image4
        WHERE id = 2"
        
    );
    $sql->bindValue(":image1",  $sliderOne);
    $sql->bindValue(":image2",  $sliderTwo);
    $sql->bindValue(":image3",  $sliderThree);
    $sql->bindValue(":image4",  $sliderFour);
    
    $sql->execute();
    header("location: ../view/setting.php");
}