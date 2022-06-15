<?php
      if (isset($_POST['send'])) {
        $data = json_decode($_POST["send"], true);
        $id = $data['id'];

        require "../../Admin/Model/DBConnection.php";   
        $db =  new DBConnect();
        $dbconnect = $db->connect();
        $sql = $dbconnect->prepare("SELECT m_review_rating.id,m_review_rating.customer_comment,m_user_list.id,m_user_list.user_name FROM `m_review_rating` INNER JOIN `m_user_list` ON m_review_rating.customer_id = m_user_list.id  WHERE m_review_rating.book_id = $id AND m_review_rating.del_flg =0 ");
        $sql->execute();
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        
        echo json_encode($result);
      }

?>