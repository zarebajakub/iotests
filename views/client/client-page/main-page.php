<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$doc_root = $_SESSION['ROOT'];

require_once $doc_root.'/dao/baseDao.php';

$organisations = getOrganisations();
if(isset($organisations[0]) && is_array($organisations) && !empty($organisations))
{
    $organisations = [$organisations];
}
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
    <link rel="icon" href="../../images/Logo.png">

    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "logo": "images/Untitled.png"
    }</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Strona Główna">
    <meta property="og:type" content="website">
</head>
<body class="u-body">
<header class="u-clearfix u-header u-header" id="sec-9336">
    <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
            <img src="../../images/Logo.png" class="u-logo-image u-logo-image-1">
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
                                href="moje-zlecenia.php" style="padding: 10px 20px;">Moje zlecenia</a>
                    </li>
                    <li class="u-nav-item"><a
                                class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                                href="wykonawcy.html" style="padding: 10px 20px;">Wykonawcy</a>
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
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="moje-zlecenia.php"
                                                      style="padding: 10px 20px;">Moje zlecenia</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="wykonawcy.html"
                                                      style="padding: 10px 20px;">Wykonawcy</a>
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
<section class="u-align-center u-clearfix u-section-1" id="sec-51f3">
    <div class="u-clearfix u-sheet u-valign-top u-sheet-1">
        <?php
            if(isset($_SESSION['lastPageData'][0]))
            {
                echo $_SESSION['lastPageData'][0];
            }
        ?>
        <h2 class="u-align-left u-text u-text-default u-text-1">Dodaj zadanie&nbsp;</h2>
        <div class="u-align-center u-container-style u-group u-palette-5-light-3 u-radius-10 u-shape-round u-group-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <div class="u-form u-palette-5-light-2 u-radius-10 u-form-1">
                    <form action="<?=$SUB_FOLDER?>/controllers/action-add-project.php" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form"
                          source="custom" name="form" style="padding: 10px;">
                        <div class="u-form-group u-form-select u-form-group-1">
                            <label for="select-0a65" class="u-label">Wybierz firmę</label>
                            <div class="u-form-select-wrapper">
                                <select id="select-0a65" name="organisation-id"
                                        class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-10 u-white">
                                    <?php 
                                        foreach($organisations as $org)
                                        {
                                            ?>
                                            <option value="<?= $org['organization_id'] ?>"><?= $org['name'] ?></option>
                                    <?php } ?>
                                    
                                </select>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1"
                                     class="u-caret">
                                    <path fill="currentColor" d="M4 8L0 4h8z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="u-form-group u-form-name">
                            <label for="name-39a1" class="u-label">Opis zadania </label>
                            <input type="text" placeholder="Opis " id="description-project" name="name"
                                   class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-10 u-white"
                                   required="">
                        </div>
                        <div class="u-align-left u-form-group u-form-submit">
                            <a href="#" class="u-btn u-btn-round u-btn-submit u-button-style u-radius-10">Prześlij</a>
                            <input type="submit" value="submit" class="u-form-control-hidden">
                        </div>
                        <div class="u-form-send-message u-form-send-success"> Dziękujemy! Twoja wiadomość została
                            wysłana!
                        </div>
                        <div class="u-form-send-error u-form-send-message"> Przepraszamy, wiadomość nie mogła zostać
                            wysłana. Popraw błędy i spróbuj ponownie.
                        </div>
                        <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="u-clearfix u-section-2" id="sec-ef9d">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Ostatnio dodane zadania&nbsp;</h2>
        <div class="u-container-style u-expanded-width u-group u-palette-5-light-3 u-radius-10 u-shape-round u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <div class="u-align-left u-clearfix u-gutter-26 u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout">
                        <div class="u-layout-col">
                            <div class="u-size-30">
                                <div class="u-layout-row">
                                    <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                                        <div class="u-container-layout u-container-layout-2">
                                            <h3 class="u-text u-text-default u-text-2">Przykładowy Nagłówek</h3>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                                        <div class="u-container-layout u-valign-middle u-container-layout-3">
                                            <a href="https://nicepage.com/c/food-restaurant-website-templates"
                                               class="u-align-right u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Stan
                                                zadania</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="u-size-30">
                                <div class="u-layout-row">
                                    <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-3">
                                        <div class="u-container-layout u-container-layout-4">
                                            <h3 class="u-text u-text-default u-text-3">Przykładowy Nagłówek</h3>
                                        </div>
                                    </div>
                                    <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-4">
                                        <div class="u-container-layout u-valign-middle u-container-layout-5">
                                            <a href="https://nicepage.studio"
                                               class="u-align-right u-border-2 u-border-black u-btn u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-2">Stan
                                                zadani</a>
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
</body>
</html>