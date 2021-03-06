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

  $("#CommonHomePage").addClass("border-bottom");
  console.log(categoryId);
  $text = "";
  $.ajax({
    type: "post",
    url: "../Controller/categoriesNameGetController.php",
    data: "id=" + categoryId,
    success: function (data) {
      let json = JSON.parse(data);
      $text = json[0].category_name;
      
      console.log(json);
      $(".categoryName").text($text);
    },
  });

  $(".bookdetail").click(function (e) {
    console.log("hello");

    let id = this.id;

    window.location.href = `../../Customer/Controller/bookDetailController.php?id=${id}`;
  });

  $(".cart").click(function (e) {
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
          console.log(books);
          localStorage.setItem("cart", JSON.stringify(books));
          $("#cartCount2").text(
            `${JSON.parse(localStorage.getItem("cart")).length}`
          );
        },
        error: function (err) {},
      });
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
