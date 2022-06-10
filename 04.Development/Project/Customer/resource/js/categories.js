$(document).ready(function(){



    $('.my-card').click(function(e){
        
        console.log('hello');
        
         let id = this.id;
        window.location.href = `../../Customer/Controller/bookDetailController.php?id=${id}`;
        


});

});