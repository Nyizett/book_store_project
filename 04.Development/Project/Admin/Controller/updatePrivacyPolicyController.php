<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $UpdatePTT = $_POST['editpptt'];
    $UpdatePPG = $_POST['editpppg'];
    $id = $_POST['id'];
    // echo $id;
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_privacypolicy SET
        pp_title = :title,
        pp_paragraph = :paragraph
        WHERE id = :id"
    );
    $sql->bindValue(":title",   $UpdatePTT);
    $sql->bindValue(":paragraph",  $UpdatePPG);
    $sql->bindValue(":id", $id);

    $sql->execute();
    header("location: ../view/setting.php");
}