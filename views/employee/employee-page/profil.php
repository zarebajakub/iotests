<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
$doc_root = $_SESSION['ROOT'];
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Profil</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/profil.css" media="screen">
    <link rel="icon" href="../../images/Untitled.png">

    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "Boss Page ",
            "logo": "images/Untitled.png"
        }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Profil">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
</head>
<body class="u-body">
<header class="u-clearfix u-header u-header" id="sec-9336">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
            <img src="../../images/Untitled.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
            <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
                <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                   href="#">
                    <svg viewBox="0 0 24 24">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use>
                    </svg>
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;">
                                <rect y="1" width="16" height="2"></rect>
                                <rect y="7" width="16" height="2"></rect>
                                <rect y="13" width="16" height="2"></rect>
                            </symbol>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="u-custom-menu u-nav-container">
                <ul class="u-nav u-unstyled u-nav-1">
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="main-page.php" style="padding: 10px 20px;">Strona Główna</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="projekty.php" style="padding: 10px 20px;">Projekty</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="profil.php" style="padding: 10px 20px;">Profil</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="profil.php" style="padding: 10px 20px;">Wyloguj</a>
                    </li>
                </ul>
            </div>
            <div class="u-custom-menu u-nav-container-collapse">
                <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                    <div class="u-inner-container-layout u-sidenav-overflow">
                        <div class="u-menu-close"></div>
                        <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="main-page.php"
                                                      style="padding: 10px 20px;">Strona Główna</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="projekty.php"
                                                      style="padding: 10px 20px;">Projekty</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="profil.php"
                                                      style="padding: 10px 20px;">Profil</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../../Welcome-Page.html"
                                                      style="padding: 10px 20px;">Wyloguj</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
    </div>
</header>
<section class="u-clearfix u-section-1" id="sec-d3ab">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-default u-text-1">Mój profil</h3>
        <div class="u-container-style u-expanded-width u-group u-palette-5-light-3 u-radius-10 u-shape-round u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <h3 class="u-text u-text-default u-text-2">Imię&nbsp;</h3>
                <h5 class="u-text u-text-default u-text-3"><?= $_SESSION['User']['name'] ?></h5>
                <h3 class="u-text u-text-default u-text-4">Nazwisko</h3>
                <h5 class="u-text u-text-default u-text-5"><?= $_SESSION['User']['surname'] ?></h5>
                <h3 class="u-text u-text-default u-text-6">Email</h3>
                <h5 class="u-text u-text-default u-text-7"><?= $_SESSION['User']['email'] ?></h5>
                <a href="#https://nicepage.review"
                   class="u-border-2 u-border-black u-btn u-button-style u-dialog-link u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Edytuj
                    profil</a>
            </div>
        </div>
    </div>
</section>


<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-146a">
    <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Get organised with us.</p>
    </div>
</footer>
</body>
</html>