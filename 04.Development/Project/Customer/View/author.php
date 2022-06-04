<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Homepage</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/homepage.css" />
<<<<<<< HEAD
   <link rel="stylesheet" href="../resource/css/author.css" />
   <link rel="stylesheet" href="../resource/css/common.css" />
=======
   <link rel="stylesheet" href="../resource/css/author.css">
   <link rel="stylesheet" href="../resource/css/common.css">
>>>>>>> c96144a9980a79e57346fe75a5d34c78a597f182
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">

</head>

<body>
<<<<<<< HEAD
   <!-- Header -->
   <nav class="navbar navbar-expand-lg  position-fixed top-0 w-100 header" id="cum_navbar">

   </nav>
   <!-- Header -->
   <!-- Slider -->
   <div class="container header d-flex justify-content-between align-items-center p-4">
      <h3>Authors</h3>
      <div>
         <b>Home</b> -> Authors
      </div>
   </div>
   <div class="fw-bolder text-primary d-flex justify-content-center align-items-center "><u>All </u>
      <div class="mx-4 text-dark space"> A B C D E F G H I K L M N O P Q R S T U V W X Y Z </div>
   </div>
   <div>
      <table class="table mt-5">
         <tr>
            <th scope="col">Items</th>
            <th scope="col"></th>
            <th scope="col">Price</th>
            <th scope="col">Quatity</th>
            <th scope="col">Total</th>
            <th></th>
         </tr>
         </thead>
         <tbody>
            <tr>
               <th scope="row"><img src="./education.jpg" alt="" class="images"></th>
               <td>Book Name<br> Author Name</td>
               <td>1000</td>
               <td>2</td>
               <td>2000</td>
               <td>
                  <ion-icon name="close-circle-outline"></ion-icon>
               </td>
            </tr>
            <tr>
               <th scope="row"><img src="./education.jpg" alt=""></th>
               <td>Book Name<br> Author Name</td>
               <td>4000</td>
               <td>1</td>
               <td>4000</td>
               <td>
                  <ion-icon name="close-circle-outline"></ion-icon>
               </td>
            </tr>
            <tr>
               <th scope="row"><img src="./education.jpg" alt=""></th>
               <td>Book Name<br> Author Name</td>
               <td>5000</td>
               <td>2</td>
               <td>10000</td>
               <td>
                  <ion-icon name="close-circle-outline"></ion-icon>
               </td>
            </tr>
         </tbody>
      </table>
   </div>
=======
   <!-- nav -->
   <nav class="navbar navbar-expand-lg  position-fixed top-0 w-100 header" id="cum_navbar">
   </nav>
   <!-- nav -->
   <div class="d-flex justify-content-between align-items-center p-4 authorHeader">
      <h2 class="author ms-5 mt-5">Authors</h2>
      <div class="me-5 mt-5">
         <b class="homeTextColor">Home</b> -> <span class="author">Authors</span>
      </div>
   </div>
   <div class="fw-bolder text-primary d-flex justify-content-center align-items-center mt-4 startName">
      <span class="mx-3 selectedName" id="allAuthor">ALL</span>
      <span class="mx-3 showByLetterIncluding">A</span>
      <span class="mx-3 showByLetterIncluding">B</span>
      <span class="mx-3 showByLetterIncluding">C</span>
      <span class="mx-3 showByLetterIncluding">D</span>
      <span class="mx-3 showByLetterIncluding">E</span>
      <span class="mx-3 showByLetterIncluding">F</span>
      <span class="mx-3 showByLetterIncluding">G</span>
      <span class="mx-3 showByLetterIncluding">H</span>
      <span class="mx-3 showByLetterIncluding">I</span>
      <span class="mx-3 showByLetterIncluding">J</span>
      <span class="mx-3 showByLetterIncluding">K</span>
      <span class="mx-3 showByLetterIncluding">L</span>
      <span class="mx-3 showByLetterIncluding">M</span>
      <span class="mx-3 showByLetterIncluding">N</span>
      <span class="mx-3 showByLetterIncluding">O</span>
      <span class="mx-3 showByLetterIncluding">P</span>
      <span class="mx-3 showByLetterIncluding">Q</span>
      <span class="mx-3 showByLetterIncluding">R</span>
      <span class="mx-3 showByLetterIncluding">S</span>
      <span class="mx-3 showByLetterIncluding">T</span>
      <span class="mx-3 showByLetterIncluding">U</span>
      <span class="mx-3 showByLetterIncluding">V</span>
      <span class="mx-3 showByLetterIncluding">W</span>
      <span class="mx-3 showByLetterIncluding">X</span>
      <span class="mx-3 showByLetterIncluding">Y</span>
      <span class="mx-3 showByLetterIncluding">Z</span>
   </div>
   <div class="authorsContainer d-flex justify-content-center mt-3" id="authorContainer">

   </div>
   <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
   </button>

  

   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               ...
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
            </div>
         </div>
      </div>
   </div> -->
>>>>>>> c96144a9980a79e57346fe75a5d34c78a597f182
   <!-- footer -->
   <footer id="footer" class="container-fluid commom-bg mt-5">
      <div class="row">
         <div class="col-12 col-lg-4 ps-5 pt-4">
            <div class="">
               <h2 class="text-white align-top">Paradise</h2>
               <p></p>
               <p class="text-white">Address</p>
               <p class="text-white">SHOW ON MAP</p>
               <div class="d-flex">
                  <i class="fab fa-facebook text-white mx-1"></i>
                  <i class="fab fa-instagram text-white mx-1"></i>
                  <i class="fab fa-youtube text-white mx-1"></i>
                  <i class="fab fa-twitter text-white mx-1"></i>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-8 col-xl-6">
            <div class="container-fluid">
               <div class="row mt-5 hello">
                  <div class="col-6 col-lg-3 text-white">
                     <div class="cs-width me-5">
                        <p class="fw-bold">Customer Service</p>
                        <small>09-123456789</small>
                        <br />
                        <br />
                        <small>hello@gmail.com</small>
                     </div>
                  </div>
                  <div class="col-6 col-lg-3 text-white">
                     <div class="">
                        <p class="fw-bold">Our Service</p>
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Contact Us </small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small> Guide </small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Delivery Free</small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small> Good Print Quality</small>
                        </a>
                     </div>
                  </div>
                  <div class="col-6 col-lg-3">
                     <div class="">
                        <p class="fw-bold text-white">Categories</p>
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Language</small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Education</small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Novels</small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Technology</small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Cartoons</small>
                        </a>
                     </div>
                  </div>
                  <div class="col-6 col-lg-3">
                     <div class="">
                        <p class="fw-bold text-white">Shop List</p>
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Yagnon</small>
                        </a>
                        <br />
                        <a href="#" class="btn-link text-white text-decoration-none">
                           <small>Mandalay </small>
                        </a>
                        <br />
                        <a href="tel:09250152018" class="btn-link text-white text-decoration-none">
                           <small>NayPyiTaw</small>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <hr class="text-white" />
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
   </footer>
   <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="../resource/js/common.js"></script>
   <script src="../resource/js/footerCommon.js"></script>
<<<<<<< HEAD
=======
   <script src="../resource/js/authorShow.js"></script>
>>>>>>> c96144a9980a79e57346fe75a5d34c78a597f182
   <script type="text/javascript">
      $(".slider").slick({
         prevArrow: '<span class="priv_arrow btn  btn-primary "><i class="fas fa-angle-left"></i></span>',
         nextArrow: '<span class="next_arrow btn btn-primary "><i class="fas fa-angle-right"></i></span>'
      });
   </script>
</body>

</html>