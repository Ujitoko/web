<?php
$filePath = '/';
$data = 'testMessage';
$fp = fopen($filePath, 'w');
fwrite($fp, $data);
fclose($fp);
?>