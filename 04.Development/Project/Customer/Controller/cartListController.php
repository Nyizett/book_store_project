<?php

    if(isset($_GET['data'])){
        $data = json_decode($_GET["data"], true);
        // print_r($data);
        $address = json_decode($_GET['address'],true);
        // print_r($address);
        if(count($data) > 0){
            $result = $data;
            require "../../Admin/Model/DBConnection.php";
            $name = $address['address'];
            $db = new DBConnect();
            $dbconnect = $db->connect();
            $sql = $dbconnect->prepare("SELECT delivery_fees FROM m_delivery_fees WHERE delivery_city_name LIKE '%$name%' AND del_flg=0 ");
            $sql->execute();
            $result2 = $sql->fetchAll(PDO::FETCH_ASSOC);
            // print_r($result2);
        
            if(count($result2) > 0){
                $delivery = $result2;
                // print_r($delivery);
            }else{
                $delivery = 1000;
            }
            // print_r($delivery);
            // print_r($delivery);
            require '../../Customer/View/addtoCart.php';
        }
    }
    else{
        echo "There is no book in cart";
    }
 
 
?>