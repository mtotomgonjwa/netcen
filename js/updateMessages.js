$('#post-messages').on('click', function (event) {
    event.preventDefault();
    $.ajax({
        url: "MessageTools.php",
        type: "post",
        data: $('#chat-form').serialize(),
        success: function (strMessage) {
            $('#post-result').text(strMessage)

        },
        error: function (strMessage) {
            $('#post-result').text(strMessage)

        }


    })
    clearInput();


});
function clearInput() {
    $("#chat-form")[0].reset();

}
