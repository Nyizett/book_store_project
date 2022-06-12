$(document).ready(function(){

    let userinfo;
    let prices = [];

  
    let itemLength =  $('.count').length;
        console.log(itemLength);
        $('.price').each(function(){
            let price = $(this).text().replaceAll(',','');
            // console.log();
            prices.push(price.replaceAll('MMK',''));
        })

        let sum = 0;
    for(let i = 0 ; i < prices.length; i++){
             sum += parseInt(prices[i]);
    }

    let text = ' MMK';
    
    let total = sum.toString().concat(text);
    // console.log(total);
    $('.totalall').text(numberWithCommas(total));

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
            let total_amount = qty * price;
            console.log(price);
            let data2 = {
                "id" : userinfo['id'],
                "delivery_fees_id" : $('.address').attr('id'),
                "total" : sum,
                "book_id" : this.id,
                "order_d_quantity" : $(this).children('.qty').text(),
                "book_price" : total_amount
            }
            datadetail.push(data2);
        })
        
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