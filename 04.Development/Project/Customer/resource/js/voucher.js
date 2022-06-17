$(document).ready(function(){

    let userinfo;
    let prices = [];

    
 

    if(localStorage.getItem('user') != null){
         userinfo = JSON.parse(localStorage.getItem('user'));
    console.log(userinfo);
        $('.name').text(userinfo['user_name']);
        $('.phone').text(userinfo['user_phone']);
        $('.email').text(userinfo['user_email']);
        $('.address').text(userinfo['user_address']);
    }
    

    $('.order').click(function(){

       
       
        let datadetail = [];
        $('.count').each(function(){
            let qty = $(this).children('.qty').text();
            let price = $(this).children('.price').text().replaceAll(',','').replaceAll('MMK','');
           
            
            // console.log(total_amount);
            let data2 = {
                "id" : userinfo['id'],
                "delivery_fees_id" : $('.address').attr('id'),
                "total" : $('.totalall').text().replaceAll(',','').replaceAll(' MMK + (Delivery Fee)',''),
                "book_id" : this.id,
                "order_d_quantity" : qty,
                "book_price" : price
            }
            datadetail.push(data2);
        })
        
        console.log(datadetail);
        // $.ajax({
        //     type: "POST",
        //     url: "../Controller/orderDetailController.php",
        //     data: { order: JSON.stringify(data) },
        //     success: function (res) {
        //       console.log(res);
              
    
              
        //     },
        //     error: function (err) {
        //         console.log(err);
        //     },
        //   });

          $.ajax({
            type: "POST",
            url: "../Controller/orderDetailController.php",
            data: { orderdetail: JSON.stringify(datadetail) },
            success: function (res) {
                
              
    
              
            },
            error: function (err) {
                
            },
          });
    })
});

function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}