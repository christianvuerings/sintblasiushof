<?php
    $body = "<html>\n";
    $body .= "<body style=\"font-family:Verdana, Verdana, Geneva, sans-serif; font-size:12px; color:#666666;\">\n";
    $body = $message;
    $body .= "</body>\n";
    $body .= "</html>\n";

    $headers  = "From: My site<noreply@sintblasiushof.be>\r\n";
    $headers .= "Reply-To: vueringschristian@gmail.com\r\n";
    $headers .= "Return-Path: vueringschristian@gmail.com\r\n";
    $headers .= "X-Mailer: Drupal\n";
    $headers .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    return mail($recipient, $subject, $message, $headers);
?>