<?php
    if(isset($_POST['g-recaptcha-response'])){
        // Send data and get response
        $cap = $_POST['g-recaptcha-response'];
        $ch = curl_init('https://www.google.com/recaptcha/api/siteverify?secret=6Lfyw80SAAAAAGCad2ECaBqwktFkA0mulF2I6jD4&response='.$cap);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        $captcha_success = json_decode($result)->success;
    }
?>
