<?php


if (isset($_POST['send'])) {

    $data = json_decode($_POST['send'], true);
    $id = $data['userid'];
    $username = $data['username'];
    $phone = $data['userphone'];
    $address = $data['useraddress'];
    $customerinfor = [];
}
require "../../Admin/Model/DBConnection.php";


// $array = [$username,$passowrd,$email,$phone,$address];
// echo $username, $phone, $address;
$db = new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare(
    "UPDATE m_user_list
    SET user_name= :name,
    user_phone= :phone,
    user_address= :address

    WHERE id=:id;"
);
$sql->bindValue(":name", $username);
$sql->bindValue(":phone", $phone);
$sql->bindValue(":address", $address);
$sql->bindValue(":id", $id);
$sql->execute();

$sql2 = $dbconnect->prepare(
    "SELECT * FROM m_user_list WHERE del_flg=0 AND id=$id"
);

$sql2->execute();
$result = $sql2->fetchAll(PDO::FETCH_ASSOC);
array_push($customerinfor, $result);
print_r(json_encode($customerinfor));
// } else {
//     echo "no";
// }
