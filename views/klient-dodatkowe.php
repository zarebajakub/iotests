<?php
if (session_status() == PHP_SESSION_NONE) 
{
    session_start();
}
$doc_root = $_SESSION['ROOT'];

require_once $doc_root.'config.php';
require_once $doc_root.'common.php';
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Dodaj zadanie, Ostatnio dodane zadania">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>klient-dodatkowe</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/klient-dodatkowe.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.2.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Boss Page ",
		"logo": "images/Untitled.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="klient-dodatkowe">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-header u-header" id="sec-9336"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="500" data-image-height="500">
          <img src="images/Untitled.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-align-left u-clearfix u-section-1" id="sec-2fd2">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h3 class="u-text u-text-default u-text-1">Wprowad?? dodatkowe dane&nbsp;</h3>
        <div class="u-container-style u-group u-palette-5-light-3 u-radius-10 u-shape-round u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-form u-form-1">
              <form action=<?=$SUB_FOLDER."/common/registerAdditionalInfo.php"?> method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
                <div class="u-form-group">
                  <label for="email-56c7" class="u-label">Imi??</label>
                  <input type="text" placeholder="Wprowad?? imi??" id="email-56c7" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="required">
                </div>
                <div class="u-form-group u-form-name">
                  <label for="name-56c7" class="u-label">Nazwisko</label>
                  <input type="text" placeholder="Wprowad?? swoje nazwisko" id="name-56c7" name="surname" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                </div>
                <div class="u-form-group u-form-phone u-form-group-3">
                  <label for="phone-a766" class="u-label">Numer telefonu</label>
                  <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Wprowad?? sw??j numer telefonu (np. +14155552675)" id="phone-a766" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
                </div>
                <div class="u-align-left u-form-group u-form-submit">
                  <button>Potwierd??</button>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <div class="u-form-send-message u-form-send-success"> Dzi??kujemy! Twoja wiadomo???? zosta??a wys??ana! </div>
                <div class="u-form-send-error u-form-send-message"> Przepraszamy, wiadomo???? nie mog??a zosta?? wys??ana. Popraw b????dy i spr??buj ponownie. </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-146a"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Get organised with us.</p>
      </div></footer>
  </body>
</html>