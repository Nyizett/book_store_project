
<?php
require_once "../Model/DBConnection.php";
session_start();
// Get Data from Add Book From
if(isset($_POST)){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $decpassword= md5($Password);
    $id = $_POST['id'];
    $UserName=$_SESSION['username'];

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_adminlogin SET
        admin_username = :username,
        admin_email = :useremail,
        admin_password = :userpassword,
        update_date=:todayDate,
        update_by=:adminName
        WHERE id = :id"
    );
    $sql->bindValue(":username",  $Name);
    $sql->bindValue(":useremail",  $Email);
    $sql->bindValue(":userpassword", $decpassword);
    $sql->bindValue(":id", $id);
    $sql->bindValue(":todayDate", date("d/m/Y"));
    $sql->bindValue(":adminName", $UserName);

    $sql->execute();
    header("location: ../view/setting.php");
}