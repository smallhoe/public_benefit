<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
</body>
</html>


<?php 
  
  $id=$_GET['id'];
  $je=$_POST['je'];

  include "./include/connect.php";
  $query="select * from lejuan where id =$id ";
  $result=mysqli_query($link,$query);
  while($row=mysqli_fetch_array($result)){ 
         $num=$row['num']+$je; 
         $rc=$row['rc']++;
  }
        $rc++;
  $addsql="update  lejuan set num='$num',rc='$rc' where id =$id  ";
     $addresult=mysqli_query($link,$addsql);
		  if(mysqli_affected_rows($link)>0){
			 	echo '<script>alert("捐赠成功");</script>';	
		    echo '<script>location.href="lejuan.php";</script>';	
		    }else{
			echo '<script>alert("捐赠失败");</script>';	
		    echo '<script>location.href="lejuan.php";</script>';		
		     }
?>