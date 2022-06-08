
<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $decpassword= md5($Password);
    $id = $_POST['id'];

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_adminlogin SET
        admin_username = :username,
        admin_email = :useremail,
        admin_password = :userpassword
        WHERE id = :id"
    );
    $sql->bindValue(":username",  $Name);
    $sql->bindValue(":useremail",  $Email);
    $sql->bindValue(":userpassword", $decpassword);
    $sql->bindValue(":id", $id);

    $sql->execute();
    header("location: ../view/setting.php");
}