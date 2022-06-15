<?php

echo "<script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
require "../../Admin/Model/DBConnection.php";
$db =  new DBConnect();
$dbconnect = $db->connect();

$sql = $dbconnect->prepare("
SELECT m_book.id,m_book.book_image,m_book.book_name,m_book.book_price,m_book.category_id,m_author.author_name,m_category.category_name FROM `m_book` 
 INNER JOIN m_author ON m_book.author_id = m_author.id
 INNER JOIN m_category ON m_book.category_id = m_category.id
 WHERE m_book.del_flg =0 AND m_book.category_id = $id
");
$sql->execute();
$result = $sql->fetchAll(PDO::FETCH_ASSOC);
if (count($result) > 0) {
} else {
    // echo '<script type="text/JavaScript"> 
    // alert("There is no such Category with the id of "+ categoryId);
    // window.location.href =
    //         "../../Customer/View/homepage.php" ;
    // </script>';
    echo "<script>Swal.fire({
        position: 'center',
        icon: 'error',
        title: 'There is no such Category with the id of '+ categoryId,
        showConfirmButton: false,
        timer: 2000
      })</script>";
    echo "<script>
    setTimeout(function()
    {window.location='../../Customer/View/homepage.php';  },
    2000);
    </script>";
}
