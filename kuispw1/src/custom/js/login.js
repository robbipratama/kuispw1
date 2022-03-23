$(document).ready(function () {

    // Define variables for login forms
    var username = $('#input_username'),
        password = $('#input_password')

    // Check username inputted when user fill the form
    $('#input_username').keyup(function () {
        username_check()
    })

    // Check password inputted when user fill the form
    $('#input_password').keyup(function () {
        password_check()
    })

    // Action submit button
    $('#login_submit').click(function (e) {
        e.preventDefault()
        submit_data()
    })

    $('.login-form').keypress(function (e) {
        if (e.which == 13) {
            submit_data()
            return false
        }
    })

    // Function Submit Data and Checking
    function submit_data() {
        if (username.val() == '' || password.val() == '') {

            // Check the credentials value
            username_check()
            password_check()

        } else {

            // Check the credentials value
            username_check()
            password_check()

            // AJAX Function for submit data
            $.ajax({
                url: '/kuispw1/controller/loginController.php',
                type: 'POST',
                data: {
                    user: username.val(),
                    pass: password.val() 
                },
                success: function (response) {
                    var result = JSON.parse(response)

                    if (result.status == 'error') {
                        Swal.fire({
                            title: 'Error!',
                            text: result.message,
                            icon: 'error',
                            confirmButtonText: 'Back'
                        })
                    } else {
                        // Swal.fire({
                        //     title: 'Success!',
                        //     text: result.message,
                        //     icon: 'success',
                        //     confirmButtonText: 'Done'
                        // })

                        location.href = '/kuispw1/dashboard.php'
                    }
                },
                error: function (error) {
                    Swal.fire({
                        title: 'Server Error!',
                        text: "Something wen't wrong!",
                        icon: 'error',
                        confirmButtonText: 'Back'
                    })
                }
            })
        }
    }
    
    // Function for checking the username form value
    function username_check() {
        let user_check = username.val()

        if (user_check === '') {
            $('.username-feedback').removeClass('visually-hidden').addClass('text-danger')
        } else {
            $('.username-feedback').addClass('visually-hidden').removeClass('text-danger')
        }
    }

    // Function for checking the password form value
    function password_check() {
        let pass_check = password.val()

        if (pass_check === '') {
            $('.password-feedback').removeClass('visually-hidden').addClass('text-danger')
        } else {
            $('.password-feedback').addClass('visually-hidden').removeClass('text-danger')
        }
    }
})