$(document).ready(function () {
    var userid =localStorage.getItem(`user`);
    Showdata(userid)

});
function Showdata (userid){
    let json= JSON.parse( userid);
    let id =json["id"];
    console.log(id)

        $.ajax({
            url: "../Controller/showOrderHistory.php",
            type: "POST",
            data:  "id="+id ,
            success: function (result) {
                 let resjs = JSON.parse(result);
                console.log(resjs);
                for (const data of resjs) {
                $("#orderData").append(
                    `<tr class="text-center">
                    <td><img src="../../Images/${data.book_image}"></td>
                    <td>${data.book_name}<br> ${data.author_name}</td>
                    <td>${data.book_price.toLocaleString('en-US')} MMK</td>
                    <td>${data.order_d_quantity}</td>
                    <td>${data.total_amount.toLocaleString('en-US')} MMK</td>
                  </tr>`
                )}
            },
            error: function (err) {
                console.log(err)
            }
            
        })
}