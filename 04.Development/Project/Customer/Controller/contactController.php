<?php
require_once "../../Admin/Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $cName = $_POST['cName'];
    $cEmail = $_POST['cEmail'];
    $message = $_POST['Message'];

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "INSERT INTO m_contact_form
        (
            contact_form_name,
            contact_form_email,
            contact_form_message
        )
        VALUES (
            :cName,
            :cEmail,
            :mes)"
    );
    $sql->bindValue(":cName", $cName);
    $sql->bindValue(":cEmail",$cEmail);
    $sql->bindValue(":mes", $message);

    $sql->execute();
    header ("Location: ../View/homepage.php");
}