<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $DeliCity = $_POST['dcity'];
    $DeliPrice = $_POST['dprice'];
    $id = $_POST['id'];
    // echo $id;
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_delivery_fees SET
        delivery_city_name = :dcit,
        delivery_fees = :dfee
        WHERE id = :id"
    );
    $sql->bindValue(":dcit",  $DeliCity);
    $sql->bindValue(":dfee",  $DeliPrice);
    $sql->bindValue(":id", $id);

    $sql->execute();
     header("location: ../view/setting.php");
}