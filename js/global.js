$('input#name-submit').on('click', function () {
    /*retrieve the name*/
    var name = $('input#name').val();

    /*not do anything when is empty*/
    if ($.trim(name) != '') {
        /*We pass the data*/
        $.post('ajax/name.php', {name: name}, function (data) {
            $('div#name-data').text(data);

        });
    }


});