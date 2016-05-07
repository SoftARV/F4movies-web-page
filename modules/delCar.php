<?php
session_start();

$str=$_GET["str"];

unset($_SESSION["id[".$str."]"]);
unset($_SESSION['link['.$str.']']);
unset($_SESSION['nombre['.$str.']']);
unset($_SESSION['precio['.$str.']']);



 ?>