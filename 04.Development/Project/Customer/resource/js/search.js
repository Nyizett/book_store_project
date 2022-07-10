let books = [];
let ids = [];
$(document).ready(function () {
  // cart local storage
  if (localStorage.getItem("cart") != null) {
    let cart = JSON.parse(localStorage.getItem("cart"));
    console.log(cart);
    for (let index = 0; index < cart.length; index++) {
      books.push(cart[index]);
    }
    console.log(books);

    $("#cartCount2").text(`${JSON.parse(localStorage.getItem("cart")).length}`);
  }
  $("#searchBtn").click(function () {
    $bookName = $("#searchInpt").val();
    showBooks($bookName);
  });

  function showBooks($bookName) {
    var name = $bookName;
    $.ajax({
      url: "../Controller/searchBookController.php",
      type: "POST",
      data: "name=" + name,
      success: function (data) {
        console.log(data);
        let json = JSON.parse(data);
        console.log(json);
        $(".Bookitems").remove();
        let booksCount = json.length;
        if (booksCount <= 0) {
          $("#Bookbox").append(
            `<div class="Bookitems my-5 text-center h2 text-danger">
                            There is no book with the name "${name}".
                            </div>`
          );
        } else {
          for (const book of json) {
            $("#Bookbox").append(
              `<div class="Bookitems col-12 col-lg-2 col-xl-2 mx-4">
                                <div class="card-search card mt-5 card-width" style="min-height:40vh">
                                   <img src="../../Images/${book.book_image}" class="responbookimg img-fluid w-75 mx-auto mt-3" alt="" />
                                   <div class="responitembox card-body  d-flex flex-column ">
                                      <p class="card-title fw-bold mb-0  font-color-primary">
                                        ${book.book_name}
                                      </p>
                                      <small>
                                      <i class="fa-solid fa-star star0" ></i>
                                      <i class="fa-solid fa-star star1" ></i>
                                      <i class="fa-solid fa-star star2" ></i>
                                      <i class="fa-solid fa-star star3" ></i>
                                      <i class="fa-solid fa-star star4" ></i>
                                      <small class="card-text d-block mb-3 font-color-secondary">
                                      ${book.author_name}
                                      </small>
                                      <div class="d-flex d justify-content-between align-items-center">
                                         <p class="fw-bold mb-0 font-color-primary"> ${book.book_price} MMK</p>
                                      </div>
                                      <button class="btn cart card-button px-1 rounded-1 me-1 viewBook"  id="${book.Book_Id}">Add To Cart</button>
                                      <button class="btn cart card-button px-1 rounded-1 me-1 bookDetail"  id="${book.Book_Id}"><i class='fa-solid fa-eye'></i> ${book.view_count}</button>
                                   </div>
                                   </div>
                                </div>
                             </div>`
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
          $(".bookDetail").click(function (e) {
            $id = $(this).attr("id");
            window.location.href =
              "../../Customer/Controller/bookDetailController.php?id=" + $id;
          });
          $(".viewBook").click(function (e) {
            if (!ids.includes(this.id)) {
              ids.push(this.id);
              let data = {
                id: this.id,
              };

              console.log(data);
              $.ajax({
                type: "POST",
                url: "../Controller/cartController.php",
                data: { send: JSON.stringify(data) },
                success: function (res) {
                  console.log(res);
                  books.push(JSON.parse(res));

                  localStorage.setItem("cart", JSON.stringify(books));
                  $("#cartCount2").text(
                    `${JSON.parse(localStorage.getItem("cart")).length}`
                  );
                },
                error: function (err) {},
              });
            }
          });
        }
      },
      error: function (err) {
        console.log(err);
      },
    });
  }
});
function shopCart() {
  console.log(books);

  if (localStorage.getItem("user") != null) {
    let data = JSON.stringify(books);
    let user = JSON.parse(localStorage.getItem("user"));
    let deliver = {
      address: user["user_address"],
    };
    window.location.href = `../../Customer/Controller/cartListController.php?data=${data}&address=${JSON.stringify(
      deliver
    )}`;
  } else {
    let data = JSON.stringify(books);
    let deliver = {
      address: "Default",
    };
    window.location.href = `../../Customer/Controller/cartListController.php?data=${data}&address=${JSON.stringify(
      deliver
    )}`;
  }
}
