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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="../resource/UI Library/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="../resource/css/common.css">
   <link rel="stylesheet" href="../resource/css/footer.css">

</head>

<body>

   <!-- Header -->
   <nav class="navbar navbar-expand-lg   top-0 w-100 " id="cum_navbar">

   </nav>
   <!-- Header -->
   <section class="container-fluid">
      <div class="row align-items-center justify-content-center min-vh-100">
         <div class="col-12 col-lg-4 ps-5 ms-3">
            <div class="slider slide-bg d-flex">
               <div class="detail">
                  <img class="img-fluid mt-3 " src="../resource/img/book cover/bootstrap.png" alt="">
               </div>
               <div class="detail">
                  <img class="img-fluid mt-2" src="../resource/img/book cover/jsEi.png" alt="">
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

                  <div class="d-flex col-md-12 col-sm-10 ">
                     <div class="container-fluid col-md-10 col-sm-6 d-flex  mb-3">
                        <div class="d-flex justify-content-center  col-md-5 bg-light  rounded mt-3 qty ">
                           <span class="minus">-</span>
                           <input type="number" class="counts" id="qty" name="qty" value="1">
                           <span class="plus">+</span>
                        </div>

                        <div class="mt-3">
                        
                        <button class="btn cartbtn"><i class="fas fa-shopping-cart mx-1"></i> Add to Cart</button>
                     </div>
                     </div>

                    

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="container">
      <div class="row">
         <div class="col-md-7 ">
   
               <div class="col-md-12">
                  <p class="titles commom-bg">Review</p>
               </div>
               <div class="col-md-12">
                  <div class="commentbox">
                     <div class="commentboxheader">
                        <p class="QuestionHeader">Review About This Product</p>
                     </div>
                     <div class="commentbody">
                       
                     </div>
                       <div class="commentinput mt-4">
                      
                     <input type="text" class="inputtextbox" id="inputtextbox"  placeholder="Please Type here..."/>
                     <button class="sendbutton">
                        Post Your Review
                     </button>
                  </div>
                       
                  </div>
                
                
               </div>
            </div>

            <div class="col-md-4">
            <div class="col-md-12">
                  <p class="titles commom-bg">Description</p>
               </div>
               <div class="col-md-12">
                  <div class="descbox">
                     <div class="desctable ">
                        <table class="table table-bordered m-5">
                           <tr>
                              <td >Pages</td>
                              <td>200</td>
                           </tr>
                           <tr>
                              <td >Release Date</td>
                              <td>2008</td>
                           </tr>
                           <tr>
                              <td>Size of Book</td>
                              <td>5.5*0.5*6.2 inches</td>
                           </tr>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-lg-1"></div>
         <div class="col-12 col-lg-5"></div>
      </div>
   </section>
   <footer id="footer" class="container-fluid commom-bg  mt-5">

   </footer>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="../resource/js/common.js"></script>
   <script src="../resource/js/footerCommon.js"></script>
  
   <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script src="../resource/js/homepage.js"></script>
   <script src="../resource/UI Library/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
   <!-- <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script> -->
   <!-- <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> -->
   <script src="../resource/UI Library/fontawesome-free/js/all.min.js"></script>
   <script src="../resource//js/bookDetails.js"></script>
   <script type="text/javascript">
      $(".slider").slick({
         prevArrow: '<span class="slick-prev slick-arrow d-flex align-items-center m-5  arrows"><i class="fas fa-angle-left"></i></span>',
         nextArrow: '<span class="slick-next slick-arrow d-flex align-items-center m-5 arrows"><i class="fas fa-angle-right"></i></span>'
      });
   </script>
</body>

</html>