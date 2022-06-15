$(document).ready(function () {
  $.ajax({
    type: "post",
    url: "../Controller/newBooksFindController.php",
    success: function (data) {
      console.log(data);
      let json = JSON.parse(data);
      for (const book of json) {
        $("#newsBookAppend").append(
          `
        <div class="col-6 col-lg-3 col-xl-2 content goBookDetail mb-5" id="${book.id}">
            <div class="card mb-5 mb-lg-0 card-width" style="min-height:70vh">
              <img src="../../Images/${book.book_image}" class="img-fluid  mx-auto mt-3 " alt="" width="80%" />
              <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold  font-color-primary">${book.book_name}</p>
                  <small class="my-2">
                  <i class="fa-solid fa-star star0 " ></i>
                  <i class="fa-solid fa-star star1" ></i>
                  <i class="fa-solid fa-star star2" ></i>
                  <i class="fa-solid fa-star star3" ></i>
                  <i class="fa-solid fa-star star4" ></i>
                  </small>
                  <small class="card-text  d-block mb-3 font-color-secondary ">
                    ${book.author_name}
                  </small>
                  <div class="d-flex d justify-content-between align-items-center">
                    <p class="fw-bold mb-0 font-color-primary">${book.book_price} MMK</p>
                  </div>
              </div>
            </div>
        </div>
        `
        );
        for (let index = 0; index < book.rating; index++) {
          $(".star" + index).addClass("text-warning");
          $(".star" + index).removeClass("star" + index);
          // console.log("#star" + index);
        }
        for (let x = 0; x < 5; x++) {
          $(".star" + x).removeClass("star" + x);
          // console.log("#star" + index);
        }
      }
      $bookId = "";
      $(".goBookDetail").click(function () {
        $bookId = $(this).attr("id");

        window.location.href =
          "../../Customer/View/bookDetails.php?id=" + $bookId;
      });
    },
  });
  //BestSelling BOOK SHOW
  $bestSellingBook = [];
  $.ajax({
    type: "post",
    url: "../Controller/bestSellingBooksController.php",
    success: function (data) {
      let json = JSON.parse(data);

      for (const book of json) {
        let id = book.book_id;
        $.ajax({
          type: "post",
          url: "../Controller/bestSellingBooksShowController.php",
          data: "id=" + id,
          success: function (data) {
            let jsonBook = JSON.parse(data);
            // console.log(jsonBook[0].book_image);
            $("#bestSellingBookAppend").append(
              `
                            <div class="col-6 col-lg-3 col-xl-2 mb-5 me-4 goBookDetail" id="${jsonBook[0].Book_Id}">
                                      <div class="card mb-5 mb-lg-0 card-width bg-lightBlue border-0 content" style="min-height:70vh">
                                        <img src="../../Images/${jsonBook[0].book_image}" class="img-fluid mx-auto mt-3" width="90%" alt="" />
                                        <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                            <p class="card-title fw-bold mb-0 font-color-primary">
                                            ${jsonBook[0].book_name}
                                            </p>
                                            <small>
                                            <i class="fa-solid fa-star star0" ></i>
                                            <i class="fa-solid fa-star star1" ></i>
                                            <i class="fa-solid fa-star star2" ></i>
                                            <i class="fa-solid fa-star star3" ></i>
                                            <i class="fa-solid fa-star star4" ></i>
                                            </small>
                                            <small class="card-text d-block mb-3 font-color-secondary">
                                            ${jsonBook[0].author_name}
                                            </small>
                                            <div class="d-flex d justify-content-between align-items-center">
                                              <p class="fw-bold mb-0 font-color-primary">${jsonBook[0].book_price} MMK</p>
                                            </div>
                                        </div>
                                      </div>
                                  </div>
            `
            );
            for (let index = 0; index < jsonBook[0].rating; index++) {
              $(".star" + index).addClass("text-warning");
              $(".star" + index).removeClass("star" + index);
              // console.log("#star" + index);
            }
            for (let x = 0; x < 5; x++) {
              $(".star" + x).removeClass("star" + x);
              // console.log("#star" + index);
            }
            $bookId = "";
            $(".goBookDetail").click(function () {
              $bookId = $(this).attr("id");

              window.location.href =
                "../../Customer/View/bookDetails.php?id=" + $bookId;
            });
          },
        });
      }
    },
  });
  //Popular BOOK SHOW
  $.ajax({
    type: "post",
    url: "../Controller/popularBookController.php",
    success: function (data) {
      let json = JSON.parse(data);
      for (const book of json) {
        let id = book.id;
        $.ajax({
          type: "post",
          url: "../Controller/bestSellingBooksShowController.php",
          data: "id=" + id,
          success: function (data) {
            let jsonBook = JSON.parse(data);

            $("#popularBookAppend").append(`
            <div class="col-6 col-lg-3 col-xl-2 my-3 mx-3 goBookDetail" id="${jsonBook[0].Book_Id}">
            <div class="card mb-5 mb-lg-0 card-width bg-lightBlue border-1 content" style="min-height:70vh">
               <img src="../../Images/${jsonBook[0].book_image}" class="img-fluid mx-auto mt-3" width="90%" alt="" />
               <div class="card-body d-flex flex-column justify-content-center align-items-center">
                  <p class="card-title fw-bold mb-0 font-color-primary">
                  ${jsonBook[0].book_name}
                  </p>
                  <small>
                  <small>
                  <i class="fa-solid fa-star star0" ></i>
                                            <i class="fa-solid fa-star star1" ></i>
                                            <i class="fa-solid fa-star star2" ></i>
                                            <i class="fa-solid fa-star star3" ></i>
                                            <i class="fa-solid fa-star star4" ></i>
                  </small>
                  </small>
                  <small class="card-text d-block mb-3 font-color-secondary">
                  ${jsonBook[0].author_name}
                  </small>
                  <div class="d-flex d justify-content-between align-items-center">
                     <p class="fw-bold mb-0 font-color-primary"> ${jsonBook[0].book_price} MMK</p>
                  </div>
               </div>
            </div>
         </div>
            `);
            for (let index = 0; index < jsonBook[0].rating; index++) {
              $(".star" + index).addClass("text-warning");
              $(".star" + index).removeClass("star" + index);
              // console.log("#star" + index);
            }
            for (let x = 0; x < 5; x++) {
              $(".star" + x).removeClass("star" + x);
              // console.log("#star" + index);
            }
            $bookId = "";
            $(".goBookDetail").click(function () {
              $bookId = $(this).attr("id");
              window.location.href =
                "../../Customer/View/bookDetails.php?id=" + $bookId;
            });
          },
        });
      }
    },
  });
  //Favourite Author SHOW
  $.ajax({
    type: "post",
    url: "../Controller/popularAuthorController.php",
    success: function (data) {
      let json = JSON.parse(data);
      for (const author of json) {
        $("#favouriteAuthorAppend").append(
          `
            <div class="col-12 col-lg-2 showAuthorsBooks" id="${author.author_id}">
            <img src="../../Admin/resource/img/authors/${author.author_image}" class="img-fluid"  alt="${author.author_name}'s Photo">
            <p class="font-color-primary fw-bold text-center pt-2">${author.author_name}</p>
            </div>
            `
        );
        $authorId = "";
        $(".showAuthorsBooks").click(function () {
          $authorId = $(this).attr("id");
          window.location.href =
            "../../Customer/View/authorBook.php?id=" + $authorId;
        });
      }
      console.log(json);
      // $("#totalBookShow").text(json.length);
    },
  });
  //TOTAL Sold BOOK SHOW
  $.ajax({
    type: "post",
    url: "../Controller/totalSoldBooksController.php",
    success: function (data) {
      let json = JSON.parse(data);
      console.log(json[0].total_Sold_Book);
      $("#totalSoldBooksShow").text(json[0].total_Sold_Book);
    },
  });
  //TOTAL BOOK SHOW
  $.ajax({
    type: "post",
    url: "../Controller/totalBooksController.php",
    success: function (data) {
      let json = JSON.parse(data);
      $("#totalBookShow").text(json.length);
    },
  });
  //TOTAL AUTHOR SHOW
  $.ajax({
    type: "post",
    url: "../Controller/totalAuthorController.php",
    success: function (data) {
      let json = JSON.parse(data);
      $("#totalAuthorShow").text(json.length);
    },
  });
  //TOTAL USER SHOW
  $.ajax({
    type: "post",
    url: "../Controller/totalUserController.php",
    success: function (data) {
      let json = JSON.parse(data);
      $("#totalUserShow").text(json.length);
    },
  });
  //Text Beside Slider
  $.ajax({
    type: "post",
    url: "../Controller/headerTextGetController.php",
    success: function (data) {
      let json = JSON.parse(data);

      $("#headerFirstText").text(json[0].web_slider_text_1);
      $("#headerSecondText").text(json[0].web_slider_text_2);
      $("#HeaderPhoneNumber").text(json[0].web_phno);
    },
  });
});
