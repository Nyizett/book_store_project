<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Authors</title>
   <link rel="shortcut icon" href="../../Images/latestLogo.png" type="image/x-icon" width="100vw" />
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />

   <link rel="stylesheet" href="../resource/css/homepage.css" />
   <link rel="stylesheet" href="../resource/css/author.css">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
   <link rel="stylesheet" href="../resource/css/common.css">
</head>

<body>
   <!-- nav -->
   <nav class="navbar navbar-expand-lg  position-fixed top-0 w-100 header" id="cum_navbar">
      <?php require "../View/common.php" ?>
   </nav>
   <!-- nav -->
   <div class="d-flex justify-content-between align-items-center  authorHeader">
      <h3 class="author ms-5 ">Authors</h3>
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
   <div id="modalContainer">

   </div>


   <!-- footer -->
   <footer id="footer" class="container-fluid commom-bg mt-5">
      <?php require "../View/footerCommon.php" ?>
   </footer>
   <script src="../resource/UI Library/jquery-3.3.1.min.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/iozrnicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="../resource/js/common.js"></script>
   <script src="../resource/js/footerCommon.js"></script>
   <script src="../resource/js/authorShow.js"></script>
   <script type="text/javascript">
      $("#CommonAuthor").addClass("border-bottom");
   </script>
</body>

</html>