<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $decpassword= md5($Password);

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_adminlogin
        (
            admin_username,
            admin_email,
            admin_password
        )
        VALUES (
            :name,
            :email,
            :password)"
    );
    $sql->bindValue(":name",  $Name);
    $sql->bindValue(":email",  $Email);
    $sql->bindValue(":password", $decpassword);

    $sql->execute();
    header("location: ../view/setting.php");
}