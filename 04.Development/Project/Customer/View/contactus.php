<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Contact Us</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/contactus.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css" />
   <link rel="stylesheet" href="../resource/UI Library/summer_note/summernote.css" />
</head>

<body>
   <div class="container-fluid header d-flex justify-content-between align-items-center p-4 box">
      <h3 class="ms-5">Contact Us</h3>
      <div class="me-5"><b>Home</b> -> Contact Us</div>
   </div>

   <section class="container-fluid">
      <div class="row">
         <div class="col-12">
            <img src="../resource/img/Rectangle 1.png" class="img-fluid" alt="" />
         </div>
      </div>
   </section>

   <section class="container" id="menu">
      <div class="row justify-content-center">
         <div class="my-5"></div>
         <div class="col-12">
            <div class="mb-5">
               <div class="text-center">
                  <h2 class="font-color-primary">GET IN TOUCH</h2>
                  <hr />
                  <p class="font-color-primary">
                     Feel free to contact us anytime.We will get back to you
                     as soon as we can.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="container mb-5">
      <div class="row">
         <div class="col-12 col-lg-4 commom-bg">
            <div class="p-1">
               <h3 class="text-white text-center p-4">Contact Us</h3>
               <div class="d-flex justify-content-evenly flex-column p-2">
                  <div class="d-flex justify-content-between pt-4">
                     <i class="fas fa-map-marker text-white"></i>
                     <p class="ms-3 text-white">
                        No-7B,U Tun Lin Chan Lan Street Kamayut Township
                     </p>
                  </div>
                  <div class="d-flex justify-content-between pt-4">
                     <i class="fas fa-envelope text-white"></i>
                     <p class="ms-3 text-white">
                        No-7B,U Tun Lin Chan Lan Street Kamayut Township
                     </p>
                  </div>
                  <div class="d-flex justify-content-between pt-4">
                     <i class="fas fa-phone text-white"></i>
                     <p class="ms-3 text-white">
                        No-7B,U Tun Lin Chan Lan Street Kamayut Township
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-8">
            <div class="container details-text">
               <div class="row justify-content-center align-items-center">
                  <div class="col-12">
                     <h3 class="text-center font-color-primary pt-3">
                        We Would Love To Heare From You.
                     </h3>
                     <br />
                     <br />
                     <form>
                        <div class="mb-3 pt3">
                           <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name" />
                        </div>
                        <div class="mb-3 pt-5">
                           <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" />
                        </div>

                        <div id="summernote" class="pt-5 mt-3 note">
                           <p>Type Your Message here</p>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="container-fluid">
      <div class="row">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.5624951106656!2d96.14726431395682!3d16.798428623946755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb5e3fffe455%3A0xb7d3ad319654cf6e!2sShwedagon%20Pagoda!5e0!3m2!1sen!2ssg!4v1653662623922!5m2!1sen!2ssg" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
   </section>

   <script src=" https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="../resource/UI Library/summer_note/summernote.js"></script>
   <script>
      $(document).ready(function() {
         $("#summernote").summernote();
      });
   </script>
</body>

</html>