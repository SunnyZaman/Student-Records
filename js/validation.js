$('form input').keyup(function() {    
        var empty = false;
        $('form input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });
    
        if (empty) {
            $('.submit-button').attr('disabled', 'disabled');
        } else {
            $('.submit-button').removeAttr('disabled');
        }
    });