<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$doc_root = $_SESSION['ROOT'];

require_once $doc_root.'/dao/baseDao.php';

$projects = getProjects($_SESSION['User']['organization_id']);
if(isset($projects[0]) && is_array($projects) && !empty($projects))
{
    $projects = [$projects];
}

if($projects !== false && count($projects) > 0 )
{
    foreach($projects as $project)
    {
        $project['tasks'] = getTasksOfProject($project['project_id']);
        $project['tasks'] = [$project['tasks']];
    }
}
else { $projects = []; }

?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Projekty</title>
    <link rel="stylesheet" href="../../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../../css/Projekty.css" media="screen">
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
    <meta property="og:title" content="Projekty">
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
                            href="main-page.php" style="padding: 10px 20px;">Strona G????wna</a>
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
                                href="dodaj-zadanie.php" style="padding: 10px 20px;">Dodaj zadanie</a>
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
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Strona-G????wna.html"
                                                      style="padding: 10px 20px;">Strona G????wna</a>
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
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="dodaj-zadanie.php"
                                                      style="padding: 10px 20px;">Dodaj zadanie</a>
                            </li>
                            <li class="u-nav-item"><a class="u-button-style u-nav-link" href="../../Welcome-Page.html"
                                                      style="padding: 10px 20px;">Wyloguj</a>
                        </ul>
                    </div>
                </div>
                <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
            </div>
        </nav>
    </div>
