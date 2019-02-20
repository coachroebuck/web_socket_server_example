<?php

$cmd = "ruby -e 'require \"socket\"; puts Addrinfo.tcp(\"\", 0).bind {|s| s.local_address.ip_port }'\n";
$result = exec($cmd);
echo $result;

?>