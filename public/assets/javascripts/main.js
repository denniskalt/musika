$(function() {
    $('button.new_album').click(function() {
        $('#new_album_entry').show();
    });

    $('#new_album_entry').submit(function () {
        var form_valid = true;

        $(this).find('input[type=text]').each(function(event) {
            if ($(this).val().length == 0) {
                $(this).css('border', '2px solid red');
                form_valid = false;
           } else {
               $(this).css('border', '');
           }
        });

        return form_valid;
    });
})
