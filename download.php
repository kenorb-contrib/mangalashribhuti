<?php
$file_name = $_GET['file'];
$file_url = $file_name;
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"".$_GET['title']."\""); 
readfile($file_url);