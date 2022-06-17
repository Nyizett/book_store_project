$(document).ready(function () {

    $('#signinForm').on('submit', function(e) {
        e.preventDefault();
      
        $.ajax({
            type: "POST",
            url: "../Controller/loginController.php",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success : function(res){
                    let responData;
                    console.log(res);
                if(res.length > 0){
                    
                 responData = JSON.parse(res);
                }
                console.log(responData);
                if(responData.login == true){
                    
                    localStorage.setItem('user',JSON.stringify(responData[0][0]));
                    window.location.href = "../../Customer/View/homepage.php";
                }else if (responData.login == "your gmail does not exit") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Your email does not exit or banned from admin team',
                    });
                    $('#email').val('');
                    $('#password').val('');
                    $('#email').css('border-color','red');
                }else{
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Your password is wrong',
                    });
                    $('#password').val('');
                    $('#password').css('border-color','red');
                }
            },
            error : function(err){
                console.log(error);
            }
        });
    });
});