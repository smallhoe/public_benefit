<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hoe公益</title>
 
<!-- 引入reset.css 文件 -->
<link rel="stylesheet" href="./css/reset.css">
<!-- 引入index.css 文件 -->
<link rel="stylesheet" href="./css/lejuan.css">
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
			  			<a  href="./index.php">首页</a>
			  		</li>
			  		

			  		
			  		<li>
			  			<a class="now" href="./lejuan.php">乐捐</a>
			  		</li>
			  		
			  		
			  		<li>
			  			<a href="./yishipin.php">益视频</a>
			  			
			  		</li>
			  	</ul>
	  </div>
	 <!-- 轮播图 -->
	  <div class="lbbox">
	  	   <div class="swiper-wrapper">
					      <div class="swiper-slide">
					      <a href=""><img src="./img/lejuan/lbt1.jpg" alt="" /></a>
					       
					      </div>
					      <div class="swiper-slide"><a href=""><img src="./img/lejuan/lbt2.jpg" alt="" /></a>
					      

                             
					      </div>
					      <div class="swiper-slide"><a href=""><img src="./img/lejuan/lbt3.jpg" alt="" /></a></div>
					      
				    </div> 
				  <div class="swiper-pagination"></div>
				    <div class="swiper-button-next"> </div>
				    <div class="swiper-button-prev"> </div>
	        <script>
	                 var swiper1 = new Swiper('.lbbox', {
				      slidesPerView: 1,
				      spaceBetween: 30,
				      loop: true,
				      pagination: {
				        el: '.swiper-pagination',
				        clickable: true,
				      },
				      navigation: {
				        nextEl: '.swiper-button-next',
				        prevEl: '.swiper-button-prev',
				      },


					      centeredSlides: true,
					      autoplay: {
					        delay: 2500,
					        disableOnInteraction: false,
					      },
	      
	                     });
	                  swiper1.el.onmouseover = function(){
							  swiper1.autoplay.stop();
								}
	                         swiper1.el.onmouseout=function(){
	                         swiper1.autoplay.start();
	                         }
            </script>
  	  </div>
			  
	 <div class="hoe_main">
	 	<div class="hoe_main_title">
	 		<h3>乐捐项目</h3>
	 		<a href="">更多</a>
	 	</div>
        
        <div class="box">
        	<ul>
               <?php
	  //导入数据库连接文件
       include "include/connect.php";
	  //执行查询
	  $query="select * from lejuan ";
	  $result=mysqli_query($link,$query);
	  while($row=mysqli_fetch_array($result)){
	  ?>

        		<li>
        		    <a href="lejuan1.php?id=<?php echo $row['id']; ?>"><img src="<?php echo $row['img'] ?>" alt="" /></a>
        			<p><a href="lejuan1.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></p>
        			<p><?php 

                       

                       if(strlen($row['text'])>=25){
                       	echo mb_substr($row['text'], 0,25,'utf-8');
                       }else{
                       	echo $row['text'];
                       }
        			

        			?></p>
        			<p>捐款总额：<?php echo $row['num'] ?></p>
        			<p>捐款人数：<?php echo $row['rc'] ?></p>
        			<a href="lejuan1.php?id=<?php echo $row['id']; ?>"  class="lj" >我要乐捐</a>
           		</li>
        		

		  <?php
		  }
	  mysqli_close($link);
          ?>

        	</ul>

        </div>
        

	 </div>

</div>



<!-- 底部 -->
	<?php 
      
      include "include/footer.php";

	 ?> 

</body>
</html>