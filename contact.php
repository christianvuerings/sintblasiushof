<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="nl" xml:lang="nl" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="description" content="Een B&#38;B voor iedereen die van de prachtige zwalmstreek houdt. Contacteer ons via deze pagina." />
	<meta name="keywords" content="Sint-Blasius Hof, Zwalm, B&amp;B, bed en breakfast, overnachten, ontbijt, natuur, zwalm, Belgi&euml;, rust, fietsen, ontspannen, luxe, welness, contact, contactinformatie" />

	<link type="text/css" rel="stylesheet" href="css/main.css" media="screen" />
	<link rel="shortcut icon" href="favicon.ico" />

	<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		var pageTracker = _gat._getTracker("UA-190225-3");
		pageTracker._initData();
		pageTracker._trackPageview();
	</script>
	<script type="text/javascript">
    var RecaptchaOptions = {
       theme : 'clean'
    };
    </script>

	<title>Sint-Blasius Hof // Contact</title>
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
			<p>Aarzel niet om contact met ons op te nemen.<br />
			Wij zullen U zo vlug mogelijk antwoorden.</p>
			<form method="post" action="sendmail.php">
				<div>
					<label for="naam">Naam:</label>
					<input type="text" name="naam" id="naam" size="42" /><br />

					<label for="telefoon">Telefoon:</label>
					<input type="text" name="telefoon" id="telefoon" size="42" /><br />

					<label for="email">E-mail:</label>
					<input type="text" name="email" id="email" size="42" /><br />

					<label for="bericht">Bericht:</label><br />
					<textarea name="bericht" id="bericht" cols="43" rows="5"></textarea><br />

                    <label>Captcha:</label><br />
                    <div id="recaptcha">
                        <?php require_once('recaptcha/recaptcha.php'); ?>
                    </div>

					<input type="submit" name="submit" value="Verzenden" />
					<input type="reset" value="Verwijderen" />
				</div>
			</form>
			<br class="clearfloat" /><br />
			<h3 id="betaling">Betalingsinformatie</h3>
			<p>RN: 001-5436121-26<br />IBAN: BE 59001543612126<br />BIC: GEBABEBB</p>
		</div>
		<div id="footer">
			<p class="left">Boekelbaan 114-c &bull; 9630 Zwalm</p>
			<p>Tel. +32474/39 38 51</p>
		</div>
	</div>
</body>
</html>
