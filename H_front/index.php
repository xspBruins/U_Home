<?php 


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<title>U_Homer</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--menu-->
<script src="js/scripts.js"></script>
<link href="css/styles.css" rel="stylesheet">
<!--//menu-->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<meta name="keywords" content="Real Home Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<body >
<!--header-->
	<div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul>
						<li><a  href="index.php">主页</a></li>
						<li><a  href="about.php">关于我们</a></li>
						<li><a  href="blog.php">部落格</a></li>
						<li><a  href="terms.php">合同条款</a></li>
						<li><a  href="privacy.php">隐私策略</a></li>
						<li><a  href="contact.php">联系我们</a></li>
					</ul>
				</nav>			
			</div>
		</div>

<div class="header">
	<div class="container">
		<!--logo-->
			<div class="logo">
				<h1><a href="index.php">U_Homer</a></h1>
			</div>
		<!--//logo-->
		<div class="top-nav">
			<ul class="right-icons">
				<li><span ><i class="glyphicon glyphicon-phone"> </i>+18241137622</span></li>
				<li><a  href="login.php"><i class="glyphicon glyphicon-user"> </i>登录</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a></li>
				
			</ul>
			<div class="nav-icon">
				<div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> </a>
					</div>	
				<!---
				<a href="#" class="right_bt" id="activator"><i class="glyphicon glyphicon-menu-hamburger"></i>  </a>
			--->
			</div>
		<div class="clearfix"> </div>
			<!---pop-up-box---->
			   
				<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
				<div id="small-dialog" class="mfp-hide">
					    <!----- tabs-box ---->
				<div class="sap_tabs">	
				     <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span>搜索所有</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>我要寻租</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>我要出租</span></li>
							  <div class="clearfix"></div>
						  </ul>				  	 
						  <div class="resp-tabs-container">
						  		<h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>All Homes</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
								 	<div class="facts">
									  	<div class="login">
											<input type="text" value="请输入搜索条件" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入搜索条件';}">		
									 		<input type="submit" value="">
									 	</div>        
							        </div>
						  		</div>
							     <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>For Sale</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="facts">									
										<div class="login">
											<input type="text" value="请输入搜索条件" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入搜索条件';}">		
									 		<input type="submit" value="">
									 	</div> 
							        </div>	
								 </div>									
							      <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>For Rent</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									 <div class="facts">
										<div class="login">
											<input type="text" value="请输入搜索条件" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '请输入搜索条件';}">		
									 		<input type="submit" value="">
									 	</div> 
							         </div>	
							    </div>
					      </div>
					 </div>
					 <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				    	<script type="text/javascript">
						    $(document).ready(function () {
						        $('#horizontalTab').easyResponsiveTabs({
						            type: 'default', //Types: default, vertical, accordion           
						            width: 'auto', //auto or any width like 600px
						            fit: true   // 100% fit in a container
						        });
						    });
			  			 </script>	
				</div>
				</div>
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
					
	
		</div>
		<div class="clearfix"> </div>
		</div>	
</div>
<!--//焦点图部分的图片地址在style.css文件427行-->	
	<div class=" header-right">
		<div class=" banner">
			 <div class="slider">
			    <div class="callbacks_container">
			      <ul class="rslides" id="slider">		       
					 <li>
			          	 <div class="banner1">
			           		<div class="caption">
					          	<h3><span>WEL</span>us site</h3>
					          	<p>为你我打造的舒适</p>
			          		</div>
			          	</div>
			         </li>
					 <li>
			          	 <div class="banner2">
			           		<div class="caption">
					          	<h3><span>WEL</span>us site</h3>
					          	<p>为你我筑就的生活</p>
			          		</div>
			          	</div>
			         </li>
			         <li>
			          	 <div class="banner3">
			           		<div class="caption">
					          	<h3><span>WEL</span>us site</h3>
					          	<p>为你我铺垫的未来</p>
			          		</div>
			          	</div>
			         </li>		
			      </ul>
			  </div>
			</div>
		</div>
	</div>
	 
	<!--header-bottom-->
	<div class="banner-bottom-top">
			<div class="container">
			<div class="bottom-header">
				<div class="header-bottom">
					<div class=" bottom-head">
						<a href="buy.php">
							<div class="buy-media">
                                <h6>我要寻租</h6>
								<i class="buy"> </i>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="sale.php">
							<div class="buy-media">
                            <h6>我要出租</h6>
							<i class="rent"> </i>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="pravate_order.php">
							<div class="buy-media">
                            <h6>私人订制</h6>
							<i class="apart"> </i>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="congregation.php">
							<div class="buy-media">
                            <h6>VR看房</h6>
							<i class="deal"> </i>
							</div>
						</a>
					</div>
                    
