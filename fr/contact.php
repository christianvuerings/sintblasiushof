<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="description" content="Une chambre d'h&ocirc;tes pour chacun qui adore la r&eacute;gion de la Zwalm. N'h&eacute;sitez pas &agrave; nous contacter." />
	<meta name="keywords" content="Sint-Blasius Hof, Zwalm, B&amp;B, lit et petit d&eacute;jeuner, la nuit, petit d&eacute;jeuner, la nature, Zwalm, la Belgique, de paix, de calme, cycle, v&eacute;lo, d&eacute;tente, luxe, wellness, 	
informations de contact, contact" />

	<link type="text/css" rel="stylesheet" href="../css/main.css" media="screen" />

	<link rel="shortcut icon" href="http://www.sintblasiushof.be/favicon.ico" />

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
			<p>N'h&eacute;sitez pas &agrave; nous contacter.<br />
			Nous vous r&eacute;pondrons le plus vite possible.</p>
			<form method="post" action="sendmail.php">
				<div> 
					<label for="naam">Nom:</label>
					<input type="text" name="naam" id="naam" size="42" /><br />

					<label for="telefoon">T&eacute;l&eacute;phone:</label>
					<input type="text" name="telefoon" id="telefoon" size="42" /><br />

					<label for="email">E-mail:</label>
					<input type="text" name="email" id="email" size="42" /><br />

					<label for="bericht">Message:</label><br />
					<textarea name="bericht" id="bericht" cols="43" rows="5"></textarea><br />

                    <label>Captcha:</label><br />
                    <div id="recaptcha">
                        <?php require_once('../recaptcha/recaptcha.php'); ?>
                    </div>

					<input type="submit" name="submit" value="Envoyer" />
					<input type="reset" value="Effacer" />
				</div>
			</form>
			<br class="clearfloat" /><br />
			<h3 id="paiement">Informations bancaires</h3>
			<p>Compte: 001-5436121-26<br />IBAN: BE 59001543612126<br />BIC: GEBABEBB</p>
		</div>
		<div id="footer">
			<p class="left">Boekelbaan 114-c &bull; 9630 Zwalm &bull; Belgique</p>
			<p>Tel. +32474/39 38 51</p>
		</div>
	</div>
</body>
</html>