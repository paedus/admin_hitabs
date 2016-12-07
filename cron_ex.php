<?php
echo 'test<br>';
echo dirname(__FILE__).'<br>';
$fp = fopen(dirname(__FILE__).'/data.txt', 'a');
fwrite($fp, 'avelacvac e, ');
fclose($fp);
?>