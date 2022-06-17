let books = [];
let book = [];
$(document).ready(function () {
  $(".count").prop("disabled", true);

  if(localStorage.getItem('cart') != null){
    let cart = JSON.parse(localStorage.getItem('cart'));
    console.log(cart);
    for (let index = 0; index < cart.length; index++) {
        books.push(cart[index]);
      
    }
    console.log(books);
    
    $("#cartCount2").text(`${JSON.parse(localStorage.getItem('cart')).length}`);
  }
  let userinfo;
  if (localStorage.getItem("user") != null) {
    userinfo = JSON.parse(localStorage.getItem("user"));
    console.log(userinfo);
    $(".reviews").prepend(`
        <div class="col-md-7 ">

        <div class="col-md-12 ">
           <p class="titles review-box commom-bg">Review</p>
        </div>
        <div class="col-md-12">
           <div class="commentbox">
              <div class="commentboxheader">
                 <p class="QuestionHeader">Review About This Product</p>
              </div>
              <div class="commentbody">

              </div>
              <div class="commentinput mt-4">

                 <input type="text" class="inputtextbox" id="inputtextbox" placeholder="Please Type here..." />
                 <button class="sendbutton">
                    Post Your Review
                 </button>
              </div>

           </div>


        </div>
     </div>`);

    let bookid = {
      id: id,
    };
    console.log(bookid);
    $.ajax({
      type: "POST",
      url: "../Controller/reviewController.php",
      data: { send: JSON.stringify(bookid) },
      success: function (data) {
        let result = JSON.parse(data);

        // console.log(result);

        if (result.length > 0) {
          // console.log('hello');
          for (let i = 0; i < result.length; i++) {
            $(".commentbody").append(
              ` <div id="${result[i]["id"]}" class="userComment" style="display:block">
                                <div class="user d-flex ">
                                <i class="fa-solid fa-user mt-1 "></i>
                                <p class="mx-3 mb-2 name">${result[i]["user_name"]}</p>   
                                </div>
                                <div class="commentinner review" >${result[i]["customer_comment"]}</div>
                             </div>`
            );
          }
        }
      },
      error: function (err) {
        console.log(err);
      },
    });
  }

  $(document).on("click", ".plus", function () {
    if ($(".counts").val() < 9) {
      $(".counts").val(parseInt($(".counts").val()) + 1);
    }
    console.log($(".counts").val());
  });
  $(document).on("click", ".minus", function () {
    $(".counts").val(parseInt($(".counts").val()) - 1);
    if ($(".counts").val() == 0) {
      $(".counts").val(1);
    }
  });

  $(".sendbutton").click(function () {
    let input = $("#inputtextbox").val();
    console.log(input);
    $(".commentbody").append(
      ` <div class="userComment">
            <div class="user d-flex ">
            <i class="fa-solid fa-user mt-1 "></i>
            <p class="mx-3 mb-2 name">${userinfo["user_name"]}</p>   
            </div>
            <div class="commentinner review" >${input}</div>
         </div>`
    );
    $("#inputtextbox").val("");
    $(".userComment").show("slow");
    console.log();
    let data = {
      id: userinfo["id"],
      book_id: id,
      category_id: $(this)
        .parent()
        .parent()
        .parent()
        .parent()
        .parent()
        .attr("id"),
      comment: input,
    };
    console.log(data);

    $.ajax({
      type: "POST",
      url: "../Controller/bookReviewController.php",
      data: { send: JSON.stringify(data) },
      success: function (res) {
        console.log(res);
      },
      error: function (err) {
        console.log(err);
      },
    });
  });

  $(".cartbtn").click(function () {
   
    let image = $(".bookimage").attr("id");

    let data = {
      id: id,
      book_image: image,
      book_name: $(".booknames").text(),
      book_price: $(".bookprices")
        .text()
        .replaceAll(",", "")
        .replaceAll(" MMK", ""),
      author_name: $(".authors").text(),
      qty: $("#qty").val(),
    };

    book.push(data);
    books.push(book);
    localStorage.setItem('cart',JSON.stringify(books));

    if (localStorage.getItem("user") != null) {
      let user = JSON.parse(localStorage.getItem("user"));
      let deliver = {
        address: user["user_address"],
      };
      window.location.href = `../../Customer/Controller/cartListController.php?data=${JSON.stringify(
        books
      )}&address=${JSON.stringify(deliver)}`;
    } else {
      let deliver = {
        address: "Default",
      };
      window.location.href = `../../Customer/Controller/cartListController.php?data=${JSON.stringify(
        books
      )}&address=${JSON.stringify(deliver)}`;
    }
  });

  // For responsive

  $("#addbtn").click(function () {
   
    let image = $(".bookimage").attr("id");

    let data = {
      id: id,
      book_image: image,
      book_name: $(".booknames").text(),
      book_price: $(".bookprices")
        .text()
        .replaceAll(",", "")
        .replaceAll(" MMK", ""),
      author_name: $(".authors").text(),
      qty: $("#qty").val(),
    };

    book.push(data);
    books.push(book);
    localStorage.setItem('cart',JSON.stringify(books));

    if (localStorage.getItem("user") != null) {
      let user = JSON.parse(localStorage.getItem("user"));
      let deliver = {
        address: user["user_address"],
      };
      window.location.href = `../../Customer/Controller/cartListController.php?data=${JSON.stringify(
        books
      )}&address=${JSON.stringify(deliver)}`;
    } else {
      let deliver = {
        address: "Default",
      };
      window.location.href = `../../Customer/Controller/cartListController.php?data=${JSON.stringify(
        books
      )}&address=${JSON.stringify(deliver)}`;
    }
  });
});

function shopCart() {
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
