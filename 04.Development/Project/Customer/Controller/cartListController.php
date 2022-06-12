<?php
session_start();

?>
<?php
$address;
$name;
$delivery;
if (isset($_GET['data'])) {
    $data = json_decode($_GET["data"], true);





    if (isset($_GET['address'])) {
        $address = json_decode($_GET['address'], true);
        $name = $address['address'];
        require "../../Admin/Model/DBConnection.php";
        $db = new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare("SELECT id,delivery_fees FROM m_delivery_fees WHERE delivery_city_name LIKE '%$name%' AND del_flg=0 ");
        $sql->execute();
        $result2 = $sql->fetchAll(PDO::FETCH_ASSOC);
        // print_r($result2);
        if (count($result2) > 0) {
            $delivery = $result2;
            $result = $data;

            require '../../Customer/View/addtoCart.php';
        }
    }


    // if(count($data) > 0){
    //     $result = $data;

    //     $delivery =1000;
    //     require '../../Customer/View/addtoCart.php';
    // }else{
    //     $result = $data;

    //     $delivery =1000;
    //     require '../../Customer/View/addtoCart.php';
    // }

} else {
}

?>