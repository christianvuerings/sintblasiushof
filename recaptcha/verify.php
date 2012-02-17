<?php
require_once('recaptchalib.php');
$privatekey = "6Lfyw80SAAAAAGCad2ECaBqwktFkA0mulF2I6jD4";
$resp = recaptcha_check_answer ($privatekey,
                              $_SERVER["REMOTE_ADDR"],
                              $_POST["recaptcha_challenge_field"],
                              $_POST["recaptcha_response_field"]);
?>