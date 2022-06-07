<?php

require "../../Admin/Model/DBConnection.php";

if(isset($_POST['name']) || isset($_POST['password']) || isset($_POST['email']) || isset($_POST['phone']) || isset($_POST['address'])){

    $username = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    // $array = [$username,$passowrd,$email,$phone,$address];
    
    $db = new DBConnect();
        $dbconnect = $db->connect();

        $sql = $dbconnect->prepare("
            SELECT id FROM m_user_list
            WHERE user_email = :email;
        ");
        $sql->bindValue(":email" ,$email);
        $sql->execute();
        $id = $sql->fetchAll(PDO::FETCH_ASSOC);

        print_r(count($id));


        if(count($id) != 1) {
            //    insert customer_lists table
            $sql = $dbconnect->prepare("
                INSERT INTO m_user_list(
                    user_name,
                    user_email,
                    user_password,
                    user_phone,
                    user_address,
                    user_valid,
                    del_flg,
                    create_date
                )
                VALUES(
                    :name,
                    :email,
                    :password,
                    :phone,
                    :address,
                    :valid,
                    :d_flag,
                    :create_date
                );
            ");
            $sql->bindValue(":name",$username);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":password", $password);
            $sql->bindValue(":phone", $phone);
            $sql->bindValue(":address", $address);
            $sql->bindValue(":valid",1);
            $sql->bindValue(":d_flag", 0);
            $sql->bindValue(":create_date", date("Y/m/d"));
            $sql->execute();
        }
        }else{
              echo "no";
        }