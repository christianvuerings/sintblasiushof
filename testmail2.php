$to = "vueringschristian@gmail.com";
$subject = "ZDNet Developer article";
$msg = "I completely understand SMTP servers now!";
$headers = "From: info@sintblasiushof.be\nReply-To: info@sintblasiushof.be";
mail("$to", "$subject", "$msg", "$headers");
echo "finished!";
