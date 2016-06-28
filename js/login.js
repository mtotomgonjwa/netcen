/**
 * Created by black on 6/28/16.
 */
$('#login-submit').on('click', function (event) {
    event.preventDefault();
    $.ajax({
        url: "login.php",
        type: "post",
        data: $('#login-form').serialize(),
    })


});