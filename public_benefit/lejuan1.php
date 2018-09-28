<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hoe公益</title>
 
<!-- 引入reset.css 文件 -->
<link rel="stylesheet" href="./css/reset.css">
<!-- 引入index.css 文件 -->
<link rel="stylesheet" href="./css/lejuan1.css">
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
			  			<a  href="">首页</a>
			  		</li>
			  		

			  		
			  		<li>
			  			<a class="now"  href="./lejuan.php">乐捐</a>
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
        		    <a href=""><img src="<?php echo $row['img'] ?>" alt="" /></a>
        			<p><a href=""><?php echo $row['title']; ?></a></p>
        			<p><?php 

                       

                       if(strlen($row['text'])>=25){
                       	echo mb_substr($row['text'], 0,25,'utf-8');
                       }else{
                       	echo $row['text'];
                       }
        			

        			?></p>
        			<p>捐款总额：<?php echo $row['num'] ?></p>
        			<p>捐款人数：<?php echo $row['rc'] ?></p>
        			<a href="javascript:a()"  class="lj" >我要乐捐</a>
           		</li>
        		 <script>
                      
                      function a(){
                      	
                      }

        	         </script>

		  <?php
		  }
	  mysqli_close($link);
          ?>

        	</ul>
        	        
        </div>
        

	 </div>

</div>


<!-- 弹出层 -->
<?php
    $id=$_GET['id'];
  include "include/connect.php";
  $query="select * from lejuan where id =$id ";
  $result=mysqli_query($link,$query);
  while($row=mysqli_fetch_array($result)){ 

 ?>

   <div class="g_tcc">
				
				<div class="heder">
					
					<span>单笔捐款项目——<?php echo $row['title'] ?></span>
                     				</div>	
				<form action="update.php?id=<?php echo $row['id']?>" method="post"><!--要加上一个属性en……  -->
					<div class="jk">
						<span>用户名：<?php 
                            
               if(isset($_SESSION['username'])){
                     echo  $_SESSION['username']; 
						}

						?>  
						</span>
					</div>
					<div class="jk">
						<span>捐款金额：</span>
						
						<input  name="je" type="text">
						<span>元</span>
					</div>

					
					<input class="submit"  value="确认捐款" type="submit">
				</form>
				
				<a href="./lejuan.php"><div class="gb">×</div></a>
	</div>
   
  <?php }
   mysqli_close($link);
  ?>
    <div class="beijing"></div>
<script src="js/jQuery-1.12.4.js"></script>

	<script>

  $(function(){
	// 弹出层
	var box_w=$(".g_tcc").width();//获取box的宽度;
	var box_h=$(".g_tcc").height();//获取box的高度;
	var win_w=$(window).width();//获取浏览器宽度;
	var win_h=$(window).height();//获取浏览器的高度;
	var box_l=(win_w-box_w)/2;
	var box_t=(win_h-box_h)/2;
	$(".beijing").height(win_h);//height()括号内有内容就是设置高度，没内容就是获取高度;
	$(".g_tcc").css({ left:box_l,top:box_t})
	//alert(box_l)
	//$(".btn").click(alert("dklfjdklfj"));//click()里面不加函数的话会自动执行;
	$(window).resize(function(){//resize()当页面窗口改变的时候执行;
	    win_w=$(window).width();
	    win_h=$(window).height();
		box_l=(win_w-box_w)/2;
		box_t=(win_h-box_h)/2;
		$(".beijing").height(win_h);
		$(".g_tcc").css({ left:box_l,top:box_t})
	})
	$(".lj").click(function(){
		//alert(79878);	
		$(".g_tcc").css({display:"block"});
		$(".beijing").css({display:"block"});
	});
	$(".gb").click(function(){
		$(".g_tcc").css({display:"none"});
		$(".beijing").css({display:"none"});	
	})
	
});
	</script>


<!-- 底部 -->
	<?php 
      
      include "include/footer.php";

	 ?> 
 

</body>
</html>