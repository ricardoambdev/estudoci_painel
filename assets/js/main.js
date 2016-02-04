$(document).ready(function(){

    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toast-bottom-full-width",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    if($('#message').data('status') == true){
        switch ($('#message').data('type'))
        {
            case 'default':
                toastr.info($('#message').data('msg'), $('#message').data('msgTitle'));
                break;
            case 'error':
                toastr.error($('#message').data('msg'), $('#message').data('msgTitle'));
                break;
            case 'warning':
                toastr.warning($('#message').data('msg'), $('#message').data('msgTitle'));
                break;
            case 'success':
                toastr.success($('#message').data('msg'), $('#message').data('msgTitle'));
                break;
            default:
                toastr.info($('#message').data('msg'), $('#message').data('msgTitle'));
                break;
        }
    }

    if($("#fail").data('fail') == 'login'){
        toastr.error("Nome de usuário ou senha incorretos tente novamente.","ERRO DE LOGIN")
    }

    $('.logoff-link').click(function(){
        $('.hover-panel').fadeIn(function(){
            window.location.href = $('#configs').data('url') + 'users/logoff';
        });
    });

    $('body').perfectScrollbar();
    $('.menu-layer').perfectScrollbar();
    $('#notifications').perfectScrollbar();
    $('.message-list').perfectScrollbar();
    $('.message-send-container').perfectScrollbar();

    if ($(".login-error-email").length){
        $('#inputEmail').css('border-color','#FF0000');
    }

    if ($(".login-error-senha").length){
        $('#inputPassword').css('border-color','#FF0000');
    }
});