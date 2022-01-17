<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$doc_root = $_SESSION['ROOT'];
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Dodaj zadanie, Ostatnio dodane zadania">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Strona Główna</title>
    <link rel="stylesheet" href="../../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/main-page.css" media="screen">
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
    <meta property="og:title" content="Strona Główna">
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
                                href="profil.php" style="padding: 10px 20px;">Profil</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="projekty.php" style="padding: 10px 20px;">Projekty</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="pracownicy.html" style="padding: 10px 20px;">Pracownicy</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="dodaj-zadanie.html" style="padding: 10px 20px;">Dodaj zadanie</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="../../Welcome-Page.html" style="padding: 10px 20px;">Wyloguj</a>
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
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="profil.php"
                                                      style="padding: 10px 20px;">Profil</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="projekty.php"
                                                      style="padding: 10px 20px;">Projekty</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="pracownicy.html"
                                                      style="padding: 10px 20px;">Pracownicy</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="dodaj-zadanie.html"
                                                      style="padding: 10px 20px;">Dodaj zadanie</a>
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
<section class="u-clearfix u-section-1" id="sec-ef9d">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Ostatnio dodane zadania&nbsp;</h2>
        <div class="u-container-style u-expanded-width u-group u-palette-5-light-3 u-radius-10 u-shape-round u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <div class="u-align-left u-clearfix u-expanded-width u-gutter-26 u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout">
                        <div class="u-layout-col">
                            <div class="u-size-60">
                                <div class="u-layout-row">
                                    <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                                        <div class="u-container-layout u-container-layout-2">
                                            <h3 class="u-text u-text-default u-text-2">Zadanie do przypisania&nbsp;</h3>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                                        <div class="u-container-layout u-valign-middle u-container-layout-3">
                                            <a href="#sec-b590"
                                               class="u-align-right u-border-2 u-border-black u-btn u-button-style u-dialog-link u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Przypisz
                                                pracownika</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-146a">
    <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Get organised with us.</p>
    </div>
</footer>
<section
        class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-section-5"
        id="sec-b590">
    <div class="u-align-center u-container-style u-dialog u-white u-dialog-1">
        <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-left u-text u-text-default u-text-1">Przypisz pracownika do zadania&nbsp;</h2>
            <h3 class="u-align-left u-text u-text-default u-text-2">Nazwa zadania&nbsp;</h3>
            <div class="u-expanded-width-xs u-form u-form-1">
                <form action="#" method="POST" class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form"
                      style="padding: 0px;" source="custom" name="form">
                    <div class="u-form-group u-form-select u-form-group-1">
                        <label for="select-35d5" class="u-label u-text-grey-30 u-label-1">Pracownik</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-35d5" name="select"
                                    class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white">
                                <option value="Pracownik 1">Pracownik 1</option>
                                <option value="Pracownik 2">Pracownik 2</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="u-align-center u-form-group u-form-submit u-form-group-2">
                        <a href="#" class="u-black u-btn u-btn-submit u-button-style u-btn-1">Potwierdź<br>
                        </a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent.</div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors
                        then try again.
                    </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                </form>
            </div>
        </div>
        <button class="u-dialog-close-button u-icon u-text-grey-50 u-icon-1">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 413.348 413.348" style="">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5801"></use>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                 xml:space="preserve" class="u-svg-content" viewBox="0 0 413.348 413.348" id="svg-5801"><path d="m413.348 24.354-24.354-24.354-182.32 182.32-182.32-182.32-24.354 24.354 182.32 182.32-182.32 182.32 24.354 24.354 182.32-182.32 182.32 182.32 24.354-24.354-182.32-182.32z"></path></svg>
        </button>
    </div>
</section>
<style> .u-section-5 {
    min-height: 826px;
}

.u-section-5 .u-dialog-1 {
    width: 566px;
    min-height: 431px;
    margin: 60px auto;
}

.u-section-5 .u-container-layout-1 {
    padding: 40px 30px;
}

.u-section-5 .u-text-1 {
    font-size: 2.5rem;
    letter-spacing: 2px;
    text-transform: none;
    margin: 0 auto 0 0;
}

.u-section-5 .u-text-2 {
    margin: 13px auto 0 0;
}

.u-section-5 .u-form-1 {
    height: 104px;
    width: 400px;
    margin: 20px auto 0;
}

.u-section-5 .u-form-group-1 {
    width: 100%;
}

.u-section-5 .u-label-1 {
    font-size: 1rem;
}

.u-section-5 .u-form-group-2 {
    width: 100%;
}

.u-section-5 .u-btn-1 {
    padding-left: 60px;
    padding-right: 60px;
    background-image: none;
    border-style: none;
    text-transform: none;
    width: 100%;
}

.u-section-5 .u-icon-1 {
    width: 15px;
    height: 15px;
    left: auto;
    top: 17px;
    position: absolute;
    right: 16px;
}

@media (max-width: 991px) {
    .u-section-5 .u-container-layout-1 {
        padding-bottom: 30px;
    }
}

@media (max-width: 767px) {
    .u-section-5 .u-dialog-1 {
        width: 540px;
    }

    .u-section-5 .u-container-layout-1 {
        padding-top: 30px;
        padding-left: 40px;
        padding-right: 40px;
    }
}

@media (max-width: 575px) {
    .u-section-5 .u-dialog-1 {
        width: 340px;
        height: auto;
    }

    .u-section-5 .u-container-layout-1 {
        padding-top: 40px;
        padding-left: 25px;
        padding-right: 25px;
    }

    .u-section-5 .u-text-1 {
        font-size: 2.125rem;
    }

    .u-section-5 .u-form-1 {
        height: 152px;
        margin-right: initial;
        margin-left: initial;
        width: auto;
    }
}</style>
</body>
</html>