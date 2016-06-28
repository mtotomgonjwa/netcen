$('#register-submit').on('click', function (event) {
    event.preventDefault();
    $.ajax({
        url: "register.php",
        type: "post",
        data: $('#register-form').serialize(),
        success: function (strMessage) {
            $('#result').text(strMessage)

        },
        error: function (strMessage) {
            $('#result').text(strMessage)

        }


    })
    clearInput();


});


/*function validatefields() {
 $("#register-form").validationEngine ()
 success(st)


 }*/
function clearInput() {
    $("#register-form")[0].reset();

}
