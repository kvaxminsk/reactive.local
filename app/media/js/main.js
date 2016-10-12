$(document).ready(function() {
    $('#form-contacts').submit(function (e) {
//                alert($(this).find('#name').val());
//                alert($(this).find('#phone').val());
//                alert($(this).find('#email').val());
        var name = $(this).find('#name').val();
        var phone = $(this).find('#phone').val();
        var email = $(this).find('#email').val();
        var message = $(this).find('#message').val();


        //0103311

        e.preventDefault();

        $.ajax({
            type: 'get',
            url: '/contact',
            data: 'name=' + name + '&phone=' + phone  + '&email=' + email + '&email=' + message,
            success: function (data) {
                if(data == 'ok') {
                    $('.answer_from_server').text('Данные успешно отправлены.').fadeIn(300).delay(4000).fadeOut(300, function () {
                        $('#name').val('');
                        $('#phone').val('');
                        $('#email').val('');
                        $('#message').val('');
                    });
                }
               else {
                    $('.answer_from_server').text('Письмо не отправлено. Позвоните нам или попробуйте позже.').fadeIn(300).delay(4000).fadeOut(300, function () {
                        //$('#name').val('');
                        //$('#phone').val('');
                        //$('#email').val('');
                        //$('#message').val('');
                    });
                }
            }
        });
        return false;
    });
})
