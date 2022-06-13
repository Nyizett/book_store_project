<!-- Navigation Bar -->
<div class="buttonbox col-2 position-fixed start-0">
    <input type="hidden" name="id" value ="<?php require_once "../Controller/commonController.php";  echo $result[0]['id'];?>">
    <img src="../../Images/<?php  echo $result[0]['web_logo'];?>" alt="" class="my-img">
    <div class="webName fs-3 text-light text-center "><?php  echo $result[0]['web_name'];?></div>
    <div class="webName fs-5  text-light text-center">Book Store</div>
    <div class="btn-group-vertical container mb-4">
    <a href="dashboard.php" class=" text-dec text-dark"><button type="button" class="navBtnGp1 col-12 btn btn-light   mt-3 overflow-hidden ">
            <div class="row justify-content-center">
            <div class="icons col-1"><ion-icon name="apps-outline"></ion-icon></div>
            <span class="Dsnon col-5">Dashboard</span>
            </div>
        </button></a>
        <a href="bookInfo.php" class="text-dec text-dark"><button type="button" class="navBtnGp2 col-12 btn btn-light  overflow-hidden mt-3 text-nowrap ">
            <div class="row justify-content-center">
            <div class="icons col-1 text-center align-self-center"><ion-icon name="book-outline"></ion-icon></div>
            <div class="Dsnon col-5 text-center align-self-center">Book Info</div>
            </div>
        </button></a>
        <a href="authorInfo.php" class="text-dec text-dark"><button type="button" class="navBtnGp3 col-12 btn btn-light overflow-hidden mt-3 text-nowrap text-center">
            <div class="row justify-content-center">
            <div class="icons col-1 "><ion-icon name="bookmarks-outline"></ion-icon></div>
            <span class="Dsnon col-5">Author Info</span>
            </div>
        </button></a>
        <a href="shopInfo.php" class="text-dec text-dark"><button type="button" class="navBtnGp4 col-12 btn btn-light overflow-hidden mt-3 text-nowrap text-center">
            <div class="row justify-content-center">
            <div class="icons col-1 "><ion-icon name="home-outline"></ion-icon></div>
            <span class="Dsnon col-5 ">Shop Info</span>
            </div>
        </button></a>
        <a href="userInfo.php" class="text-dec text-dark"><button type="button" class="navBtnGp5 col-12 btn btn-light overflow-hidden mt-3 text-nowrap text-center">
            <div class="row justify-content-center">
            <div class="icons col-1 "><ion-icon name="person-outline"></ion-icon></div>
            <span class="Dsnon col-5 ">User Info</span>
            </div>
        </button></a>
        <a href="orderInfo.php" class="text-dec text-dark"><button type="button" class="navBtnGp6 col-12 btn btn-light overflow-hidden mt-3 text-nowrap text-center">
            <div class="row justify-content-center">
            <div class="icons col-1 "><ion-icon name="document-outline"></ion-icon></div>
            <span class=" Dsnon col-5">Order Info</span>
            </div>
        </button></a>
        <a href="community.php" class="text-dec text-dark"><button type="button" class="navBtnGp7 col-12 btn btn-light overflow-hidden mt-3 text-nowrap text-center">
            <div class="row justify-content-center">
            <div class="icons col-1 "><ion-icon name="sparkles-outline"></ion-icon></div>
            <span class="Dsnon col-5 ">Community</span>
            </div>
        </button></a>
        <a href="setting.php" class="text-dec text-dark"><button type="button" class="navBtnGp8 col-12 btn btn-light text-break mt-3 text-nowrap text-center">
            <div class="row justify-content-center">
            <div class="icons col-1 "><ion-icon name="settings-outline"></ion-icon></div>
            <span class="Dsnon col-5 ">Setting</span>
            </div>
        </button></a>
        <a href="../Controller/logOutController.php" class="text-dec text-dark"><button type="button" class=" logout  btn btn-light text-break mt-3 "><ion-icon name="log-out-outline" class="dellog fs-3 "></ion-icon><div class="webName fs-5 ">logout</div></button></a>
    </div>
</div>