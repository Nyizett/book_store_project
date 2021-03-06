<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: ../View/adminLogin.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setting</title>
    <link rel="shortcut icon" href="../../Images/<?php require_once "../Controller/changeWebfavIconController.php";echo $result[0]['fav_icon']; ?>" type="image/x-icon" width="100vw" />
    <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../resource/css/style.css" />
    <link rel="stylesheet" href="../resource/css/setting.css" />
    <link rel="stylesheet" href="../resource/css/common.css">
    <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    
    <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
    <script src="../resource/js/deliveryfees.js"></script>
    <script src="../resource/js/setting.js"></script>
    <script src="../resource/js/common.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div id="navbar" class="my-nav"></div>

            <div class="col-8 offset-3 ">
                <div class="row mt-4">
                    <div class="btn-group " role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check custom" name="btnradio" id="btnradio1" autocomplete="off" checked>
                        <label class="changemaster btn btn-outline-primary " for="btnradio1">Site Master</label>

                        <input type="radio" class=" btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                        <label class="changemaster btn btn-outline-primary" for="btnradio2">App Master</label>

                        <input type="radio" class=" btn-check " name="btnradio" id="btnradio3" autocomplete="off">
                        <label class="changemaster btn btn-outline-primary" for="btnradio3">Login Master</label>
                    </div>
                </div>
                <!-- Select Button End -->

                <!-- site Master start -->
                <div class="stm">
                    <!-- Update Fav-Icon -->
                    <form action="../Controller/updateFICONController.php" method="POST" enctype="multipart/form-data">
                        <div class="input-group mb-3 mt-5">
                            <input type="file" class="customstyle form-control" id="inputGroupFile02" name="fIcon">
                        </div>
                        <button type="submit" class="custombutton btn btn-sm offset-10 mt-2 mb-3 fw-bold col-2">CHANGE FAV-ICON</button>
                    </form>
                    <!-- Update Logo Start-->
                    <form action="../Controller/updatelogoController.php" method="POST" enctype="multipart/form-data">
                        <div class="input-group mb-3 mt-5">
                            <input type="file" class="customstyle form-control" id="inputGroupFile02" name="webLogo">
                        </div>
                        <button type="submit" class="custombutton btn btn-sm offset-10 mt-2 mb-3 fw-bold col-2">CHANGE LOGO</button>
                    </form>
                    <!-- Update Google Map Start-->
                    <form action="../Controller/updateGMController.php" method="POST">
                        <div class="input-group mb-3 mt-5">
                            <input type="text" class="customstyle form-control"  name="webGM">
                        </div>
                        <button type="submit" class="custombutton btn btn-sm offset-10 mt-2 mb-3 fw-bold">CHANGE GOOGLE MAP</button>
                    </form>
                    
                    <!--Update Web-Name Start -->
                    <form action="../Controller/updateWebNameController.php" method="POST">
                        <div class="mb-3 mt-2">
                            <label for="exampleFormControlInput1" class="form-label">Write New Name</label>
                            <input type="text" class="customstyle form-control" id="exampleFormControlInput1" name="wName">
                            <button type="submit" class="custombutton btn btn-sm offset-10 mt-4 fw-bold col-2">CHANGE NAME</button>
                        </div>
                    </form>
                    

                    <!-- Change Slider Start -->
                    <form action="../Controller/updateSliderContoller.php" method="POST" enctype="multipart/form-data">
                    <div >
                        
                        <label for="" class="mb-2">Web Sliders</label>
                        <input type="file" class="customstyle form-control" name="sliderOne"><br>
                        <input type="file" class="customstyle form-control" name="sliderTwo"><br>
                        <input type="file" class="customstyle form-control" name="sliderThree"><br>
                        <input type="file" class="customstyle form-control" name="sliderFour">
                        <button type="submit" class="custombutton btn btn-sm offset-10 mt-4 fw-bold col-2">ADD SLIDER</button>
                    </div>
                    </form>
                    <!-- Change Slider End -->

                    <!-- Update Welcome Text -->
                    <form action="../Controller/updateWebTextController.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Change Welcome Text</label>
                        <textarea class="customstyle form-control" id="exampleFormControlTextarea1" rows="3" name="textOne"></textarea>
                        <textarea class="customstyle form-control mt-3" id="exampleFormControlTextarea1" rows="3" name="textTwo"></textarea>
                        <button type="submit" class="custombutton btn btn-sm offset-10 mt-4 fw-bold col-2">CHANGE WELCOME TEXT</button>
                    </div>
                    </form>

                    <!-- Update Phone Number -->
                    <form action="../Controller/UpdatePhoneController.php" method="POST">
                    <div class="mb-3 mt-2">
                        <label for="exampleFormControlInput1" class="form-label">Write Phone.No</label>
                        <input type="number" class="customstyle form-control" id="exampleFormControlInput1" name="wPhone">
                        <button class="custombutton btn btn-sm offset-10 mt-4 fw-bold col-2">CHANGE PHONE.NO</button>
                    </div>
                    </form>

                    <!-- Update Shop Email -->
                    <form action="../Controller/updateEmailController.php" method="POST">
                    <div class="mb-3 mt-2">
                        <label for="exampleFormControlInput1" class="form-label">Write Email Address</label>
                        <input type="text" class="customstyle form-control" id="exampleFormControlInput1" name="wEmail">
                        <button class="custombutton btn btn-sm offset-10 mt-4 fw-bold">CHANGE EMAIL ADDRESS</button>
                    </div>
                    </form>

                    <!-- Update Shop Address -->
                    <form action="../Controller/updateAddressController.php" method="POST">
                    <div class="mb-3 mt-2">
                        <label for="exampleFormControlInput1" class="form-label">Write Shop Address</label>
                        <input type="text" class="customstyle form-control" id="exampleFormControlInput1" name="wShop">
                        <button class="custombutton btn btn-sm offset-10 mt-4 fw-bold">CHANGE SHOP ADDRESS</button>
                    </div>
                    </form>
                </div>
                <!-- site Master end -->

                <!-- App Master start -->
                <div class="custom closemaster mb-4">
                    <!-- Category Table start -->
                    <div class="mt-5 ">
                        <table class=" table table-striped table-sm container">
                            <tr class="tb-text">
                                <th class="col-2">No</th>
                                <th class="col-6 ">Name</th>
                                <th colspan=2>Actions</th>
                            </tr>
                            <?php
                            $count = 1;
                            require "../Controller/categoryListController.php";
                            foreach ($result as $key => $value) {
                                echo "<tr class='tb-text'>";
                                echo "<td>" . $count . "</td>";
                                echo "<td>" . $value['category_name'] . "</td>";
                                echo "<td><a href='../View/editCategory.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-primary'><ion-icon name='create-outline'></ion-icon></button></a></td>";
                                echo "<td><a href='../Controller/deleteCategoryController.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>";
                                echo "</tr>";
                                $count++;
                            }
                            ?>
                        </table>
                        <div class="ms-2 text-danger fs-5">
                        <?php
                        if(isset($_GET['id'])){
                            echo"!Can't Delete This Category//Delete All The Books In This Category First!";
                        }
                        ?>
                        </div>
                        <a href="./addCategory.php"><button class="btn btn-sm offset-9 custombutton fw-bold col-3">ADD CATEGORY</button></a>
                    </div>
                    <!-- Category Table end -->

                    <!-- Guide Table start -->
                    <div class="mt-5">
                        <table class="table table-striped table-sm">
                            <tr class="tb-text">
                                <th class="col-1">No</th>
                                <th class="col-3 ">Image</th>
                                <th class="col-6">Guide Paragraph</th>
                                <th class="col-2" colspan="2">Actions</th>
                            </tr>
                            <?php
                            require "../Controller/showGuideController.php";
                            $no = 1;

                            foreach ($result as $key => $value) {
                                global $no;
                                echo "<tr class=tb-text>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td> <img class=customimagesize src='../../Images/" . $value['guide_image'] . "'</td>";
                                echo "<td class=text-break>" . $value['guide_text'] . "</td>";
                                echo "<td><a href='../View/editGuide.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-primary'><ion-icon name='create-outline'></ion-icon></button></a></td>";
                                echo "<td><a href='../Controller/deleteGuideController.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>";
                            }
                            ?>

                        </table>
                        <a href="./addGuide.php"><button class="btn btn-sm offset-10 custombutton fw-bold col-2">ADD GUIDE</button></a>
                    </div>
                    <!-- Guide Table end -->


                    <!-- Delivery Fee Table Start -->
                    <div class=" mt-5 ">
                        <table class="table table-striped table-sm">
                            <tr class="tb-text">
                                <th>No</th>
                                <th>City/Township</th>
                                <th>Price</th>
                                <th colspan="2">Actions</th>
                            </tr>
                            <tbody id="bookData"></tbody>
                        </table>
                        <a href="./addDeliveryFee.php"><button class="btn btn-sm offset-10 custombutton fw-bold col-2">ADD DELIVERY FEES</button></a>
                    </div>
                    <div class="btn-group col-8 offset-2 my-3" role="group" aria-label="Basic outlined example" id="pagbtn"></div>
                    <!-- Delivery Fee Table end -->

                    <!-- Service Table start -->
                    <div class=" mt-5 ">
                        <table class="table table-striped table-sm">
                            <tr class="tb-text">
                                <th class="col-1">No</th>
                                <th class="col-3">Title</th>
                                <th class="col-6">Paragraph</th>
                                <th class="col-2" colspan="2">Actions</th>
                            </tr>

                            <?php
                            require "../Controller/showServiceController.php";
                            $no = 1;

                            foreach ($result as $key => $value) {
                                global $no;
                                echo "<tr class=tb-text>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td class=text-break>" . $value['service_tilte'] . "</td>";
                                echo "<td class=text-break>" . $value['service_paragraph'] . "</td>";
                                echo "<td><a href='../View/editService.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-primary'><ion-icon name='create-outline'></ion-icon></button></a></td>";
                                echo "<td><a href='../Controller/deleteServiceController.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>";
                            }
                            ?>

                            
                        </table>
                        <a href="./addService.php" class="btn btn-sm offset-10 custombutton fw-bold col-2">ADD SERVICE</button></a>
                    </div>
                    <!-- Service Table end -->


                    <!-- Privacy Policy Table Start -->
                    <div class=" mt-5 ">
                        <table class="table table-striped table-sm">
                            <tr class="tb-text">
                                <th class="col-1">No</th>
                                <th class="col-3">Title</th>
                                <th class="col-6">Paragraph</th>
                                <th class="col-2" colspan="2">Actions</th>
                            </tr>

                            <?php
                            require "../Controller/showPrivacyPolicyController.php";
                            $no = 1;

                            foreach ($result as $key => $value) {
                                global $no;
                                echo "<tr class=tb-text>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td class=text-break>" . $value['pp_title'] . "</td>";
                                echo "<td class=text-break>" . $value['pp_paragraph'] . "</td>";
                                echo "<td><a href='../View/editPrivacyPolicy.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-primary'><ion-icon name='create-outline'></ion-icon></button></a></td>";
                                echo "<td><a href='../Controller/deletePrivacyPolicyController.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>";
                            }
                            ?>

                            
                        </table>
                        <a href="./addPrivacyPolicy.php"><button class="btn btn-sm-2 col-4 custombutton fw-bold offset-8">ADD PRIVACYPOLICY</button></a>
                    </div>
                    <!-- Privacy Policy Table End -->


                    <div class=" mt-5 ">
                        <table class="table table-striped table-sm">
                            <tr class="tb-text">
                                <th class="col-1">No</th>
                                <th class="col-4">Questions</th>
                                <th class="col-4">Answers</th>
                                <th colspan="2">Actions</th>
                            </tr>
                            <?php
                            require "../Controller/faqListController.php";
                            $no = 1;
                                foreach ($result as $key => $value) {
                                global $no;
                                echo "<tr class=tb-text>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td class=text-break>" . $value['faq_q_text'] . "</td>";
                                echo "<td class=text-break>" . $value['faq_ans_text'] . "</td>";
                                
                                echo "<td><a href='../View/editFaqs.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-primary'><ion-icon name='create-outline'></ion-icon></button></a></td>";
                                echo "<td><a href='../Controller/deleteFAQController.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>";
                            }
                            ?>
                            
                        </table>
                        <a href="./addFaqs.php"><button class="btn btn-sm offset-10 custombutton fw-bold col-2">ADD FAQS</button></a>
                    </div>
                </div>
                <!-- App Master End -->

                <!-- Login Master Start -->
                <div class="lgm closemaster">

                    <div class="mt-5 ">
                        <table class="table table-striped table-sm ">
                            <tr class="tb-text">
                                <th class="col-2">No</th>
                                <th class="col-4">Name</th>
                                <th class="col-4">Email</th>
                                <th class="col-2" colspan="2">Actions</th>
                            </tr>
                            <?php
                            require "../Controller/showAdaminController.php";
                            $no = 1;

                            foreach ($result as $key => $value) {
                                global $no;
                                echo "<tr class=tb-text>";
                                echo "<td>" . $no++ . "</td>";
                                echo "<td>" . $value['admin_username'] . "</td>";
                                echo "<td>" . $value['admin_email'] . "</td>";
                                echo "<td><a href='../View/editAdmin.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-primary'><ion-icon name='create-outline'></ion-icon></button></a></td>";
                                echo "<td><a href='../Controller/deleteAdminController.php?id=" . $value['id'] . "'><button type='button' class='btn btn-outline-danger'><ion-icon name='trash-outline'></ion-icon></button></a></td>";
                            }
                            ?>

                            
                        </table>
                        <a href="./addAdmin.php"><button class="btn btn-sm offset-10 custombutton fw-bold col-2">ADD ADMIN</button></a>
                    </div>

                </div>
                <!-- Login Master End -->

            </div>

        </div>
    </div>

</body>

</html>