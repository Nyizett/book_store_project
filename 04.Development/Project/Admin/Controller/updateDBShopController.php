<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Shop From
if (isset($_POST)) {
    $id = $_POST['id'];
    $shopCity   = $_POST['shopCity'];
    $shopName   = $_POST['shopName'];
    $shopPhone  = $_POST['shopPh'];
    $shopWebsite = $_POST['shopWeb'];
    $shopAddress = $_POST['shopAddress'];
    $UserName = $_SESSION['username'];

    $shopImage  = $_FILES['shopImage']['name'];
    $location = $_FILES['shopImage']['tmp_name'];

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    if (file_exists($_FILES['shopImage']['tmp_name'])) {
        if (move_uploaded_file($location, "../../Images/" .  $shopImage)) {
            $sql = $dbconnect->prepare(
                "UPDATE m_shop SET
                    shop_city = :city,
                    shop_name = :name,
                    shop_image = :image,
                    shop_address= :address,
                    shop_phone_no = :phone,
                    shop_website = :web,
                    update_date=:todayDate,
                    update_by=:adminName
                    WHERE id = :id"
            );
            $sql->bindValue(":city", $shopCity);
            $sql->bindValue(":name", $shopName);
            $sql->bindValue(":image", $shopImage);
            $sql->bindValue(":address", $shopAddress);
            $sql->bindValue(":phone", $shopPhone);
            $sql->bindValue(":web", $shopWebsite);
            $sql->bindValue(":todayDate", date("d/m/Y"));
            $sql->bindValue(":adminName", $UserName);
            $sql->bindValue(":id", $id);
            $sql->execute();
        }
    } else {
        $sql = $dbconnect->prepare(
            "UPDATE m_shop SET
            shop_city = :city,
            shop_name = :name,
            shop_address= :address,
            shop_phone_no = :phone,
            shop_website = :web,
            update_date=:todayDate,
            update_by=:adminName
            WHERE id = :id"
        );
        $sql->bindValue(":city", $shopCity);
        $sql->bindValue(":name", $shopName);
        $sql->bindValue(":address", $shopAddress);
        $sql->bindValue(":phone", $shopPhone);
        $sql->bindValue(":web", $shopWebsite);
        $sql->bindValue(":todayDate", date("d/m/Y"));
        $sql->bindValue(":adminName", $UserName);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    header ("Location: ../View/shopInfo.php");
}
