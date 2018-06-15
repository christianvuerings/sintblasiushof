<?php
    $language = "fr";
    $to = "info@sintblasiushof.be";
    require_once('../recaptcha/verify.php');

    $successfully = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="description" content="Une chambre d&prime;h&ocirc;tes pour chacun qui adore la r&eacute;gion de la Zwalm." />

    <link type="text/css" rel="stylesheet" href="../css/main.css" media="screen" />

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" />

    <title>Sint-Blasius Hof // Contact // Envoy&eacute;</title>
</head>
<body>
    <div id="container">
         <div id="header">
            <h1>Sint-Blasius Hof B&amp;B</h1>
        </div>
        <div id="menu">
            <ul>
                <li><a href="index.htm">Home</a></li>
                <li><a href="chambres.htm">Chambres</a></li>
                <li><a href="liens.htm">Liens</a></li>
                <li class="active">Contact</li>
            </ul>
            <ul id="language">
                <li title="N&eacute;erlandais"><a href="../index.htm">NL</a></li>
                <li title="Anglais"><a href="../en/index.htm">EN</a></li>
                <li class="active" title="Fran&ccedil;ais">FR</li>
            </ul>
        </div>
        <div id="content">
            <h2>Contact</h2>
            <div class="left">
                <p><span class="good">Votre mail est bien envoy&eacute;!</span><br />
                 nous vous contacterons le plus vite possible.</p>
            </div>
        </div>
        <div id="footer">
            <p class="left">Boekelbaan 114-c &bull; 9630 Zwalm &bull; Belgique</p>
            <p>Tel. +32474/39 38 51</p>
        </div>
    </div>
</body>
</html>';

if (isset($_POST['submit'])) {
    if (!isset($_POST['naam'])|| $_POST['naam'] == "") {
        $error = "\n\t\t\t\t"."<li>Remplisez votre nom svp</li>";
    } if (!isset($_POST['telefoon']) || $_POST['telefoon'] == "") {
        $error .= "\n\t\t\t\t"."<li>Remplisez votre num&eacute;ro de t&eacute;l&eacute;phone svp</li>";
    } if (!isset($_POST['email'])|| $_POST['email'] == "") {
        $error .= "\n\t\t\t\t"."<li>Remplisez votre adresse mail svp</li>";
    } if (!isset($_POST['bericht'])|| $_POST['bericht'] == "") {
        $error .= "\n\t\t\t\t"."<li>Remplisez la cage messagerie svp</li>";
    } if (!$captcha_success) {
        $error .= "\n\t\t\t\t"."<li>Captcha n'est pas valide</li>";
    }

    if (!isset($error)) {
        $subject = "Sint-Blasius Hof: ".$_POST['naam']." // ".$language;

        $message = "Naam: ".$_POST['naam']."\n";
        $message .= "Telefoon: ".$_POST['telefoon']."\n";
        $message .= "E-mail: ".$_POST['email']."\n";
        $message .= "Bericht: ".$_POST['bericht'];

        $headers = "From: ".$_POST['email']."\nReply-To: ".$_POST['email'];

        mail("$to", "$subject", "$message", "$headers");

        echo $successfully;

    } else {

        $notsuccessfully = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="description" content="Une chambre d&prime;h&ocirc;tes pour chacun qui adore la r&eacute;gion de la Zwalm." />

    <link type="text/css" rel="stylesheet" href="../css/main.css" media="screen" />

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" />

    <title>Sint-Blasius Hof // Contact // Pas envoy&eacute;</title>
</head>
<body>
    <div id="container">
         <div id="header">
            <h1>Sint-Blasius Hof B&amp;B</h1>
        </div>
        <div id="menu">
            <ul>
                <li><a href="index.htm">Home</a></li>
                <li><a href="chambres.htm">Chambres</a></li>
                <li><a href="liens.htm">Liens</a></li>
                <li class="active">Contact</li>
            </ul>
            <ul id="language">
                <li title="N&eacute;erlandais"><a href="../index.htm">NL</a></li>
                <li title="Anglais"><a href="../en/index.htm">EN</a></li>
                <li class="active" title="Fran&ccedil;ais">FR</li>
            </ul>
        </div>
        <div id="content">
            <h2>Contact</h2>
            <div class="left">
                <p><span class="warning">Votre mail n&prime;etait pas envoy&eacute;</span>,<br />
                car certaines cages &eacute;taient mal remplies:</p>
                <ul class="list">'.$error.'
                </ul>
            <p><a href="javascript:history.go(-1);">Retournez</a> et remplisez les cages correctement.</p>
            </div>
        </div>
        <div id="footer">
            <p class="left">Boekelbaan 114-c &bull; 9630 Zwalm &bull; Belgique</p>
            <p>Tel. +32474/39 38 51</p>
        </div>
    </div>
</body>
</html>';

        echo $notsuccessfully;

    }

} else {

    $host  = $_SERVER['HTTP_HOST'];
    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $extra = 'contact.php';
    header("Location: http://$host$uri/$extra");

    echo "<html><head>";
    echo "<meta http-equiv=\"refresh\" Content=\"2; url=http://$host$uri/$extra\">";
    echo "</head><body></body></html>";

    exit;
}
?>
