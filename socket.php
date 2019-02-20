<?php
$portId = $_GET["portId"];
$cmd = "php server.php $portId\n";
$result = exec($cmd);
echo $result;

?>