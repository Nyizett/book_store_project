<!-- Navigation Bar -->
<div class="buttonbox col-2 position-fixed start-0">
    <input type="hidden" name="id" value ="<?php require_once "../Controller/commonController.php";  echo $result[0]['id'];?>">
    <img src="../../Images/<?php  echo $result[0]['web_logo'];?>" alt="" class="my-img">
    <div class="webName fs-3 text-light text-center "><?php  echo $result[0]['web_name'];?></div>
    <div class="webName fs-5  text-light text-center">Book Store</div>
    <div class="btn-group-vertical container mb-4">
    <a href="dashboard.php" class=" text-dec text-dark"><button type="button" class="navBtnGp1 btn btn-light  mt-3 overflow-hidden">
            <div class="row">
            <div class="icons col-2 offset-2 "><ion-icon name="apps-outline"></ion-icon></div>
            <span class="Dsnon col-6">Dashboard</span>
            </div>
        </button></a>
        <a href="bookInfo.php" class="text-dec text-dark"><button type="button" class="navBtnGp2 btn btn-light overflow-hidden mt-3 text-nowrap">
            <div class="row">
            <div class="icons col-2 offset-2 "><ion-icon name="book-outline"></ion-icon></div>
            <span class="Dsnon col-6 ">Book Info</span>
            </div>
        </button></a>
        <a href="authorInfo.php" class="text-dec text-dark"><button type="button" class="navBtnGp3 btn btn-light overflow-hidden mt-3 text-nowrap">
            <div class="row">
            <div class="icons col-2 offset-2 "><ion-icon name="bookmarks-outline"></ion-icon></div>
            <span class="Dsnon col-7">Author Info</span>
            </div>
        </button></a>
        <a href="shopInfo.php" class="text-dec text-dark"><button type="button" class="navBtnGp4 btn btn-light overflow-hidden mt-3 text-nowrap">
            <div class="row">
            <div class="icons col-2 offset-2 "><ion-icon name="home-outline"></ion-icon></div>
            <span class="Dsnon col-6 ">Shop Info</span>
            </div>
        </button></a>
        <a href="userInfo.php" class="text-dec text-dark"><button type="button" class="navBtnGp5 btn btn-light overflow-hidden mt-3 text-nowrap">
            <div class="row">
            <div class="icons col-2 offset-2 "><ion-icon name="person-outline"></ion-icon></div>
            <span class="Dsnon col-6 ">User Info</span>
            </div>
        </button></a>
        <a href="orderInfo.php" class="text-dec text-dark"><button type="button" class="navBtnGp6 btn btn-light overflow-hidden mt-3 text-nowrap">
            <div class="row">
            <div class="icons col-2 offset-2 "><ion-icon name="document-outline"></ion-icon></div>
            <span class=" Dsnon col-6">Order Info</span>
            </div>
        </button></a>
        <a href="community.php" class="text-dec text-dark"><button type="button" class="navBtnGp7 btn btn-light overflow-hidden mt-3 text-nowrap">
            <div class="row">
            <div class="icons col-2 offset-2 "><ion-icon name="sparkles-outline"></ion-icon></div>
            <span class="Dsnon col-6 ">Community</span>
            </div>
        </button></a>
        <a href="setting.php" class="text-dec text-dark"><button type="button" class="navBtnGp8 btn btn-light text-break mt-3 text-nowrap">
            <div class="row">
            <div class="icons col-2 offset-2 "><ion-icon name="settings-outline"></ion-icon></div>
            <span class="Dsnon col-5 ">Setting</span>
            </div>
        </button></a>
        <button type="button" class="logout btn btn-light text-break mt-3">Logout</button>
    </div>
</div>