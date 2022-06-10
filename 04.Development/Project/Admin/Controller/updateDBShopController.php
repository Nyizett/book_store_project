<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Shop From
if(isset($_POST)){
    $id = $_POST['id'];
    $shopCity   = $_POST['shopCity'];
    $shopName   = $_POST['shopName'];
    $shopPhone  = $_POST['shopPh'];
    $shopWebsite= $_POST['shopWeb'];
    $shopImage  = $_POST['shopImage'];
    $shopAddress= $_POST['shopAddress'];

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_shop SET
            shop_city = :city,
            shop_name = :name,
            shop_image = :image,
            shop_address= :address,
            shop_phone_no = :phone,
            shop_website = :web,
            update_date =:updateDate
            WHERE id = :id"
    );
    $sql->bindValue(":city", $shopCity );
    $sql->bindValue(":name", $shopName );
    $sql->bindValue(":image", $shopImage);
    $sql->bindValue(":address", $shopAddress);
    $sql->bindValue(":phone", $shopPhone );
    $sql->bindValue(":web", $shopWebsite);
    $sql->bindValue(":updateDate", date("d/m/Y"));
    $sql->bindValue(":id", $id);
    $sql->execute();
    header ("Location: ../View/shopInfo.php");
}