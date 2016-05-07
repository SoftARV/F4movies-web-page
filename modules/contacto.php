<?php 

$cmail = $_POST["cmail"];
$cname   = $_POST["cname"];
$casunto = $_POST["casunto"];
$cdesc   = $_POST["cdesc"];

$file = fopen("contacto.txt", "a");
$old = file_get_contents("contacto.txt");
fwrite($file, $cmail."\n".$cname."\n".$casunto."\n".$cdesc."\n\n\n".$old);
fclose($file);
die(header("location: ../contacto.php?conFailed=false"));

 ?>