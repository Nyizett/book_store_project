$(document).ready(function() {
$('.count').prop('disabled', true);
let total = [];
   
totalPrice(total);
$(document).on('click', '.plus', function() {

    total = [];
//    console.log($(this).prev().val());
    
 
   let name =   $(this).parent().parent().prev().prev().find('.name').text();
//    console.log($(this).parent().parent().prev().prev().find('.name').text());
    if ($(this).prev().val() < 9) {
        
        $(this).prev().val(parseInt($(this).prev().val()) + 1);
        let price = $(this).parent().parent().prev().text().replaceAll(',','');
        let quantity = Number($(this).prev().val()) ;
         let answer = price * quantity;
         console.log(answer);
       
        $(this).parent().parent().next().text(numberWithCommas(answer));
        

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

    totalPrice(total);

   
});
$(document).on('click', '.minus', function() {
    // $('.counts').val(parseInt($('.counts').val()) - 1);
    total = [];
    let name =   $(this).parent().parent().prev().prev().find('.name').text();
    

    $(this).next().val(parseInt($(this).next().val())- 1);
    let price = $(this).parent().parent().prev().text().replaceAll(',','');
    let quantity = Number($(this).next().val()) ;
    let answer = price * quantity;
    $(this).parent().parent().next().text(numberWithCommas(answer));


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
        $(this).parent().parent().next().text(numberWithCommas(price));

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
    totalPrice(total);
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
        totalPrice(total);
    });


    $('.buy').click(function(e){
            e.preventDefault();
            console.log('hello');
            let items = [];
            let itemCount = [];
            let itemlength = $('.itembody tr').length;
           
            console.log(itemlength);
            if(itemlength >0){
                for(let i = 0; i < itemlength ; i++){
                    console.log($(this).parent().parent().children().children().next().children().prev(i).attr("id"));
                }   
            }
    })
});



function totalPrice(total){
    $('.total').each(function(){
       
        let prices = parseInt((($(this).text().replaceAll(',',''))));
        console.log(prices);
        total.push(prices);
        console.log(total);

    })
    let b_price = 0;
    for (let index = 0; index < total.length; index++) {
            b_price += total[index];
        //  b_price =+ Number(total[index]);
            
    }   
    console.log();
    $('.all').text(numberWithCommas(b_price));
}
function numberWithCommas(x) {
    return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
}