<?php
require_once "../Model/DBConnection.php";
session_start();
$dbname=1;
// Get Data from Add Book From
if(isset($_POST)){
    $Name = $_POST['username'];
    $Password = $_POST['pswd'];
    $decpassword= md5($Password);

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare("
    SELECT * FROM m_adminlogin
    WHERE admin_username = :name
    AND admin_password = :password
    ");
    $sql->bindValue(":name",  $Name);
    $sql->bindValue(":password", $decpassword);

    $sql->execute();

    $result = $sql -> fetchAll(PDO :: FETCH_ASSOC);
    // echo"<pre>";
    // print_r($result);
    // $dbname=$result[0]["admin_username"];

    if(count($result) > 0){

        $_SESSION["username"] = 2;
        // echo '<script>localStorage.setItem("name1", 1);</script>';
        header("Location: ../View/dashboard.php?adname='".$dbname."'");

    }else{
        // header("Location: ../View/adminLogin.php ");
        if(isset($_SESSION['username'])){
            unset($_SESSION['username']);
        }
        
        require "../View/adminLogin.php ";
        echo '<div class="text-center mt-2 text-danger fs-4">Wrong Username or Password.Login Again!</div>';

    }
}