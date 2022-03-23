<?php
    $login = '';
    $name = '';

    // Check session status and fullname data
    if (isset($_SESSION['status']) && !empty($_SESSION['status'])) {
        if (isset($_SESSION['fullname']) && !empty($_SESSION['fullname'])) {
            $login = 'active';
            $name = $_SESSION['fullname'];
        }
    }
?>

<nav class="navbar fixed-top navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo ($login == 'active') ? '/kuispw1/dashboard.php' : '/kuispw1/index.php' ?>">Kuis PW</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php echo ($login != 'active') ? 'disabled' : 'active ' ?>" href="#section-home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($login != 'active') ? 'disabled' : '' ?>" href="#section-about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($login != 'active') ? 'disabled' : '' ?>" href="#section-hobby">Hobby</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($login != 'active') ? 'disabled' : '' ?>" href="#section-porto">Portofolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo ($login != 'active') ? 'disabled' : '' ?>" href="#section-place">Place</a>
                </li>
            </ul>
            <?php if ($login == 'active') { ?>
            <div class="d-flex">
                <a class="btn btn-outline-light" href="/kuispw1/logout.php">Logout, <?php echo $name ?></a>
            </div>
            <?php } ?>
        </div>
    </div>
</nav>