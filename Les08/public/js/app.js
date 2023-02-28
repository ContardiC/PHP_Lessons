$(document).ready(function() {
    $('#register-form').submit(function(event) {
        event.preventDefault();
        // Prendo i dati dal form
        let email = $('#email').val();
        let password = $('#password').val();
        let url='http://localhost:8888/PHP_Lessons/Les08/auth/register/register.php';
        // Effettuo la chiamata AJAX
        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: {
                email: email,
                password: password
            },
            success: function(data) {
                // Registrazione effettuata con successo
                alert(data.message);
            },
            error: function(xhr, status, error) {
                // Errore durante la registrazione
                alert(xhr.responseJSON.message);
            }
        });
    });
});