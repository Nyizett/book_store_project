<?php

if(isset($_GET["data"])){
 
    $data=json_decode($_GET["data"], true);
    
    if(count($data) > 0){
        $result = $data;

        // print_r($result);
        require '../View/voucher.php';
    }

}
?>