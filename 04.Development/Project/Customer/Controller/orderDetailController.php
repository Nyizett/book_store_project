<?php

require_once "../../Admin/Model/DBConnection.php";
    if(isset($_POST['orderdetail'])){
        // $order = json_decode($_POST['order'],true);
        $orderDetail  = json_decode($_POST['orderdetail'],true);
        // print_r(count(($orderDetail)));
        $id = $orderDetail['0']['id'];
        $delivery_fees_id = $orderDetail['0']['delivery_fees_id'];
        $total = $orderDetail['0']['total'];
        echo $id;
        echo $delivery_fees_id;
        echo $total;

        $db =  new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare(
            "INSERT INTO m_orders
            (
                customer_id,
                delivery_fees_id,
                total_amount
            )
            VALUES (
                :id,
                :feeid,
                :total)"
        );

        $sql->bindValue(":id", $id);
        $sql->bindValue(":feeid",$delivery_fees_id);
        $sql->bindValue(":total", $total);
        $sql->execute();

        for ($i=0; $i < count($orderDetail); $i++) { 
            $uid = $orderDetail[$i]['id'];
            $bookid = $orderDetail[$i]['book_id'];
            $qty = $orderDetail[$i]['order_d_quantity'];
            $total = $orderDetail[$i]['book_price'];
           
                $sql = $dbconnect->prepare(
                "INSERT INTO m_order_details
                (
                    user_id,
                    book_id,
                    order_d_quantity,
                    total_amount,
                    del_flg,
                    create_by_month
                )
                VALUES(
                    :user,
                    :book,
                    :qty,
                    :total,
                    :del_flg,
                    :cbm)"
            );

            $sql->bindValue(":user", $uid);
            $sql->bindValue(":book",$bookid);
            $sql->bindValue(":qty", $qty);
            $sql->bindValue(":total", $total);
            $sql->bindValue(":del_flg",0);
            $sql->bindValue(":cbm",date("Y-m"));

            $sql->execute();
        }
    }


?>