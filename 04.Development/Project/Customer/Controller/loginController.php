<?php

require "../../Admin/Model/DBConnection.php";

if(isset($_POST["email"]) || isset($_POST["password"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $customerinfor = [];

    $db = new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare("
        SELECT * FROM m_user_list
        WHERE user_email LIKE :email AND user_valid = 1; 
    ");
    $sql->bindValue(":email",$email);

    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    // print_r($result);
  
    if(count($result) == 1 && $result["0"]["user_email"] == $email){
        if($result["0"]["user_password"] == $password){
            $customerinfor += ["login" => true];
            array_push($customerinfor,$result);
        }else{
            $customerinfor += ["login" => "wrong password"];
            
        }
    }else{
        $customerinfor += ["login" => "your gmail does not exit"];
        
    }

  

      print_r(json_encode($customerinfor));
}
   