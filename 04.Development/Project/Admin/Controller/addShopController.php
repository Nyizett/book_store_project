<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Addshop From
if(isset($_POST)){
    $shopCity   = $_POST['shopCity'];
    $shopName   = $_POST['shopName'];
    $shopPhone  = $_POST['shopPh'];
    $shopWebsite= $_POST['shopWeb'];
    $shopImage  = $_POST['shopImage'];
    $shopAddress= $_POST['shopAddress'];
    $UserName=$_SESSION['username'];

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_shop
        (
            shop_name,
            shop_image,
            shop_city,
            shop_address,
            shop_phone_no,
            shop_website,
            create_date,
            create_by
        )
        VALUES (
            :shname,
            :shimage,
            :shcity,
            :shaddress,
            :shphone,
            :shweb,
            :todayDate,
            :adminName)"
    );
    $sql->bindValue(":shname", $shopName );
    $sql->bindValue(":shimage", $shopImage);
    $sql->bindValue(":shcity", $shopCity );
    $sql->bindValue(":shaddress", $shopAddress);
    $sql->bindValue(":shphone", $shopPhone );
    $sql->bindValue(":shweb", $shopWebsite);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);

    $sql->execute();
    header ("Location: ../View/shopInfo.php");
}