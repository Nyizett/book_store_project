<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Book From
if(isset($_POST)){
    $webLogo = $_FILES['webLogo']['name'];
    $location = $_FILES['webLogo']['tmp_name'];
    $UserName=$_SESSION['username'];

    

    if (move_uploaded_file($location, "../../Images/" . $webLogo)) {
        //Call DB Connection
        $db =  new DBConnect();
        $dbconnect = $db->connect();

        $sql = $dbconnect->prepare(
        "UPDATE m_site_master SET
        web_logo = :weblogo,
        update_date=:todayDate,
        update_by=:adminName
        WHERE id = 1"
        );
        $sql->bindValue(":weblogo",  $webLogo);
        $sql->bindValue(":todayDate", date("d/m/Y"));
        $sql->bindValue(":adminName", $UserName);
        $sql->execute();
        header("location: ../View/setting.php");
    }else{
        echo "error";
    }
    
    
}