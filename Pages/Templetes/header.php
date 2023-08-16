<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?php echo strtoupper($_GET['page']) ; ?></title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>

    <nav class="navbar fixed-top navbar-expand-lg bg-light">
        <div class="container">
            <a class="navbar-brand">Hasibul Hamim</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="route.php?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="route.php?page=about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="route.php?page=services">services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="route.php?page=work">work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="route.php?page=contact">contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>