<!--                    <div class=" bottom-head">
						<a href="http://hotel.elong.com/">
							<div class="buy-media">
							<i class="pg"> </i>
							<h6>宾馆租房</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="resale.php">
							<div class="buy-media">
							<i class="sell"> </i>
							<h6>转售我的</h6>
							</div>
						</a>
					</div>
					<div class=" bottom-head">
						<a href="http://dl.uaf.com.cn/Online/OnlineNew/baidu">
							<div class="buy-media">
							<i class="loan"> </i>
							<h6>房屋贷款</h6>
							</div>
						</a>
					</div>-->

					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
	</div>
			<!--//-->
				
	<!--//header-bottom-->
	
	
<!--//header-->
<!--content-->
<div class="content">
	<div class="content-grid">
		<div class="container">
			<h3>最新最热</h3>
				<div class="col-md-4 box_2">
			     	 <a href="single.php" class="mask">
			     	   	<img class="img-responsive zoom-img" src="himages/z2.jpg" alt="">
			     	   	<span class="four">￥17000</span>
			     	 </a>
			     	   <div class="most-1">
			     	   	 <h5><a href="#">大连高新区万达广场商业圈</a></h5>
			     	    	<p>3室2厅1卫 2016-04-05</p>
			     	   </div>
			 </div>
			  <div class="col-md-4 box_2">
		     	 <a href="single.php" class="mask">
			     	   	<img class="img-responsive zoom-img" src="himages/y2.jpg" alt="">
			     	   	<span class="four">￥2000</span>
			     	 </a>
		     	   <div class="most-1">
			     	   	<h5><a href="#">大连开发区阳光馨苑</a></h5>
			     	    	<p>2室1厅1卫 2015-12-31</p>
			     	   </div>
		     	
		      </div>
			  <div class="col-md-4 box_2">
		     	 <a href="single.php" class="mask">
			     	   	<img class="img-responsive zoom-img" src="himages/g6.jpg" alt="" >
			     	   	<span class="four">￥2600</span>
			     	 </a>
		     	   <div class="most-1">
			     	   	 <h5><a href="#">大连中山区解放路葵英街</a></h5>
			     	    	<p>1室1厅1卫  2015-12-31</p>
			     	   </div>
		     	
		      </div>
		 	<div class="clearfix"> </div>
		</div>
	</div>
<!--project--->
	<div class="project">
		<div class="container">
			<h3>房源长廊</h3>
				<div class="project-top">
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
							 <a href="single.php" class="mask"><img src="images/ga.jpg" class="img-responsive zoom-img" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 4.1</span>
									 </div>
									 <div class="col-md4">
									 	<strong>城润万家</strong>
									 	<small>50 Reviews</small>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p>小高层 精装90平2室2厅 家电齐全</p>
								 <p class="cost">￥2300</p>
								 <a href="#" class="hvr-sweep-to-right more">更多 >></a>
							 </div>
						</div>
					</div>
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
							  <a href="single.php" class="mask"><img src="images/ga1.jpg" class="img-responsive zoom-img" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 4.4</span>
									 </div>
									 <div class="col-md4">
									 	<strong>吉祥E家</strong>
									 	<small>61 Reviews</small>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p>精装两室一厅 家电全新 拎包即住</p>
								 <p class="cost">￥1600</p>
								 <a href="#" class="hvr-sweep-to-right more">更多 >></a>
							 </div>
						</div>
					</div>
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
							  <a href="single.php" class="mask"><img src="images/ga2.jpg" class="img-responsive zoom-img" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 3.9</span>
									 </div>
									 <div class="col-md4">
									 	<strong>中心裕景</strong>
									 	<small>42 Reviews</small>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p>1室2室3室 空手入住 房源房主托管</p>
								 <p class="cost">￥3300</p>
								 <a href="#" class="hvr-sweep-to-right more">更多 >></a>
							 </div>
						</div>
					</div>
					<div class="col-md-3 project-grid">
						<div class="project-grid-top">
							  <a href="single.php" class="mask"><img src="images/ga3.jpg" class="img-responsive zoom-img" alt=""/></a>
							 <div class="col-md1">
								 <div class="col-md2">
									 <div class="col-md3">
									 	<span class="star"> 4.1</span>
									 </div>
									 <div class="col-md4">
									 	<strong>链家房源</strong>
									 	<small>20 Reviews</small>
									 </div>
									 <div class="clearfix"> </div>
								 </div>
								 <p>1室小公寓 便宜随时看房入住</p>
								 <p class="cost">￥1800</p>
								 <a href="#" class="hvr-sweep-to-right more">更多 >></a>
							 </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>				
		</div>
	</div>
