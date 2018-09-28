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
			  			<a  class="now" href="">首页</a>
			  		</li>
			  		

			  		
			  		<li>
			  			<a href="./lejuan.php">乐捐</a>
			  		</li>
			  		
			  		
			  		<li>
			  			<a href="./yishipin.php">益视频</a>
			  			
			  		</li>
			  	</ul>
	  </div>