<?php

    if(isset($_GET['data'])){
        $data = json_decode($_GET["data"], true);
        // print_r($data);
        if(count($data) > 0){
            $result = $data;
            // print_r( $result);
            require '../../Customer/View/addtoCart.php';
        }
    }
    else{
        echo "There is no book in cart";
    }
 
 
?>