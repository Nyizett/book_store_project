let books = [];
let ids = [];
let numbers = [1, 2, 4, 4];
let coreNumber;
let subNumber;
$(document).ready(function () {
  for (let x = 0; x < numbers.length; x++) {
    for (let index = 0; index < numbers.length; index++) {
      if (x == index) {
        subNumber = 0;
        coreNumber = 0;
      } else {
        coreNumber = numbers[x];
        subNumber = numbers[index];
      }
      sum = coreNumber + subNumber;
      if (sum == 8) {
        console.log(coreNumber + "," + subNumber);
      } else {
        console.log(false);
      }
    }
  }

  if(localStorage.getItem('cart') != null){
    let cart = JSON.parse(localStorage.getItem('cart'));
    console.log(cart);
    for (let index = 0; index < cart.length; index++) {
        books.push(cart[index]);
      
    }
    console.log(books);
    
    $("#cartCount2").text(`${JSON.parse(localStorage.getItem('cart')).length}`);
    
    
  }

  $.ajax({
    type: "post",
    url: "../Controller/authorNameGetController.php",
    data: "id=" + authorId,
    success: function (data) {
      let json = JSON.parse(data);
      $(".authorName").text(json[0].author_name);
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

          localStorage.setItem('cart',JSON.stringify(books));
          $("#cartCount2").text(`${JSON.parse(localStorage.getItem('cart')).length}`);
        },
        error: function (err) {},
      });
    }
  });
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
