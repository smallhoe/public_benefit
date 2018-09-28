<?php
//mysqli_connect建立数据库连接
	  $link=mysqli_connect('localhost','root','','public_benefit')or die(      '数据库连接失败：'.mysqli_connect_error());
	  //通道编译
	  mysqli_query($link,'set names utf8');
?>