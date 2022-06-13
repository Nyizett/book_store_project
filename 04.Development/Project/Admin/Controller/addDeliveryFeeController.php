<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Category From
if(isset($_POST)){
    $avlCity = $_POST['delicity'];
    $deliFee = $_POST['deliprice'];
    $UserName=$_SESSION['username'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_delivery_fees
        (
            delivery_city_name,
            delivery_fees,
            create_date,
            create_by
        )
        VALUES (
            :dcity,
            :dprice,
            :todayDate,
            :adminName
            )"
    );
    $sql->bindValue(":dcity", $avlCity);
    $sql->bindValue(":dprice", $deliFee);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);
    $sql->execute();
    header ("Location: ../View/setting.php");
}