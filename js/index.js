  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Por favor ingrese su primer nombre'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Por favor ingrese su primer apellido'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Por favor ingrese su correo electronico'
                    },
                    emailAddress: {
                        message: 'Por favor ingrese un correo valido'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Por favor ingrese su numero telefonico'
                    },
                    phone: {
                        country: 'HN',
                        message: 'Por favor ingrese un numero telefonico con codigo de area valido'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Por favor ingrese la direccion de su residencia'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Por favor ingrese su ciudad'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Por favor ingrese su estado'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Por favor ingrese su codigo postal'
                    },
                    zipCode: {
                        country: 'HN',
                        message: 'Por favor ingrese un codigo postal valido'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Por favor, introduzca al menos 10 caracteres y no más de 200'
                    },
                    notEmpty: {
                        message: 'Por favor, proporcione una descripción de su proyecto'
                    }
                    }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});