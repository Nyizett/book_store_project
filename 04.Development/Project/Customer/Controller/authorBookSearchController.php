<?php

echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
require "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();
$sql = $dbconnect->prepare("SELECT author_name,book_image,book_name,book_price,m_book.id AS Book_Id  FROM m_book INNER JOIN m_author ON m_book.author_id = m_author.id
INNER JOIN m_category ON m_book.category_id = m_category.id WHERE m_book.del_flg=0 AND m_book.author_id=$id");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);

// 
if (count($result) == null) {

    echo "<script>Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'There is no Author with the id of '+ authorId ,
        showConfirmButton: false,
        timer: 2000
      })</script>";
    echo "<script>
    setTimeout(function()
    {window.location='../../Customer/View/author.php';  },
    2000);
    </script>";
}
