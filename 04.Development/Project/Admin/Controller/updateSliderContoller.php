<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if(isset($_POST)){
    $file = $_FILES['sliderOne']['name'];
    $location = $_FILES['sliderOne']['tmp_name'];
    $file1 = $_FILES['sliderTwo']['name'];
    $location1 = $_FILES['sliderTwo']['tmp_name'];
    $file2 = $_FILES['sliderThree']['name'];
    $location2 = $_FILES['sliderThree']['tmp_name'];
    $file3 = $_FILES['sliderFour']['name'];
    $location3 = $_FILES['sliderFour']['tmp_name'];
    $UserName=$_SESSION['username'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();
    if(file_exists($_FILES['sliderOne']['tmp_name'])){
        if (move_uploaded_file($location, "../../Images/" . $file)) {
            if (move_uploaded_file($location1, "../../Images/" . $file1)) {
                if (move_uploaded_file($location2, "../../Images/" . $file2)) {
                    if (move_uploaded_file($location3, "../../Images/" . $file3)) {
        $sql = $dbconnect->prepare(
        "UPDATE m_slider SET
        slider_image_1 = :image1,
        slider_image_2 = :image2,
        slider_image_3 = :image3,
        slider_image_4 = :image4,
        update_date=:todayDate,
        update_by=:adminName
        WHERE id = 2"
        
    );
    $sql->bindValue(":image1",  $file);
    $sql->bindValue(":image2",  $file1);
    $sql->bindValue(":image3",  $file2);
    $sql->bindValue(":image4",  $file3);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);    
    $sql->execute();
}
}
}
}
}else{
    $sql = $dbconnect->prepare(
        "UPDATE m_slider SET
        update_date=:todayDate,
        update_by=:adminName
        WHERE id = 2"
        
    );
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);    
    $sql->execute();
}
    header("location: ../View/setting.php");
}