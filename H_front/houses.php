<?php 
require_once '../include.php';

?>
<!DOCTYPE html>
<html>
<head>
<title>Hey,你的房源</title>
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
<meta name="keywords" content="Real Home  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
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
				<li><span ><i class="glyphicon glyphicon-phone"> </i>+182 4113 7622</span></li>
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
<!--//-->
<div class=" banner-buying">
	<div class=" container">
	<h3><span>HOU</span>SES</h3> 
	<!---->
	<div class="menu-right">
		 <ul class="menu">
			<li class="item1"><a href="#">点 我<i class="glyphicon glyphicon-menu-down"> </i> </a>
			<ul class="cute">
				<li class="subitem1"><a href="buy.php">我要求租 </a></li>
				<li class="subitem2"><a href="sale.php">我要出租 </a></li>
				<li class="subitem3"><a href="pravate_order.php">私人订制 </a></li>
				<li class="subitem1"><a href="congregation.php">VR看房 </a></li>
			</ul>
		</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
		<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
      		
	</div>
</div>
<!--//header-->
<!--Dealers-->
<div class="dealers">
<div class="container">
	<h3>房源信息</h3>
	<div class="dealer">
		<h4>不求最好，只求最合适</h4>
		<div class="dealer-grid">
			<div class="col-sm-4 dealer-grid1">
				<div class="dealer-grid-top">
					<span>1</span>
					<h6><a href="single.html">Lorem Ipsum is simply dummy text </a></h6>
					<div class="clearfix"> </div>
				</div>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			</div>
			<div class="col-sm-4 dealer-grid1">
				<div class="dealer-grid-top">
					<span>2</span>
					<h6><a href="single.html">Lorem Ipsum is simply dummy text</a></h6>
					<div class="clearfix"> </div>
				</div>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			</div>
			<div class="col-sm-4 dealer-grid1">
				<div class="dealer-grid-top">
					<span>3</span>
					<h6><a href="single.html">Lorem Ipsum is simply dummy text</a></h6>
					<div class="clearfix"> </div>
				</div>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="dealer-top">
		<h4>房源列表</h4>
			<div class="deal-top-top">
				<div class="col-md-3 top-deal-top">
					<div class=" top-deal">
						<a href="single.html" class="mask"><img src="images/de.jpg" class="img-responsive zoom-img" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="single.html"> ut perspiciatis</a></h5>
								<p>Plot Area : 150 Sq.Yrds</p>
								<p>Price: $250000</p>
							</div>
							<div class="top-deal2">
								<a href="single.html" class="hvr-sweep-to-right more">More</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top-deal-top">
					<div class=" top-deal">
						<a href="single.html" class="mask"><img src="images/de1.jpg" class="img-responsive zoom-img" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="single.html"> ut perspiciatis</a></h5>
								<p>Plot Area : 150 Sq.Yrds</p>
								<p>Price: $250000</p>
							</div>
							<div class="top-deal2">
								<a href="single.html" class="hvr-sweep-to-right more">More</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top-deal-top">
					<div class=" top-deal">
						<a href="single.html" class="mask"><img src="images/de2.jpg" class="img-responsive zoom-img" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="single.html"> ut perspiciatis</a></h5>
								<p>Plot Area : 150 Sq.Yrds</p>
								<p>Price: $250000</p>
							</div>
							<div class="top-deal2">
								<a href="single.html" class="hvr-sweep-to-right more">More</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top-deal-top ">
					<div class=" top-deal">
						<a href="single.html" class="mask"><img src="images/de3.jpg" class="img-responsive zoom-img" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="single.html"> ut perspiciatis</a></h5>
								<p>Plot Area : 150 Sq.Yrds</p>
								<p>Price: $250000</p>
							</div>
							<div class="top-deal2">
								<a href="single.html" class="hvr-sweep-to-right more">More</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			<div class="clearfix"> </div>
		</div>		
		<div class="deal-top-top">
				<div class="col-md-3 top-deal-top">
					<div class=" top-deal">
						<a href="single.html" class="mask"><img src="images/de4.jpg" class="img-responsive zoom-img" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="single.html"> ut perspiciatis</a></h5>
								<p>Plot Area : 150 Sq.Yrds</p>
								<p>Price: $250000</p>
							</div>
							<div class="top-deal2">
								<a href="single.html" class="hvr-sweep-to-right more">More</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top-deal-top">
					<div class=" top-deal">
						<a href="single.html" class="mask"><img src="images/de5.jpg" class="img-responsive zoom-img" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="single.html"> ut perspiciatis</a></h5>
								<p>Plot Area : 150 Sq.Yrds</p>
								<p>Price: $250000</p>
							</div>
							<div class="top-deal2">
								<a href="single.html" class="hvr-sweep-to-right more">More</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top-deal-top">
					<div class=" top-deal">
						<a href="single.html" class="mask"><img src="images/de6.jpg" class="img-responsive zoom-img" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="single.html"> ut perspiciatis</a></h5>
								<p>Plot Area : 150 Sq.Yrds</p>
								<p>Price: $250000</p>
							</div>
							<div class="top-deal2">
								<a href="single.html" class="hvr-sweep-to-right more">More</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top-deal-top">
					<div class=" top-deal">
						<a href="single.html" class="mask"><img src="images/de7.jpg" class="img-responsive zoom-img" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="single.html"> ut perspiciatis</a></h5>
								<p>Plot Area : 150 Sq.Yrds</p>
								<p>Price: $250000</p>
							</div>
							<div class="top-deal2">
								<a href="single.html" class="hvr-sweep-to-right more">More</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			<div class="clearfix"> </div>
		</div>		
		<div class="deal-top-top">
				<div class="col-md-3 top-deal-top">
					<div class=" top-deal">
						<a href="single.html" class="mask"><img src="images/de8.jpg" class="img-responsive zoom-img" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="single.html"> ut perspiciatis</a></h5>
								<p>Plot Area : 150 Sq.Yrds</p>
								<p>Price: $250000</p>
							</div>
							<div class="top-deal2">
								<a href="single.html" class="hvr-sweep-to-right more">More</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top-deal-top">
					<div class=" top-deal">
						<a href="single.html" class="mask"><img src="images/de9.jpg" class="img-responsive zoom-img" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="single.html"> ut perspiciatis</a></h5>
								<p>Plot Area : 150 Sq.Yrds</p>
								<p>Price: $250000</p>
							</div>
							<div class="top-deal2">
								<a href="single.html" class="hvr-sweep-to-right more">More</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top-deal-top">
					<div class=" top-deal">
						<a href="single.html" class="mask"><img src="images/de10.jpg" class="img-responsive zoom-img" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="single.html"> ut perspiciatis</a></h5>
								<p>Plot Area : 150 Sq.Yrds</p>
								<p>Price: $250000</p>
							</div>
							<div class="top-deal2">
								<a href="single.html" class="hvr-sweep-to-right more">More</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 top-deal-top">
					<div class=" top-deal">
						<a href="single.html" class="mask"><img src="images/de11.jpg" class="img-responsive zoom-img" alt=""></a>
						<div class="deal-bottom">
							<div class="top-deal1">
								<h5><a href="single.html"> ut perspiciatis</a></h5>
								<p>Plot Area : 150 Sq.Yrds</p>
								<p>Price: $250000</p>
							</div>
							<div class="top-deal2">
								<a href="single.html" class="hvr-sweep-to-right more">More</a>
							</div>
						<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			<div class="clearfix"> </div>
		</div>		
	</div>
</div>
</div>
<!--footer-->
<div class="footer">
	<div class="footer-bottom">
		<div class="container">
			<div class="col-md-4 footer-logo">
				<h2><a href="index.php">U_Homer</a></h2>
			</div>
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