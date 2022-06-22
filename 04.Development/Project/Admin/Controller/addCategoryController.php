<?php
require_once "../Model/DBConnection.php";
session_start();

// Get Data from Add Category From
if(isset($_POST)){
    $categoryName = $_POST['catName'];
    $UserName=$_SESSION['username'];
    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "SELECT * FROM `m_category` WHERE category_name=:catname"
    );
    $sql->bindValue(":catname", $categoryName);
    // $sql->bindValue(":todayDate", date("d/m/Y"));
    // $sql->bindValue(":adminName", $UserName);
    $sql->execute();
    $result = $sql -> fetchAll(PDO :: FETCH_ASSOC);
    if(count($result) > 0){
        header ("Location: ./addCategoryFalseController.php?id=$categoryName");
    }else{
        header ("Location: ./addCategoryTrueController.php?id=$categoryName");
    }
    
}
// INSERT INTO m_category
//         (
//             category_name,
//             create_date,
//             create_by
//         )
//         VALUES (
//             :catname,
//             :todayDate,
//             :adminName
//             )