</header>
<section class="u-align-left u-clearfix u-section-1" id="sec-2332">
    <div class="u-clearfix u-sheet u-sheet-1">

        <?php foreach($projects as $project) { ?>

            <h3 class="u-text u-text-default u-text-1"><?= $project['name'] ?></h3>
            <div class="u-container-style u-expanded-width u-group u-palette-5-light-3 u-radius-10 u-shape-round u-group-1">
                <div class="u-container-layout u-container-layout-1">
                    <div class="u-align-center u-clearfix u-gutter-16 u-layout-wrap u-layout-wrap-1">
                        <div class="u-layout">
                            <?php foreach($project['tasks'] as $task) { ?>
                                <div class="u-layout-row">
                                    <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                                        <div class="u-container-layout u-valign-top u-container-layout-2">
                                            <h5 class="u-text u-text-default u-text-2"><?= $task['task_id'] ?>&nbsp;</h5>
                                            <h6 class="u-text u-text-3"><?= $project['description'] ?>&nbsp;</h6>
                                        </div>
                                    </div>
                                    <div class="u-align-center u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                                        <div class="u-container-layout u-valign-middle u-container-layout-3">
                                            <a href="#sec-dfb8"
                                            class="u-align-right u-border-1 u-border-black u-btn u-btn-round u-button-style u-dialog-link u-hover-black u-none u-radius-10 u-text-black u-text-hover-white u-btn-1">Edytuj
                                                zadanie&nbsp;</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</section>


<footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-146a">
    <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Get organised with us.</p>
    </div>
</footer>
<section
        class="u-align-center u-black u-clearfix u-container-style u-dialog-block u-opacity u-opacity-70 u-valign-middle u-section-7"
        id="sec-dfb8">
    <div class="u-align-left u-container-style u-dialog u-white u-dialog-1">
        <div class="u-container-layout u-container-layout-1">
            <h2 class="u-align-left u-text u-text-default u-text-1">Edytuj zadanie&nbsp;</h2>
            <div class="u-expanded-width-xs u-form u-form-1">
                <form action="#" method="POST" class="u-clearfix u-form-spacing-28 u-form-vertical u-inner-form"
                      style="padding: 0px;" source="custom" name="form">
                    <div class="u-form-group u-form-group-1">
                        <label for="text-9320" class="u-label u-text-grey-30 u-label-1">Nazwa zadania </label>
                        <input type="text" placeholder="" id="text-9320" name="text"
                               class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-1">
                    </div>
                    <div class="u-form-group u-form-textarea u-form-group-2">
                        <label for="textarea-68c9" class="u-label u-text-grey-30 u-label-2">Opis zadania </label>
                        <textarea rows="4" cols="50" id="textarea-68c9" name="textarea"
                                  class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-2"
                                  required=""></textarea>
                    </div>
                    <div class="u-form-group u-form-select u-form-group-3">
                        <label for="select-fe80" class="u-label u-text-grey-30 u-label-3">Pracownik</label>
                        <div class="u-form-select-wrapper">
                            <select id="select-fe80" name="select"
                                    class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-3">
                                <option value="Przypisany pracownik 1">Przypisany pracownik 1</option>
                                <option value="Przypisany pracownik 2">Przypisany pracownik 2</option>
                                <option value="Przypisany pracownik 3">Przypisany pracownik 3</option>
                            </select>
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret">
                                <path fill="currentColor" d="M4 8L0 4h8z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="u-align-center u-form-group u-form-submit u-form-group-4">
                        <a href="#"
                           class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Potwierd??<br>
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
<style> .u-section-7 {
    min-height: 826px;
}

.u-section-7 .u-dialog-1 {
    width: 566px;
    min-height: 658px;
    margin: 60px auto;
}

.u-section-7 .u-container-layout-1 {
    padding: 40px 30px;
}

.u-section-7 .u-text-1 {
    font-size: 2.5rem;
    letter-spacing: 2px;
    text-transform: none;
    margin: 0 auto 0 0;
}

.u-section-7 .u-form-1 {
    height: 104px;
    margin: 22px 53px 0;
}

.u-section-7 .u-form-group-1 {
    width: 100%;
}

.u-section-7 .u-label-1 {
    font-size: 1rem;
}

.u-section-7 .u-input-1 {
    text-transform: uppercase;
    letter-spacing: 5px;
    margin: 0 auto;
}

.u-section-7 .u-form-group-2 {
    width: 100%;
}

.u-section-7 .u-label-2 {
    font-size: 1rem;
}

.u-section-7 .u-input-2 {
    text-transform: uppercase;
    letter-spacing: 5px;
    margin: 0 auto;
}

.u-section-7 .u-form-group-3 {
    width: 100%;
}

.u-section-7 .u-label-3 {
    font-size: 1rem;
}

.u-section-7 .u-input-3 {
    text-transform: uppercase;
    letter-spacing: 5px;
    margin: 0 auto;
}

.u-section-7 .u-form-group-4 {
    width: 100%;
}

.u-section-7 .u-btn-1 {
    border-style: solid;
    width: 100%;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0px;
}

.u-section-7 .u-icon-1 {
    width: 15px;
    height: 15px;
    left: auto;
    top: 17px;
    position: absolute;
    right: 16px;
}

@media (max-width: 1199px) {
    .u-section-7 .u-text-1 {
        margin-top: -130px;
    }

    .u-section-7 .u-form-1 {
        width: 400px;
        margin-top: 86px;
    }
}

@media (max-width: 991px) {
    .u-section-7 .u-dialog-1 {
        min-height: 646px;
    }

    .u-section-7 .u-container-layout-1 {
        padding-bottom: 30px;
    }
}

@media (max-width: 767px) {
    .u-section-7 .u-dialog-1 {
        width: 540px;
        min-height: 637px;
    }

    .u-section-7 .u-container-layout-1 {
        padding-top: 30px;
        padding-left: 40px;
        padding-right: 40px;
    }
}

@media (max-width: 575px) {
    .u-section-7 .u-dialog-1 {
        width: 340px;
        height: auto;
        min-height: 640px;
    }

    .u-section-7 .u-container-layout-1 {
        padding-top: 40px;
        padding-left: 25px;
        padding-right: 25px;
    }

    .u-section-7 .u-text-1 {
        font-size: 2.125rem;
        margin-top: 0;
    }

    .u-section-7 .u-form-1 {
        height: 152px;
        margin-right: initial;
        margin-left: initial;
        width: auto;
    }
}</style>
</body>
</html>