<?php session_start(); ?>

<nav class="navbar navbar-expand-md navbar-light d-flex flex-row justify-content-between">
        <div class="container-xxl">
            <a href="#intro" class="navbar-brand">
                <span class="fw-bold text-secondary imaged">
                    <img src="./reheboth.png" class = "logo img-responsive" alt="">
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="#main-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-around align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Individual Account</a>
                    </li>

                    <li class="nav-item">
                        <a href="form2.php" class="nav-link">Corporate Account</a>
                    </li>
                    <?php if ($_SESSION['email']) {?>
                    <li class="nav-item mx-4">
                        <button type="button" class="btn btn-lg btn-danger">
                            Logout
                          </button>
                    </li>
                    <?php } else {?>
                        <button type="button" class="btn btn-lg btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Register/Login
                          </button>
                        <?php } ?>
                </ul>
            </div>

        </div>
    </nav>