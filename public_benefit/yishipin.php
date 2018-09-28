<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hoe公益</title>
 
<!-- 引入reset.css 文件 -->
<link rel="stylesheet" href="./css/reset.css">
<!-- 引入index.css 文件 -->
<link rel="stylesheet" href="./css/yishipin.css">
<!-- 引入swiper轮播框架 -->
<script src="./js/swiper.js"></script>
</head>

<body>
<div class="hoe_container">
     
      <!-- 头部 -->
    <div class="hoe_header">
           
                  
             <?php
               session_start();
               if(isset($_SESSION['username'])){
                    
                     //个人中心 
                
                  echo  '<div class="hoe_header_exit"> <span>您好， '; 
                     echo  $_SESSION['username']; 
                     echo '  </span>   
                        
                           <a href="./exit.php?exit=1">退出</a>
                     </div> ';

               }else{


                   //登录 

                  echo '<div class="hoe_header_login">  

                 <span>您好，欢迎参与hoe公益</span>
                  <div class="login">
                      <a  href="./login.php">用户登录</a>
                  </div>              
            </div> ';

               }

             ?>               
    </div>
  
    <!-- nav -->
    <div class="hoe_nav">
             <div class="hoe_nav_logo">
              <a href="#"><img src="./img/logo.png" alt="" /></a>
           </div>
          <ul>
            <li>
              <a   href="./index.php">首页</a>
            </li>
            

            
            <li>
              <a href="./lejuan.php">乐捐</a>
            </li>
            
            
            <li>
              <a class="now" href="./yishipin.php">益视频</a>
              
            </li>
          </ul>
    </div>
	 <!-- 视频 -->
	  <div class="lbbox">
	  	  <video width="1000" height="500" controls="controls" autoplay="autoplay">
  
            <source src="./video/video.mp4" type="video/mp4">
           
            <source src="./video/video.ogg" type="video/ogg" />
  
           <source src="./video/video.webm" type="video/webm" />
  <object data="./video/video.mp4" width="1000" height="500">
    <embed width="1000" height="500" src="./video/video.swf" />
  </object>
        </video>
  	  </div>
			  
	 
</div>







<!-- 底部 -->
	 <?php 
      
      include "include/footer.php";

	 ?> 

</body>
</html>