<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Privacy & Policy</title>
   <link rel="shortcut icon" href="../../Images/latestLogo.png" type="image/x-icon" width="100vw" />
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../resource/css/common.css">
   <link rel="stylesheet" href="../resource/css/footer.css">
   <link rel="stylesheet" href="../resource/css/privacypolicy.css">
</head>

<body>

   <!-- Header -->
   <nav class="navbar navbar-expand-lg  top-0 w-100 " id="cum_navbar">
      <?php require "../View/common.php" ?>
   </nav>
   <!-- Header -->
   <div class="container-fluid header d-flex justify-content-between align-items-center p-4 box ">
      <h3 class="prav ms-5 text-break ">Privacy & Policy</h3>
      <div class="pravHome me-5">
         <b>Home</b> -> Privacy & Policy
      </div>
   </div>
   
   <section class="container mt-5">
      <div class="row">
      <h3>စာအုပ်ဆိုင်.com Privacy Policy</h3>
      <p class="mt-2">စာအုပ်ဆိုင်.com website strictly focuses on the privacy of our customers’ and our loyalty towards our commitment. The policy discloses the practice by which we gather the necessary information through our website.</p>
      </div>
      <div class="row">
         <div class="col-12">

         <?php
            require "../Controller/privacyPolicyController.php";
            $no = 1;

            foreach ($result as $key => $value) {
               echo '<h4 class="pp-title font-color-primary mt-4">' . $value['pp_title'] . "</h4>";
               echo '<p class="pp-pag mt-1">' . $value['pp_paragraph'] . "</p>";
            }
            ?>


            <!-- <p class="font-color-primary fw-bold fs-5">
               Advertisements on our Website
            </p>
            <p class="lh-lg">
               Lorem ipsum dolor sit amet consectetur adipisicing elit.
               Commodi excepturi molestiae labore aliquid eius qui illum iste
               consectetur, odio, magnam minus nulla pariatur rem. Quam
               molestiae tempora in earum nam.
            </p> -->
         </div>

         
      </div>
   </section>

   <footer id="footer" class="container-fluid commom-bg  mt-5">
      <?php require "../View/footerCommon.php" ?>
   </footer>

   <script src=" https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="../resource/js/common.js"></script>
   <script src="../resource/js/footerCommon.js"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
</body>

</html>