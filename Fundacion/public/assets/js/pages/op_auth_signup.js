/*
 *  Document   : op_auth_signup.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Sign Up Page
 */

var OpAuthSignUp = function() {
    // Init Sign Up Form Validation, for more examples you can check out https://github.com/jzaefferer/jquery-validation
    var initValidationSignUp = function(){
        jQuery('.js-validation-signup').validate({
            errorClass: 'invalid-feedback animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function(error, e) {
                jQuery(e).parents('.form-group > div').append(error);
            },
            highlight: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid').addClass('is-invalid');
            },
            success: function(e) {
                jQuery(e).closest('.form-group').removeClass('is-invalid');
                jQuery(e).remove();
            },
            rules: {
                'signup-username': {
                    required: true,
                    minlength: 3
                },
                'signup-email': {
                    required: true,
                    email: true
                },
                'signup-password': {
                    required: true,
                    minlength: 5
                },
                'signup-password-confirm': {
                    required: true,
                    equalTo: '#signup-password'
                },
                'signup-terms': {
                    required: true
                }
            },
            messages: {
                'signup-username': {
                    required: 'introduce un nombre de usuario',
                    minlength: 'Tu usuario debe contener al menos 3 caracteres'
                },
                'signup-email': 'Introduce un correo electronico valido',
                'signup-password': {
                    required: 'introduce una contraseña',
                    minlength: 'Tu contraseña debe contener al menos 5 caracteres'
                },
                'signup-password-confirm': {
                    required: 'introduce una contraseña',
                    minlength: 'Tu contraseña debe contener al menos 5 caracteres',
                    equalTo: 'Porfavor introduce la misma contraseña'
                },
                'signup-terms': 'Debes aceptar los terminos!'
            }
        });
    };

    return {
        init: function () {
            // Init SignUp Form Validation
            initValidationSignUp();
        }
    };
}();

// Initialize when page loads
jQuery(function(){ OpAuthSignUp.init(); });