<?php
require_once "../Model/DBConnection.php";
{
    $id =  $_GET['id'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_user_list SET
            user_valid =0
            WHERE id = :id"
    );
    $sql->bindValue(":id", $id);

    $sql->execute();
    header ("Location: ../View/userInfo.php");
}