<!--//project-->
<!--service-->
	<div class="services">
		<div class="container">
			<div class="service-top">
				<h3>项目</h3>
				<p>基于大学生C2B私人定制租房平台</p>
			</div>
			<div class="services-grid">
		   		<div class="col-md-6 service-top1">
		   			<div class=" ser-grid">	
		   				<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-user"> </a>
		   			</div>
		   			<div  class="ser-top">
		   				<h4>团队成员</h4>
		   				<p>陈玉琴：组织协调、进度安排以及策划书；
                           熊斯攀：算法匹配论文以及微信端接口开发；
                           张孝帅：会议论文以及策划书；
                           史小蒙：市场、运营以及联系商家；
                           刘娴：答辩、PPT制作； </p>
		   		    </div>
					<div class="clearfix"> </div>
		   	   </div>
				<div class="col-md-6 service-top1">
		   			<div class=" ser-grid">	
		   				<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-leaf"> </a>
		   			</div>
		   			<div  class="ser-top">
		   				<h4>研究目的</h4>
		   				<p>越来越多的在校大学生有意向选择在外租房，但由于房价不断上涨，租金也随之水涨船高，使得高校附近的房子租金已经涨到千元以上，导致很多学生不得已开始向更远的地方寻找更便宜的房源。 </p>
		   		    </div>
					<div class="clearfix"> </div>
		   		</div>
		   	<div class="clearfix"> </div>
		 </div>
		 <div class="services-grid">
			   	<div class="col-md-6 service-top1">
			   		<div class=" ser-grid">	
			   			<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-cog"> </a>
			   		</div>
			   		<div  class="ser-top">
			   			<h4>研究内容</h4>
			   				<p>本项目基于大学生C2B私人定制租房平台，旨在革新传统的租房形式，为大学生租房带来便利。平台利用微信端接口技术开发，实现客户群体与商家的对接，客户可以很方便的通过平台看到他们想要的房型，并且我们平台上入驻的都是针对于大学生的商家。 </p>
			   		</div>
					<div class="clearfix"> </div>
			   	</div>
				<div class="col-md-6 service-top1">
			   		<div class=" ser-grid">	
			   			<a href="#" class="hi-icon hi-icon-archive glyphicon glyphicon-file"> </a>
			   		</div>
			   		<div  class="ser-top">
			   			<h4>项目特色</h4>
			   			<p>基于微信端接口开发，尚属于前沿技术，租房形式多样，针对特殊人群为满足其需求提供C2B私人定制服务，革新了传统的租房平台。</p>
			   		</div>
					<div class="clearfix"> </div>
			   	</div>
		   	  <div class="clearfix"> </div>
		 	</div>
		</div>
	</div>
<!--//services-->
<!--phone-->
	<div class="phone">
		<div class="container">
			<div class="col-md-6">
				<img src="images/ph1.png" class="img-responsive" alt=""/>
			</div>
			<div class="col-md-6 phone-text">
				<h4>Search Homes Everywhere</h4>
					<div class="text-1">
						<h5>我们定位</h5>
						<p>基于LBS的开发，让你在哪里，我们都可以知道</p>
					</div>
					<div class="text-1">
						<h5>地图搜索</h5>
						<p>基于地图的API，让你想搜索的每个地方无所遁形</p>
					</div>
					<div class="text-1">
						<h5>简单细节</h5>
						<p>满足每个人不同的品味，贴出不同的小文字</p>
					</div>
					<a href="#" class="hvr-sweep-to-right more">下载 App</a>
			</div>
		</div>
	</div>
<!--//phone-->
<!--partners-->
	<div class="content-bottom1">
		<h3>Our Partners</h3>
	 		<div class="container">
				<ul>
					<li><a href="#"><img class="img-responsive" src="images/lg.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg1.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg2.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg3.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg4.png" alt=""></a></li>
				<div class="clearfix"> </div>
				</ul>
				<ul>
					<li><a href="#"><img class="img-responsive" src="images/lg5.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg6.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg7.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg8.png" alt=""></a></li>
					<li><a href="#"><img class="img-responsive" src="images/lg9.png" alt=""></a></li>	
				<div class="clearfix"> </div>
				</ul>
			</div>
		</div>	
<!--//partners-->	
	</div>
<!--footer-->
<div class="footer">
		<div class="clearfix"> </div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-8 footer-class">
				<p >Copyright &copy; 2016.Company name All rights reserved.</p>
			</div>
		<div class="clearfix"> </div>
	 	</div>
	</div>
</div>
<!--//footer-->
</body>
</html>