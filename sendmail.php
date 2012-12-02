<?php
	$language = "nl";
	$to = "veerle.borrey@telenet.be";
	require_once('recaptcha/verify.php');
 
	$successfully = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="nl" xml:lang="nl" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="description" content="Een B&#38;B voor iedereen die van de prachtige zwalmstreek houdt" />
	
	<link type="text/css" rel="stylesheet" href="css/main.css" media="screen" />
	<!--[if IE 7]>
		<link type="text/css" rel="stylesheet" href="css/ie7.css" media="screen" />
	<![endif]-->
	<!--[if IE 6]>
		<link type="text/css" rel="stylesheet" href="css/ie6.css" media="screen" />
	<![endif]-->
	<link rel="shortcut icon" href="http://www.sintblasiushof.be/favicon.ico" />
	
	<title>Sint-Blasius Hof // Contact // Verzonden</title>
</head>
<body>
	<div id="container">
		 <div id="header">
			<h1>Sint-Blasius Hof B&amp;B</h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.htm">Home</a></li>
				<li><a href="kamers.htm">Kamers</a></li>
				<li><a href="links.htm">Links</a></li>
				<li class="active">Contact</li>
			</ul>
			<ul id="language">
				<li class="active" title="Nederlands">NL</li>
				<li title="English"><a href="en/index.htm">EN</a></li>
				<li title="Fran&ccedil;ais"><a href="fr/index.htm">FR</a></li>
			</ul>
		</div>
		<div id="content">
			<h2>Contact</h2>
			<div class="left">
				<p><span class="good">Uw e-mail werd succesvol verzonden!</span><br />
				Wij zullen zo vlug mogelijk contact met u opnemen.</p>
			</div>
		</div>
		<div id="footer">
			<p class="left">Boekelbaan 114-c &bull; 9630 Zwalm</p>
			<p>Tel. +32474/39 38 51</p>
		</div>
	</div>
</body>
</html>';

if (isset($_POST['submit'])) {
	if (!isset($_POST['naam'])|| $_POST['naam'] == "") {
		$error = "\n\t\t\t\t"."<li>Naam is niet ingevuld</li>";
	} if (!isset($_POST['telefoon']) || $_POST['telefoon'] == "") {
		$error .= "\n\t\t\t\t"."<li>Telefoon is niet ingevuld</li>";
	} if (!isset($_POST['email'])|| $_POST['email'] == "") {
		$error .= "\n\t\t\t\t"."<li>E-mail is niet ingevuld</li>";
	} if (!isset($_POST['bericht'])|| $_POST['bericht'] == "") {
		$error .= "\n\t\t\t\t"."<li>Bericht is niet ingevuld</li>";
	} if (!$resp->is_valid) {
	    $error .= "\n\t\t\t\t"."<li>Captcha is niet geldig</li>";
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
<html lang="nl" xml:lang="nl" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="description" content="Een B&#38;B voor iedereen die van de prachtige zwalmstreek houdt" />
	
	<link type="text/css" rel="stylesheet" href="css/main.css" media="screen" />
	<!--[if IE 7]>
		<link type="text/css" rel="stylesheet" href="css/ie7.css" media="screen" />
	<![endif]-->
	<!--[if IE 6]>
		<link type="text/css" rel="stylesheet" href="css/ie6.css" media="screen" />
	<![endif]-->
	<link rel="shortcut icon" href="http://www.sintblasiushof.be/favicon.ico" />
	
	<title>Sint-Blasius Hof // Contact // Niet Verzonden</title>
</head>
<body>
	<div id="container">
		 <div id="header">
			<h1>Sint-Blasius Hof B&amp;B</h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.htm">Home</a></li>
				<li><a href="kamers.htm">Kamers</a></li>
				<li><a href="links.htm">Links</a></li>
				<li class="active">Contact</li>
			</ul>
			<ul id="language">
				<li class="active" title="Nederlands">NL</li>
				<li title="English"><a href="en/index.htm">EN</a></li>
				<li title="Fran&ccedil;ais"><a href="fr/index.htm">FR</a></li>
			</ul>
		</div>
		<div id="content">
			<h2>Contact</h2>
			<div class="left">
				<p><span class="warning">Uw e-mail werd niet verzonden!</span><br />
				De volgende problemen zijn opgetreden:</p>
				<ul class="list">'.$error.'
				</ul>
			<p>Gelieve <a href="javascript:history.go(-1);">terug te keren</a> en alle velden correct in te vullen.</p>
			</div>
		</div>
		<div id="footer">
			<p class="left">Boekelbaan 114-c &bull; 9630 Zwalm</p>
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