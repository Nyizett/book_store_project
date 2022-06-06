<?php
require_once "../Model/DBConnection.php";
{
    $id =  $_GET['id'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_adminlogin SET
            del_flg =1
            WHERE id = :id"
    );
    $sql->bindValue(":id", $id);

    $sql->execute();
    header ("Location: ../View/setting.php");
}