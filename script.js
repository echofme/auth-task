$( function() {
    $("input[type=date]").datepicker();

    var form_messages = $('#form-messages');

    $("#to_signup, #to_login").click(function() {
        $("#ajax-login").toggle();
        $("#ajax-signup").toggle();
        $(form_messages).text('');
        return false;
    });
    
    $("#ajax-login, #ajax-signup").submit(function(event) {
        event.preventDefault();
        if (event.target.id == 'ajax-signup') {
            if (!confirmPass(event.target)) {
                $(form_messages).text('Пароли не совпадают');
                return;
            }
        }

        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: formData
        }).done(function(response) {
            if ((event.target.id == 'ajax-signup') && (response == "1")) {
                $("#auth").html('<h1>Поздравляем!</h1><br>Вы успешно зарегистрированы и вы будете переправлены на страницу авторизации через 3сек.');
                window.setTimeout(function(){location.reload()},3000);
            } else if (response == "1") {
                window.location.href = './';
            } else {
                $(form_messages).text(response);
            }
        }).fail(function(data) {
            if (data.responseText !== '') {
                $(form_messages).text(data.responseText);
            } else {
                $(form_messages).text('Возникла непредвиденная ошибка');
            }
        });
    });

    function confirmPass(form) {
        var pass = $(form).find("input[name=password]").val();
        var pass_conf = $(form).find("input[name=password_conf]").val();
        
        if (pass == pass_conf) {
            return 1;
        }
        return 0;
    }

})