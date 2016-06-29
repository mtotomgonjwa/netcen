$('#post-messages').on('click', function (event) {
    event.preventDefault();
    $.ajax({
        url: "MessageTools.php",
        type: "post",
        data: $('#chat-form').serialize(),
        success: function (strMessage) {
            $('#post-result').text(strMessage)
            populateData();
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
function populateData() {
    var url = 'http://localhost/PHPProjects/netcen/messages.php';
    $.ajax({
        url: url,
        type: 'GET',
        success: function (response) {
            var userslist = "";
            var chatmessages = "";
            var mytab = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            /*users list*/
            for (i = 0; i < response.count; i++) {
                var obj = $.parseJSON(response.data[i]);
                console.log(obj.username);
                userslist += "<br/>" + obj.username;
                chatmessages += "<br/>" + obj.chat.message + mytab + obj.chat.datetime;

            }
            $('#users-list').html(userslist);

            /*Chat messages*/

            $('#chat-conversation').html(chatmessages);
        }
    });

}