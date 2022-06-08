<?php
require_once "../Model/DBConnection.php";
// Get Data from Add Book From
if(isset($_POST)){
    $id = $_POST['id'];
    $bookName = $_POST['bookName'];
    $bookCategory = $_POST['categoryID'];
    $bookPrice = $_POST['bookPrice'];
    $bookPages = $_POST['bookPg'];
    $bookSize = $_POST['bookSize'];
    $bookEstablished = $_POST['bookEsta'];
    $bookFile = $_POST['bookFile'];
    $bookDescription = $_POST['bookDes'];

    //Call DB Connection
    $db =  new DBConnect();
    $dbconnect = $db->connect();

    $sql = $dbconnect->prepare(
        "UPDATE m_book SET
            book_name = :name,
            category_id = :catID,
            -- author_id = :autID,
            book_price = :price,
            book_pages = :page,
            book_size = :size,
            book_established = :est,
            book_description = :des,
            book_image = :bimage
            WHERE id = :id"
    );
        $sql->bindValue(":name", $bookName);
        $sql->bindValue(":catID", $bookCategory);
        $sql->bindValue(":price", $bookPrice);
        // $sql->bindValue(":autID", $bookAuthor);
        $sql->bindValue(":page", $bookPages );
        $sql->bindValue(":size", $bookSize);
        $sql->bindValue(":est", $bookEstablished);
        $sql->bindValue(":des", $bookDescription);
        $sql->bindValue(":bimage", $bookFile);
        $sql->bindValue(":id", $id);
        $sql->execute();
    header ("Location: ../View/bookInfo.php");
}