<?php

/** @var string $contentHTML */
/** @var \App\Core\IAuthenticator $auth */
/** @var \App\Core\LinkGenerator $link */
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <title><?= \App\Config\Configuration::APP_NAME ?></title>
    <link rel="icon" type="image/png" href="public/images/what.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="public/css/css.css">
    <script src="public/js/script.js"></script>
</head>
<body>

<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary bg-dark border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand brand-font" aria-current="page" href="<?= $link->url("home.index") ?>">what?</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link menu-font" href="<?= $link->url("home.shop") ?>">merch</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-font" href="<?= $link->url("home.tour") ?>">tour</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle menu-font" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        music
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item menu-font" href="#">listen</a></li>
                        <li><a class="dropdown-item menu-font" href="#">watch</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item menu-font" href="#">songbook</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled menu-font" aria-disabled="true">contact</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2 search-font" type="search" placeholder="search" aria-label="search">
                <button class="btn btn-outline-secondary search-font" type="submit">search</button>
            </form>
        </div>
    </div>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
<footer class="fixed-bottom bg-body-tertiary bg-dark border-bottom border-body center-aligned" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="footer-font" href="#">by TheaShilhaar</a>
    </div>
</footer>
<!--
<nav class="navbar navbar-expand-sm bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= $link->url("home.index") ?>">
            <img src="public/images/vaiicko_logo.png" title="<?= \App\Config\Configuration::APP_NAME ?>"
                 title="<?= \App\Config\Configuration::APP_NAME ?>">
        </a>
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= $link->url("home.contact") ?>">Kontakt</a>
            </li>
        </ul>
        <?php if ($auth->isLogged()) { ?>
            <span class="navbar-text">Prihlásený používateľ: <b><?= $auth->getLoggedUserName() ?></b></span>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= $link->url("auth.logout") ?>">Odhlásenie</a>
                </li>
            </ul>
        <?php } else { ?>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= \App\Config\Configuration::LOGIN_URL ?>">Prihlásenie</a>
                </li>
            </ul>
        <?php } ?>
    </div>
</nav>
<div class="container-fluid mt-3">
    <div class="web-content">
        <?= $contentHTML ?>
    </div>
</div>
-->
</body>
</html>
