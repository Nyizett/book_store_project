<div class="row my-footer">
    <div class="col col-lg-3 ps-5 pt-4">
        <div class="">
            <h2 class="ftitle text-white align-top">စာ အုပ် ဆိုင်</h2>
            <p></p>
            <p class="text-white">Address</p>

            <p class="shop-address  ms-3 text-white">
                <?php require "../Controller/webAddressController.php";
                echo '-  ' . $webAddress[0]['web_address']; ?>
            </p>
            <a href="./contactus.php" class="showmap text-white text-decoration-none mb-2">SHOW ON MAP</a>

            <!-- Social Links -->
            <div class="d-flex mt-2">

                <a href="https://www.facebook.com/bookshop.org/"><i class="fab fa-facebook text-white mx-1"></i></a>
                <a href="https://www.instagram.com/bookshop_org/"><i class="fab fa-instagram text-white mx-1"></i></a>
                <a href="https://www.youtube.com/user/lovespy2010"><i class="fab fa-youtube text-white mx-1"></i></a>
                <a href="https://twitter.com/bookshop_org"><i class="fab fa-twitter text-white mx-1"></i></a>
            </div>
        </div>
    </div>
    <!--Footer Web Links  -->
    <div class="col col-lg-8 col-xl-6">
        <!-- Customer Service -->
        <div class="container-fluid">
            <div class="row mt-5 hello">
                <div class="col col-6 col-lg-3 text-white me-5">
                    <div class="cs-width ">
                        <p class="fw-bold">Customer Service</p>
                        <small id="FooterPhoneNumber"></small>
                        <br />
                        <small id="FooterEmail"></small>
                    </div>
                </div>
                <!-- Communities Links -->
                <div class="col col-6 col-lg-3 text-white me-5 com">
                    <div class="fservice">
                        <p class="fw-bold">Communities</p>
                        <a href="../View/contactus.php" class="btn-link text-white text-decoration-none">
                            <small>Contact Us </small>
                        </a>
                        <br />
                        <a href="../View/guide.php" class="btn-link text-white text-decoration-none">
                            <small> Guide </small>
                        </a>
                        <br />
                        <a href="../View/service.php" class="btn-link text-white text-decoration-none">
                            <small>Service</small>
                        </a>
                        <br />
                        <a href="../View/faqs.php" class="btn-link text-white text-decoration-none">
                            <small> FAQ's</small>
                        </a>
                    </div>
                </div>
                <!-- Shop List -->
                <div class="col col-6 col-lg-3 ">
                    <div class="fdiv">
                        <p class="fw-bold text-white">Shop List</p>
                        <a href="../View/shops.php?name='Yangon'" class="btn-link text-white text-decoration-none">
                            <small>Yangon</small>
                        </a>
                        <br />
                        <a href="../View/shops.php?name='Mandalay'" class="btn-link text-white text-decoration-none">
                            <small>Mandalay </small>
                        </a>
                        <br />
                        <a href="../View/shops.php?name='NayPyiTaw'" class="btn-link text-white text-decoration-none">
                            <small>NayPyiTaw</small>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <hr class="text-white mt-4" />
        <div class="col-12 col-lg-6">
            <div class="">
                <p class="text-white">
                    Copyright © 2022 ParadiseBookStore All rights reserved.
                </p>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="d-flex justify-content-end">
                <i class="fab fa-cc-visa text-white mx-1"></i>
                <i class="fab fa-cc-mastercard text-white mx-1"></i>
            </div>
        </div>
    </div>
</div>