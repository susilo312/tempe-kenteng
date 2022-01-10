<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My favicons -->
    <!-- <link rel="shortcut icon" href="img/logo-tempe-kenteng.png"> -->
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- Swiper css -->
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/swiper-bundle.min.css">

    <!-- Me style css -->
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">

    <title>Rumah Tempe Kenteng || <?= $data['page']; ?></title>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">Rumah Tempe Kenteng</a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list grid">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class="uil uil-estate nav__icon"></i> Home
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#produk" class="nav__link">
                            <i class="uil uil-file-alt nav__icon"></i> Produk
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#galeri" class="nav__link">
                            <i class="uil uil-scenery nav__icon"></i> Galeri
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#login" class="nav__link">
                            <i class="uil uil-user nav__icon"></i> Login
                        </a>
                    </li>
                </ul>

            </div>


        </nav>
    </header>

    <div class="nav__btns">
        <i class="uil uil-moon change-theme" id="theme-button"></i>
    </div>