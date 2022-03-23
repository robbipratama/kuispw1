<?php
    // Define Session Start
    session_start();


    // Define Response Message Variable
    $response = array();

    // Checking username data
    if (isset($_POST['user']) && !empty($_POST['user'])) {

        // Checking password data
        if (isset($_POST['pass']) && !empty($_POST['pass'])) {
            $username = $_POST['user'];
            $password = $_POST['pass'];

            // Checking credentials data
            if ($username == 'admin' && $password == 'pw123') {

                // Init Session Values
                $_SESSION['id'] = '1';
                $_SESSION['fullname'] = 'Robbi Meidyansyah';
                $_SESSION['username'] = 'admin';
                $_SESSION['status'] = 'active';
                $_SESSION['session_time'] = time();


                $response['status'] = 'success';
                $response['message'] = 'Welcome back, '. $_SESSION['fullname'] .'!';

                echo json_encode($response);
            } else {
                $response['status'] = 'error';
                $response['message'] = "These Credentials isn't matching in our records!";

                echo json_encode($response);
            }
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Empty Password!';

            echo json_encode($response);
        }
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Empty Username!';

        echo json_encode($response);
    }
?>