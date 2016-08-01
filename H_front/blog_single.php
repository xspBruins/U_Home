<?php 
require_once '../include.php';

//得到点击的博客内容
$row = $_REQUEST['row'];
if(!$row){
	alertMes("sorry,此帖无效了哦~", "blog.php");
}

//最新帖子
$newrows = getNewestBlog();
//精华帖子
$favrows = getFavBlog();
//热租房屋
$favHousesrows = getFavHouses();

//评论实时更新
$name = $_POST['name'];
$email = $_POST['email'];
$topic = $_POST['topic'];
$comment = $_POST['comment'];
//获得帖子id
$bId = $row['id'];

insertComment($bId, $name, $email, $topic, $comment);
//得到评论
$commentrows = getComment($bId);

?>

<!DOCTYPE html>
<html>
<head>
<title>部落格详情</title>
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
	<h3><span>部落</span>格</h3> 
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
<!--blog-->
<div class="blog">
<div class="container">
   <div class="col-md-9 blog-head">
	     <div class="blog-top">
	        <img src="himages/<?php echo $row['uImg'];?>" class="img-responsive" alt=""/>
	          <h4><?php echo $row['uTop'];?></h4>
	         <h5>Posted By : <a href="#"><?php echo $row['uAuthor'];?></a> | Date : <?php echo $row['upubTime'];?></h5>
	        <p><?php echo $row['uDesc'];?></p>
	           <div class="links">
		  		  <ul class="blog-links">
		  			<li><a href="#"><i class="blog_circle">24 </i><span>评论</span></a></li>
		  			<li><a href="#"><i class="glyphicon glyphicon-heart"> </i><span>喜欢</span></a></li>
		  		  </ul>
		  	   </div>
		 </div> 
		 <!---->
			<div class="single-grid">
				<h5>评 论</h5>
				<?php foreach ($commentrows as $commentrow):?>
				 <div class="media">
		          <div class="media-left">
		            <a href="#">
		            	<img class="media-object" src="images/av.png" alt="" />
		            </a>
		          </div>
		          <div class="media-body">
		            <h4 class="media-heading"><?php echo $commentrow['name'];?></h4>
		            <p><?php echo $commentrow['cComment'];?></p>
		          </div>
		        </div>
		        <?php endforeach;?>		        
		</div>
		<!---->
		<div class="leave">
			<h5>留下评论</h5>
			<form action="blog_single.php" method="post">
			   <input type="text"  placeholder="账号" required="" name="name">
			   <input type="text" placeholder="邮箱" required="" name="email">
			   <input type="text" placeholder="主题" required="" name="topic">
			   <textarea  placeholder="评论" required="" name="comment"></textarea>
			   <label class="hvr-sweep-to-right">
	           <input type="submit" name="sub" value="评论">
	           </label>
			</form>
			</div>
	</div>
	<div class="col-md-3 blog-sidebar">
	<?php foreach ($newrows as $newrow): ?>
		<div class="blog-list">
	     	<h4>最新帖子</h4>
			<ul >
				<li><a href="javascript:void(0);" onclick="getBlog(<?php echo $newrow['id'];?>);return false;"><i class="glyphicon glyphicon-arrow-right"> </i><?php echo $newrow['uTop'];?></a></li>
			</ul>
			
			<div class="clearfix"> </div>
		 </div>
	<?php endforeach; ?>
	<?php foreach ($favrows as $favrow): ?>
		  <div class="blog-list">
	     	<h4>精华帖子</h4>
			<ul >
				<li><a href="javascript:void(0);" onclick="getBlog(<?php echo $favrow['id'];?>);return false;"><i class="glyphicon glyphicon-arrow-right"> </i><?php echo $favrow['uTop']; ?></a></li>
			</ul>
		 </div>
	<?php endforeach; ?>
		 <div class="blog-list1">
	     	<h4>最近热租</h4>
	     	<?php foreach ($favHousesrows as $favHousesrow): ?>
			<div class="blog-list-top">
				<div class="blog-img">
					<a href="javascript:void(0);" onclick="getHouses(<?php echo $favrow['id'];?>);return false;"><img class="img-responsive" src="himages/<?php echo $favHousesrow['hImg'];?>" alt=""></a>
				</div>
				<div class="blog-text">
					<p ><a href="#"><?php echo $favHousesrow['hLocation'];?>&nbsp;&nbsp;<?php echo $favHousesrow['hKind'];?></a></p>
					<span class="link">
						<?php echo $favHousesrow[hpubTime];?>
						<a href="#">
							<i class="glyphicon glyphicon-heart"> </i>
						</a>16
					</span>
				</div>
				<div class="clearfix"> </div>
			</div>
			<?php endforeach; ?>
		 </div>
	 </div>

	 <div class="clearfix"> </div>
	 
</div>
</div>
<!--//blog-->
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
<script type="text/javascript">
function getBlog(id){
	window.location = "doBlog.php?act=searchBlog&id="+id;
}

function getHouses(id){
	window.location = "doHouses.php?act=searchHouses&id="+id;
}
</script>
</html>