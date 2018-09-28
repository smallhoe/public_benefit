<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>hoe公益</title>
 
<!-- 引入reset.css 文件 -->
<link rel="stylesheet" href="./css/reset.css">
<!-- 引入index.css 文件 -->
<link rel="stylesheet" href="./css/index.css">
<!-- 引入swiper轮播框架 -->
<script src="./js/swiper.js"></script>

</head>

<body>
<div class="hoe_container">
        <!-- 头部 -->
      	<?php 
          include "include/header.php";
      	?> 
	  <!-- 轮播图 -->
		  <div class="hoe_lbt">
		  	   
		  	   <div class="hoe_lbt_box">
		  	        <div class="box">
		  	          <div class="swiper-wrapper">
					      <div class="swiper-slide">
					          		<a href=""><img src="./img/lbt/lbt1.jpg" alt="" /></a>
								        <div class="imgtitle">
								        <span >项目</span>
								      	<a href="">种子的力量|给他们一个走出大山，看看世界的机会</a>
								        </div>
					      </div>
					      <div class="swiper-slide">
					          		<a href=""><img src="./img/lbt/lbt2.jpg" alt="" /></a>
								        <div class="imgtitle">
								        <span >项目</span>
								      	<a href="">种子的力量|给他们一个走出大山，看看世界的机会</a>
								        </div>
					      </div>
					      <div class="swiper-slide">
					          		<a href=""><img src="./img/lbt/lbt3.jpg" alt="" /></a>
								        <div class="imgtitle">
								        <span >项目</span>
								      	<a href="">种子的力量|给他们一个走出大山，看看世界的机会</a>
								        </div>
					      </div>
					      <div class="swiper-slide">
					          		<a href=""><img src="./img/lbt/lbt4.jpg" alt="" /></a>
								        <div class="imgtitle">
								        <span >项目</span>
								      	<a href="">种子的力量|给他们一个走出大山，看看世界的机会</a>
								        </div>
					      </div>
					      <div class="swiper-slide">
					          		<a href=""><img src="./img/lbt/lbt5.jpg" alt="" /></a>
								        <div class="imgtitle">
								        <span >项目</span>
								      	<a href="">种子的力量|给他们一个走出大山，看看世界的机会</a>
								        </div>
					      </div>
					      <div class="swiper-slide">
					          		<a href=""><img src="./img/lbt/lbt6.jpg" alt="" /></a>
								        <div class="imgtitle">
								        <span >项目</span>
								      	<a href="">种子的力量|给他们一个走出大山，看看世界的机会</a>
								        </div>
					      </div>
					      <div class="swiper-slide">
					          		<a href=""><img src="./img/lbt/lbt7.jpg" alt="" /></a>
								        <div class="imgtitle">
								        <span >项目</span>
								      	<a href="">种子的力量|给他们一个走出大山，看看世界的机会</a>
								        </div>
					      </div>
					      
					      
					     
					     
				    </div> 
				  <div class="swiper-pagination"></div>
				    </div>
		  	   </div>
		  	   <script>
                 var swiper1 = new Swiper('.box', {
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
		  	   <!-- 善款 -->


               <div class="donation">
                  <!-- 总额 -->
                  <div class="amount">
                  	   <p>历史善款总额：</p>
                  	   <span><?php
	  //导入数据库连接文件
       include "include/connect.php";
	  //执行查询
	  $query="select * from lejuan ";
	  $num=0;
	  $result=mysqli_query($link,$query);
	  while($row=mysqli_fetch_array($result)){
              
             $num+=(int)$row['num'];
	  }
           
             $strnum = mb_strlen($num,'UTF8');
		      while ($strnum){
		    $array[] = mb_substr($num, null ,3,'utf8');
		    $num = mb_substr($num,3,$strnum,'utf8');
		    $strnum = mb_strlen($num,'UTF8');
		 	 }
			$output=implode(',',$array);
			  echo $output;
	  ?>
               

	             </span>元
                  </div>
	              	<!-- 人次 -->
	              	<div class="person">
	              		<p>历史爱心总人次：</p>
                  	   <span><?php
	  //导入数据库连接文件
       include "include/connect.php";
	  //执行查询
	  $query="select * from lejuan ";
	  $result=mysqli_query($link,$query);
	  $rc=0;
	  while($row=mysqli_fetch_array($result)){
          $rc+=(int)$row['rc'];
           
	 

	  }
             echo $rc;
	  ?></span>人次
	              	</div>
               </div>
		  </div>   
       <!-- 内容部分 -->
	  <div class="hoe_content">
		  	<!-- main -->
	        <div class="hoe_main">
	        	
			    <!--  热点-->
			    <div class="hoe_main_hot">
			    	<span>热点:</span>
			    	
			    	<a href="./lejuan.php">乐捐 </a>
			    	<a href="./yishipin.php">益视频</a> 
			    	
			    </div>
	             
	             <div class="hoe_main_List">
                     
                     <?php 
  
	include "include/connect.php";
	//变量部分
  $pagesize=3;
  $query="select * from hoe_clist ";
  $result=mysqli_query($link,$query);
  $total=mysqli_num_rows($result);
  if($total%$pagesize==0){
     $numofpage=(int)($total/$pagesize);	  
 }else{
	 $numofpage=(int)($total/$pagesize+1); 	 
 }
   if(isset($_GET['page'])){
  $currentpage=$_GET['page'];
  $start=($currentpage-1)*$pagesize;
   }else{
  $currentpage=1;
  $start=0;
   }
  //数据显示
  $query="select * from  hoe_clist  limit $start,$pagesize";
	$result=mysqli_query($link,$query);
	while($row=mysqli_fetch_array($result)){
   ?>

	             	 <div class="clist">

		         	 	  <div class="clist_title">
		             	 	  	<a href=""><?php echo $row['title'] ?></a>
		             	  </div>

	             	 	  <div class="clist_content">
	             	 	        <div class="pic">
	             	 	        	<a href=""><img src="<?php echo $row['img']  ?>" alt="" /></a>
	             	 	        </div>
		             	 	  	
		             	 	  	<div  class="text">
		             	 	  		<p><?php echo $row['text'] ?></p>
		             	 	  		<p><?php echo $row['time'] ?></p>
		             	 	  	</div>
	         	 	      </div>
	             	 </div>
	 <?php
		}
			  mysqli_close($link);
	?>
                	 
	

	             	 <div class="page">

                     <?php 
                          
                          if ($currentpage==1) {
                          	echo '<a  class="now" href="./index.php?page=1">1</a>';
                          	echo '<a  href="./index.php?page=2">2</a>';
                          	echo '<a  href="./index.php?page=3">3</a>';
                          	echo "<a href='./index.php?page=".($currentpage+1)."'>下一页</a>"; 
                          }
                           if ($currentpage==2) {
                           	echo "<a href='./index.php?page=".($currentpage-1)."'>上一页</a>";
                          	echo '<a  href="./index.php?page=1">1</a>';
                          	echo '<a class="now"  href="./index.php?page=2">2</a>';
                          	echo '<a  href="./index.php?page=3">3</a>';
                          	echo "<a href='./index.php?page=".($currentpage+1)."'>下一页</a>"; 
                          }
						 
							  if($currentpage==3){
							  		echo "<a href='./index.php?page=".($currentpage-1)."'>上一页</a>";
                          	echo '<a  href="./index.php?page=1">1</a>';
                          	echo '<a href="./index.php?page=2">2</a>';
                          	echo '<a   class="now" href="./index.php?page=3">3</a>';
							  }
						  
							   
    				 ?>

		             	    
		             	 
		             	 	
		             	 	
		             	 	
	             	 </div>
	             </div>
	        </div>
	        <!-- extra额外的（侧边） -->
	        <div class="hoe_extra">
	        	<!-- 乐捐 -->
	        	<div class="lejuan">
	        	    <!-- 标题 -->
	        		<div class="title">
		        		<span><a href="./lejuan.php">乐捐</a></span>
		        		<a  class="fr" href="./lejuan.php">更多</a>	        		
	        	    </div>
                    <div class="imgBox">
                    	<a href="./lejuan.php"><img src="./img/imgbox1.jpg" alt="" /></a>
                    </div>
	        	</div>
                <!-- 轮播盒子 -->
	        	<div class="lb_box">
	        	    <!-- 标题 -->
	        		<div class="title">
		        		<span><a href="./yishipin.php">益视频</a></span>
		        		<div class="arrow">
		        		  <div class="swiper-button-prev">
		        		   <a href=""><img src="./img/上一页.png" alt="" /></a>
		        		   

		        		   </div>
                          <div class="swiper-button-next">
                             <a href="">  <img src="./img/下一页.png" alt="" /></a>
                        </div>
	 	        		
		        		
		        		</div>
		        			        		
	        	    </div>
	        	    <!-- 轮播图 -->
                    <div class="lbimg">
                    	<div class="swiper-wrapper">
					      <div class="swiper-slide">
					          <a href="./yishipin.php">
					             <img src="./img/lbbox/lbbox1.jpg" alt="" />
					          </a>
					      </div>
					      <div class="swiper-slide">
					            <a href="./yishipin.php">
					                <img src="./img/lbbox/lbbox2.jpg" alt="" />
					            </a>
					      </div>
					       <div class="swiper-slide">
					          <a href="./yishipin.php">
					             <img src="./img/lbbox/lbbox3.jpg" alt="" />
					          </a>
					      </div>
					       <div class="swiper-slide">
					          <a href="./yishipin.php">
					             <img src="./img/lbbox/lbbox4.jpg" alt="" />
					          </a>
					      </div>
    					</div>
    					
                    </div>
                    <!-- swiper script -->
                      <script>
						    var swiper = new Swiper('.lbimg', {
						      slidesPerView: 1,
						      spaceBetween: 30,
						      loop: true,
						      
						      navigation: {
						        nextEl: '.swiper-button-next',
						        prevEl: '.swiper-button-prev',
						      },


						      centeredSlides: true,
						      autoplay: {
						        delay: 3000,
						        disableOnInteraction: false,
						      },
						      
						    });
                         swiper.el.onmouseover = function(){
						  swiper.autoplay.stop();
							}
                         swiper.el.onmouseout=function(){
                         swiper.autoplay.start();
                         }

  					</script>
	        	</div>
	        </div>
		  </div>	 
      
			  
	  </div>
<!-- 底部 -->
	 <?php 
      
      include "include/footer.php";

	 ?>
 

</body>
</html>