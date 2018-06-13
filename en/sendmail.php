<?php
	$language = "en";
	$to = "vueringschristian@gmail.com";
    require_once('../recaptcha/verify.php');
 
	$successfully = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="description" content="A B&#38;B for everyone that loves nature &amp; and a place to relax." />
	
	<link type="text/css" rel="stylesheet" href="../css/main.css" media="screen" />

	<link rel="shortcut icon" href="http://www.sintblasiushof.be/favicon.ico" />
	
	<title>Sint-Blasius Hof // Contact // Sent</title>
</head>
<body>
	<div id="container">
		 <div id="header">
			<h1>Sint-Blasius Hof B&amp;B</h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.htm">Home</a></li>
				<li><a href="rooms.htm">Rooms</a></li>
				<li><a href="links.htm">Links</a></li>
				<li class="active">Contact</li>
			</ul>
			<ul id="language">
				<li title="Nederlands"><a href="../index.htm">NL</a></li>
				<li class="active" title="English">EN</li>
				<li title="Fran&ccedil;ais"><a href="../fr/index.htm">FR</a></li>
			</ul>
		</div>
		<div id="content">
			<h2>Contact</h2>
			<div class="left">
				<p><span class="good">Your e-mail has been send successfully!</span><br />
				We will contact you as soon as possible.</p>
			</div>
		</div>
		<div id="footer">
			<p class="left">Boekelbaan 114-c &bull; 9630 Zwalm &bull; Belgium</p>
			<p>Tel. +32474/39 38 51</p>
		</div>
	</div>
</body>
</html>';

if (isset($_POST['submit'])) {
	if (!isset($_POST['naam'])|| $_POST['naam'] == "") {
		$error = "\n\t\t\t\t"."<li>Name has not been provided</li>";
	} if (!isset($_POST['telefoon']) || $_POST['telefoon'] == "") {
		$error .= "\n\t\t\t\t"."<li>Phone has not been provided</li>";
	} if (!isset($_POST['email'])|| $_POST['email'] == "") {
		$error .= "\n\t\t\t\t"."<li>E-mail has not been provided</li>";
	} if (!isset($_POST['bericht'])|| $_POST['bericht'] == "") {
		$error .= "\n\t\t\t\t"."<li>Message has not been provided</li>";
	} if (!$resp->is_valid) {
	    $error .= "\n\t\t\t\t"."<li>Captcha isn't valid'</li>";
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
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="description" content="A B&#38;B for everyone that loves nature &amp; and a place to relax." />
	
	<link type="text/css" rel="stylesheet" href="../css/main.css" media="screen" />

	<link rel="shortcut icon" href="http://www.sintblasiushof.be/favicon.ico" />
	
	<title>Sint-Blasius Hof // Contact // Not Sent</title>
</head>
<body>
	<div id="container">
		 <div id="header">
			<h1>Sint-Blasius Hof B&amp;B</h1>
		</div>
		<div id="menu">
			<ul>
				<li><a href="index.htm">Home</a></li>
				<li><a href="rooms.htm">Rooms</a></li>
				<li><a href="links.htm">Links</a></li>
				<li class="active">Contact</li>
			</ul>
			<ul id="language">
				<li title="Nederlands"><a href="../index.htm">NL</a></li>
				<li class="active" title="English">EN</li>
				<li title="Fran&ccedil;ais"><a href="../fr/index.htm">FR</a></li>
			</ul>
		</div>
		<div id="content">
			<h2>Contact</h2>
			<div class="left">
				<p><span class="warning">Your e-mail hasn&prime;t been sent!</span><br />
				The following problems occured:</p>
				<ul class="list">'.$error.'
				</ul>
			<p>Please <a href="javascript:history.go(-1);">go back</a> and fill in all fields.</p>
			</div>
		</div>
		<div id="footer">
			<p class="left">Boekelbaan 114-c &bull; 9630 Zwalm &bull; Belgium</p>
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