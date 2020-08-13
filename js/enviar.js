
// Fazer solicitação Ajax ao servidor para envio de email

$(document).ready(function () {
    $("#btn").click(function () {
        var name = $("#name").val();
        var email = $("#email").val();
        var tel = $("#tel").val();
        var message = $("#message").val();
        $.post('contact/enviar.php', {
            name: name,
            email: email,
            tel: tel,
            message: message
        }, function (retorno) {
            if (retorno != null) {
                $('form').trigger("reset");
                $('#alert').addClass("alert-success");
                $('#alert').fadeIn().html(retorno);
                setTimeout(function () {
                    $('#alert').fadeOut('Slow');
                }, 3000);
            } else {

                $('form').trigger("reset");
                $('#alert').addClass("alert-danger");
                $('#alert').fadeIn().html(retorno);
                setTimeout(function () {
                    $('#alert').fadeOut('Slow');
                }, 3000);

            }
        });
    });
});