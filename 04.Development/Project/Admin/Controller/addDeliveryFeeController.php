<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Category From
if(isset($_POST)){
    $avlCity = $_POST['delicity'];
    $deliFee = $_POST['deliprice'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_delivery_fees
        (
            delivery_city_name,
            delivery_fees
        )
        VALUES (
            :dcity,
            :dprice
            )"
    );
    $sql->bindValue(":dcity", $avlCity);
    $sql->bindValue(":dprice", $deliFee);
    $sql->execute();
    header ("Location: ../View/setting.php");
}