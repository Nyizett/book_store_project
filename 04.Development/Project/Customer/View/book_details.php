<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Book_Details</title>
   <link rel="stylesheet" href="../resource/UI Library/bootstrap-5.0.2-dist/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../resource/css/style.css" />
   <link rel="stylesheet" href="../resource/css/book_details.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
</head>

<body>
   <section class="container-fluid">
      <div class="row align-items-center justify-content-center min-vh-100">
         <div class="col-12 col-lg-4 ps-5 ms-3">
            <div class="slider slide-bg">
               <div class="">
                  <img class="img-slide1 img-fluid mt-3" src="../resource/img/book cover/bootstrap.png" alt="">
               </div>
               <div>
                  <img class="img-slide2 img-fluid mt-2" src="../resource/img/book cover/jsEi.png" alt="">
               </div>
            </div>
         </div>

         <div class="col-12 col-lg-2"></div>


         <div class="col-12 col-lg-5">
            <div class="">
               <div class="card mb-5 mb-lg-0 card-width ">
                  <div class="card-body d-flex flex-column ">
                     <p class="card-title fw-bold mb-0 font-color-primary">JavaScript</p>
                     <small>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star text-warning"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                     </small>
                     <small class="card-text d-block mb-3 font-color-secondary">
                        Ei Maung
                     </small>
                     <div class="d-flex justify-content-between align-items-center">
                        <p class="fw-bold mb-0 font-color-primary">3000 MMK</p>
                     </div>

                     <div class="details-text  mt-2">
                        <p class="p-3"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda cupiditate delectus, tenetur earum esse at similique corrupti sapiente dolor maiores distinctio eos, laborum rem accusamus quam consectetur! Cum, autem nobis!
                        </p>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="container">
      <div class="row">
         <div class="col-12 col-lg-6">
            <div class="">
               <div class="review-heading">
                  <p class="btn btn-primary w-25  commom-bg">Review</p>
               </div>
               <div class="review-box">
               </div>
               <div class="commentboxpossition">
                  <div class="commentbox">
                     <div class="commentboxheader">
                        <h2 class="QuestionHeader">Review About This Product</h2>
                     </div>
                     <div class="commentbody">
                        <div class="userComment" id="commentbox1">
                           <div class="commentinner" id="commentoutput1"></div>
                        </div>
                        <div class="userComment" id="commentbox2">
                           <div class="commentinner" id="commentoutput2"></div>
                        </div>
                        <div class="userComment" id="commentbox3">
                           <div class="commentinner" id="commentoutput3"></div>
                        </div>
                        <div class="userComment" id="commentbox4">
                           <div class="commentinner" id="commentoutput4"></div>
                        </div>
                        <div class="userComment" id="commentbox5">
                           <div class="commentinner" id="commentoutput5"></div>
                        </div>
                     </div>
                  </div>
                  <div class="commentinput">
                     <input type="text" class="inputtextbox" id="inputtextbox" />
                     <button class="sendbutton btn btn-primary" onclick="Sendcomment()">
                        Post Your Review
                     </button>
                  </div>
               </div>
            </div>

         </div>
         <div class="col-12 col-lg-1"></div>
         <div class="col-12 col-lg-5"></div>
      </div>
   </section>
   </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script src="../resource/js/homepage.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
   <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script type="text/javascript">
      $(".slider").slick({
         prevArrow: '<span class="priv_arrow btn  btn-primary "><i class="fas fa-angle-left"></i></span>',
         nextArrow: '<span class="next_arrow btn btn-primary "><i class="fas fa-angle-right"></i></span>'
      });

      function Sendcomment() {
         var input = document.getElementById("inputtextbox").value;
         var output1 = document.getElementById("commentoutput1").innerHTML;
         var output2 = document.getElementById("commentoutput2").innerHTML;
         var output3 = document.getElementById("commentoutput3").innerHTML;
         var output4 = document.getElementById("commentoutput4").innerHTML;
         var output5 = document.getElementById("commentoutput5").innerHTML;
         if (output1 == "") {
            document.getElementById("commentbox1").style.display = "block"
            document.getElementById("commentoutput1").innerHTML = input

         } else if (output2 == "") {
            document.getElementById("commentbox2").style.display = "block"
            document.getElementById("commentoutput2").innerHTML = input
         } else if (output3 == "") {
            document.getElementById("commentbox3").style.display = "block"
            document.getElementById("commentoutput3").innerHTML = input
         } else if (output4 == "") {
            document.getElementById("commentbox4").style.display = "block"
            document.getElementById("commentoutput4").innerHTML = input
         } else if (output5 == "") {
            document.getElementById("commentbox5").style.display = "block"
            document.getElementById("commentoutput5").innerHTML = input
         }


         document.getElementById("inputtextbox").value = "";
      }

      function CommentDelete1() {
         document.getElementById("commentbox1").style.display = "none"
         document.getElementById("commentoutput1").innerHTML = ""
      }

      function CommentDelete2() {
         document.getElementById("commentbox2").style.display = "none"
         document.getElementById("commentoutput2").innerHTML = ""
      }

      function CommentDelete3() {
         document.getElementById("commentbox3").style.display = "none"
         document.getElementById("commentoutput3").innerHTML = ""
      }

      function CommentDelete4() {
         document.getElementById("commentbox4").style.display = "none"
         document.getElementById("commentoutput4").innerHTML = ""
      }

      function CommentDelete5() {
         document.getElementById("commentbox5").style.display = "none"
         document.getElementById("commentoutput5").innerHTML = ""
      }
   </script>
</body>

</html>