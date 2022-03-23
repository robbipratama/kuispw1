<?php 
    session_start();

    // Checking session status and ID user
    if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
        if (isset($_SESSION['status']) && !empty($_SESSION['status'])) {
            header("location:dashboard.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Page Title -->
        <title>Kuis Pemrograman Web</title>

        <!-- Include head assets -->
        <?php include('meta/head.php'); ?>
    </head>

    <body>
        <!-- Include navbar component -->
        <?php include('components/navbar.php'); ?>

        <!-- Main Content -->
        <div class="login-section p-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="card-img-top" src="src/custom/img/background.png" alt="Card image">
                            <div class="card-body">
                                <div class="h4 card-title mb-3">Sign In</div>
                                <form>
                                    <div class="mb-1">
                                        <input type="text" name="username" id="input_username" placeholder="Username" class="form-control login-form" autocomplete="off" required>
                                        <p class="username-feedback visually-hidden">
                                            Username must not be empty!
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password" id="input_password" placeholder="Password" class="form-control login-form">
                                        <p class="password-feedback visually-hidden">
                                            Password must not be empty!
                                        </p>
                                    </div>
                                    <button type="submit" class="btn btn-submit" id="login_submit">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
        
        <!-- Include body assets -->
        <?php include('meta/body.php'); ?>

        <!-- Login Form Logic -->
        <script src="src/custom/js/login.js"></script>
    </body>
</html>