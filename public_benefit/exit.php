<?php 
if($_GET['exit']==1){
  session_start();
  $_SESSION=array();
  session_destroy();
}
header("Location:index.php");
?>