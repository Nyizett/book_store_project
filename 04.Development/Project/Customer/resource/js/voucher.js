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

       
        let  data = {
            "id" : userinfo['id'],
            "address" : userinfo['user_address'],
            "total" : sum
        }
        console.log(data);
        // $.ajax({
        //     type: "POST",
        //     url: "../Controller/cartController.php",
        //     data: { send: JSON.stringify(data) },
        //     success: function (res) {
        //       console.log(res);
        //       books.push(JSON.parse(res));
    
        //       $("#cartCount2").text(`${books.length}`);
        //     },
        //     error: function (err) {},
        //   });
    })
});

function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}