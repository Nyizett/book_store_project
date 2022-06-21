$(document).ready(function() {
$('.count').prop('disabled', true);
let total = [];
let text = ' MMK';
let vouchers = $('.vouchers').length;
let p_price;
let qty;
let sum;
if($(".no-item").text()=="There is no item in your cart."){
    $(".tottab").addClass("removecss");
}else{$(".tottab").removeClass("removecss");}
$('.b_price').each(function(index){
    
        p_price =$(this).text().replaceAll(',','').replaceAll(' MMK','');
        qty = $(this).next().children().find('#qty').val();
        sum = qty * p_price;
        console.log(sum);
        console.log(qty);
    $(this).next().next().text(numberWithCommas(sum.toString().concat(text)));
        
    
})

    // let qty = $('#qty').val(); 
    
    // let sum =  qty * p_price;
  
    // console.log(sum);
    // $('.total').text(numberWithCommas(sum.toString().concat(text)));



totalPrice(total,text);
$(document).on('click', '.plus', function() {

    total = [];
//    console.log($(this).prev().val());
    
 
   let name =   $(this).parent().parent().prev().prev().find('.name').text();
//    console.log($(this).parent().parent().prev().prev().find('.name').text());
    if ($(this).prev().val() < 9) {
        
        $(this).prev().val(parseInt($(this).prev().val()) + 1);
        let price = $(this).parent().parent().prev().text().replaceAll(',','').replaceAll(' MMK','');
        let quantity = Number($(this).prev().val()) ;
         let answer = price * quantity;
         console.log(answer);
       
        $(this).parent().parent().next().text(numberWithCommas(answer.toString().concat(text)));
        

         $('.bookname').each(function(index){
            // console.log(  index+ '' +$(this).text());
       
               if((name == $(this).text())){

                     $('.cal').each(function(e){
                    
                        if(  name == $(this).prev().text()){
                            $(this).find('.bookquantity').text(quantity);
                        }
                        
                         
                     })
               }
           });
       
    }

    totalPrice(total,text);

   
});
$(document).on('click', '.minus', function() {
    // $('.counts').val(parseInt($('.counts').val()) - 1);
    total = [];
    let name =   $(this).parent().parent().prev().prev().find('.name').text();
    

    $(this).next().val(parseInt($(this).next().val())- 1);
    let price = $(this).parent().parent().prev().text().replaceAll(',','').replaceAll(' MMK','');
    let quantity = Number($(this).next().val()) ;
    let answer = price * quantity;
    $(this).parent().parent().next().text(numberWithCommas(answer.toString().concat(text)));


    $('.bookname').each(function(index){
   
           if((name == $(this).text())){

                 $('.cal').each(function(e){
                
                    if(  name == $(this).prev().text()){
                        $(this).find('.bookquantity').text(quantity);
                    }
                    
                     
                 })
           }
       });


    if ($(this).next().val() == 0) {
        $(this).next().val(1);
        $(this).parent().parent().next().text(numberWithCommas(price).concat(text));

        $('.bookname').each(function(index){
            // console.log(  index+ '' +$(this).text());
       
               if((name == $(this).text())){
    
                     $('.cal').each(function(e){
                    
                        if(  name == $(this).prev().text()){
                            $(this).find('.bookquantity').text(1);
                        }
                        
                         
                     })
               }
           });
    }
    totalPrice(total,text);
});


    $('.close').click(function(){
        total = [];
        $(this).parent().parent().remove();
        let name = $(this).parent().parent().children().next().find('.name').text();

        $('.bookname').each(function(index){
            // console.log(  index+ '' +$(this).text());
       
               if((name == $(this).text())){
    
                     $('.cal').each(function(e){
                    
                        if(  name == $(this).prev().text()){
                            $(this).parent().remove();
                        }
                        
                         
                     })
               }
           });
        totalPrice(total,text);
    });

    $('.cancel').click(function(e){
        localStorage.removeItem('cart');
    });
    $('.buy').click(function(e){
            e.preventDefault();
            // console.log('hello');
            let  items = [];
            let length = $('.vouchers').length;
            // console.log(length);
            // let length = $('.')
            if(localStorage.getItem('user') != null){
                if(length > 0){
                    $('.vouchers').each(function(){
                        // console.log($('.dfee[id]'));
                let qty = Number($(this).children(".cal").children('.bookquantity').text());
                let price =  Number($(this).children(".cal").children('.bookprice').text().replaceAll(',','').replaceAll(' MMK',''));
                
                let total = qty * price;
                    let item = {
                        "id" : this.id,
                        "delivery_fee_id" : $('.dfee').attr('id'),
                        "book_name" : $(this).children('.bookname').text(),
                        "quantity" : $(this).children(".cal").children('.bookquantity').text(),
                        "book_p"  : numberWithCommas(price),
                        "book_price" : numberWithCommas(total),
                        "total" : numberWithCommas($('.all').text().replaceAll(' MMK',''))
                    };
    
                    // console.log(item['id']);
                    
                        // console.log('hello');
                        items.push(item);
                    
                   
                });
                console.log(items);
                
                localStorage.removeItem('cart');
                window.location.href = `../../Customer/Controller/orderController.php?data=${JSON.stringify(items)}`;
                // console.log(items);
                }
            }else{
                window.location.href = `../../Customer/View/signin.php`;
            }
            
           
           
    })
});



function totalPrice(total,text){

    $('.total').each(function(){
       
        let prices = parseInt((($(this).text().replaceAll(',',''))));
      
        total.push(prices);
       

    })
    let b_price = 0;
    for (let index = 0; index < total.length; index++) {
            b_price += total[index];
        //  b_price =+ Number(total[index]);
            
    }   
    b_price += Number($('.dfee').text().replaceAll(',','').replaceAll(' MMK',''));
    
    $('.all').text(numberWithCommas(b_price.toString().concat(text)));
}
function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}