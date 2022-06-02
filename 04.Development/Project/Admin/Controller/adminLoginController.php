<?php
require_once "../Model/DBConnection.php";
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

    if(count($result) > 0){
        header("Location: ../View/dashboard.php ");
    }
}