<?php
require_once "../Model/DBConnection.php";
session_start();
// Get Data from Add Book From
if(isset($_POST)){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $decpassword= md5($Password);
    $UserName=$_SESSION['username'];

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_adminlogin
        (
            admin_username,
            admin_email,
            admin_password,
            create_date,
            create_by
        )
        VALUES (
            :name,
            :email,
            :password,
            :todayDate,
            :adminName
            )"
    );
    $sql->bindValue(":name",  $Name);
    $sql->bindValue(":email",  $Email);
    $sql->bindValue(":password", $decpassword);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);

    $sql->execute();
    header("location: ../view/setting.php");
}