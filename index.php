<?php
# rm cache
system('rm -r /home/httpd/vhosts/proxy.megafon.ru/httpdocs/tmp/*');
$local = "http://" . $_SERVER["HTTP_HOST"];
header("Location: $local");