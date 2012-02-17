<?php
require_once('recaptchalib.php');
$publickey = "6Lfyw80SAAAAAJk2pssVj2wL2hBJGdd-odoTTlkN";
echo recaptcha_get_html($publickey);
?>