<?php

session_start();

$str = session_id()."\t".'calc2018ep'."\t".date('Y-m-d H:i:s')."\t".$_GET['action']."\n";
$file = fopen('click.txt', 'a');
fwrite($file, $str);
fclose($file);
