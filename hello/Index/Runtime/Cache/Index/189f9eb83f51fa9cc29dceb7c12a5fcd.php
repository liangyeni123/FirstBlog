<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="__PUBLIC__/style/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/style.css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="__PUBLIC__/style/js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/style/js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="__PUBLIC__/style/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="__PUBLIC__/style/js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="__PUBLIC__/style/js/carousel.js"></script>
<script type="text/javascript" src="__PUBLIC__/style/js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="__PUBLIC__/style/js/jquery.masonry.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/style/js/jquery.slickforms.js"></script>
</head>
<title>Caprice</title>

<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="style/css/ie7.css" media="all" />
<![endif]-->
<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="style/css/ie8.css" media="all" />
<![endif]-->
<!--[if IE 9]>
<link rel="stylesheet" type="text/css" href="style/css/ie9.css" media="all" />
<![endif]-->

<body>
<!-- Begin Wrapper -->
<div id="wrapper"> 
  <!-- Begin Sidebar -->
  <div id="sidebar">
    <div id="logo"><a href="index.html"><img src="__PUBLIC__/style/images/logo.png" alt="Caprice" /></a></div>

       <div id="article"><a href="index.html"><img src="__PUBLIC__/style/images/article.png" alt="Caprice" /></a></div>
<?php
 $cate = M('cate')->order('sort')->select(); import('Class.Category', APP_PATH); $cate = Category::unlimitedForLayer($cate); p($cate); ?>
    <!-- Begin Menu -->
    <div id="menu" class="menu-v">
      <ul>
        <li><a href="index.html" class="active">首页</a>
        </li>
        <li><a href="portfolio.html">推介</a>
        	<ul>
        		<li><a href="portfolio.html">Portfolio 4 Columns</a></li>
        		<li><a href="portfolio2.html">Portfolio 3 Columns</a></li>
        		<li><a href="portfolio3.html">Portfolio 2 Columns</a></li>
        		<li><a href="portfolio4.html">Portfolio 1 Column</a></li>
        		<li><a href="portfolio-post.html">Portfolio Post</a></li>
        	</ul>
        </li>
        <li><a href="blog.html">博客</a>
        	<ul>
        		<li><a href="blog.html">说说电影</a></li>
        		<li><a href="blog2.html">说说音乐</a></li>
        		<li><a href="post.html">说说故事</a></li>
        	</ul>
        </li>
        <li><a href="buttons-boxes-images.html">关于</a>
        	<ul>
        		<li><a href="buttons-boxes-images.html">Buttons Boxes Images</a></li>
        		<li><a href="tabs-toggle-table.html">Tabs Toggle Tables</a></li>
        		<li><a href="testimonials.html">Testimonials</a></li>
        		<li><a href="typography.html">Typography</a></li>
        		<li><a href="service-icons.html">Service Icons</a></li>
        	</ul>
        </li>
        <li><a href="contact.html">联系</a></li>
      </ul>
    </div>
    <!-- End Menu -->
    
    <div class="sidebox">
      <ul class="share">
        <li><a href="#"><img src="__PUBLIC__/style/images/icon-rss.png" alt="RSS" /></a></li>
        <li><a href="#"><img src="__PUBLIC__/style/images/icon-facebook.png" alt="Facebook" /></a></li>
        <li><a href="#"><img src="__PUBLIC__/style/images/icon-twitter.png" alt="Twitter" /></a></li>
        <li><a href="#"><img src="__PUBLIC__/style/images/icon-dribbble.png" alt="Dribbble" /></a></li>
        <li><a href="#"><img src="__PUBLIC__/style/images/icon-linkedin.png" alt="LinkedIn" /></a></li>
      </ul>
    </div>
    <div class="sidebox">
      <div class="search">
        <h3>Search</h3>
        <form class="searchform" method="get">
          <input type="text" id="s" name="s" value="type and hit enter" onfocus="this.value=''" onblur="this.value='type and hit enter'"/>
        </form>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <!-- End Sidebar --> 
  
  <!-- Begin Content -->
  <div id="content">
    <h1 class="title">Blog</h1>
    <div class="line"></div>
    <div class="intro">Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</div>
    <div class="primary"> 
      <!-- Begin Post -->
      <div class="post"> <img src="__PUBLIC__/style/images/art/blog2-1.jpg" alt="" /> 
        
        <!-- Begin Info -->
        <div class="info"> 
          <!-- Begin Date -->
          <div class="date">
            <div class="day">24</div>
            <div class="month">Sep</div>
          </div>
          <!-- End Date --> 
          
          <!-- Begin Meta -->
          <div class="meta">
            <h3 class="title">Malesuada Condimentum Inceptos Vehicula</h3>
            <div class="comments"><a href="#">11 Comments</a></div>
            <div class="tags"><a href="#">photography,</a> <a href="#">manipulation,</a> <a href="#">journal</a></div>
          </div>
          <!-- End Meta --> 
        </div>
        <div class="clear"></div>
        <!-- End Info -->
        
        <p>Curabitur blandit tempus porttitor. Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
        
        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>

		<p>Nulla vitae elit libero, a pharetra augue. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras mattis consectetur purus sit amet fermentum.</p>

		<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Curabitur blandit tempus porttitor. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas faucibus mollis interdum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
		
		<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      </div>
      <!-- End Post --> 
      
      <!-- Begin Facebook Comments  -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div class="fb-comments" data-href="http://themes.iki-bir.com/caprice/post2.html" data-num-posts="10" data-width="470"></div>  <!-- Enter your page URL here  --> 
    <!-- End Facebook Comments  -->
     
    </div>
    <!-- End Primary --> 
    
    <!-- Begin Secondary -->
    <div class="secondary">
    
      
      <div class="sidebox">
        <h3>Categories</h3>
        <ul class="sidelist">
          <li><a href="#">Web Design (12)</a></li>
          <li><a href="#">Photography (10)</a></li>
          <li><a href="#">Manipulation (18)</a></li>
          <li><a href="#">Motion Graphic (13)</a></li>
          <li><a href="#">Graphic Design (10)</a></li>
        </ul>
      </div>
      
      <div class="sidebox">
        <h3>Popular Posts</h3>
        <ul class="popular-posts">
          <li> <a href="#"><img src="__PUBLIC__/style/images/art/s1.jpg" alt="" /></a>
            <h5><a href="#">Dolor Commodo Consectetur</a></h5>
            <span>26.08.11 | <a href="#">21 Comments</a></span> </li>
          <li> <a href="#"><img src="__PUBLIC__/style/images/art/s2.jpg" alt="" /></a>
            <h5><a href="#">Dolor Commodo Consectetur</a></h5>
            <span>26.08.11 | <a href="#">21 Comments</a></span> </li>
          <li> <a href="#"><img src="__PUBLIC__/style/images/art/s3.jpg" alt="" /></a>
            <h5><a href="#">Dolor Commodo Consectetur</a></h5>
            <span>26.08.11 | <a href="#">21 Comments</a></span> </li>
        </ul>
      </div>
      
      <div class="sidebox">
        <h3>Custom Text</h3>
        <p>Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p> <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor.</p>
      </div>
      
      
      <div class="sidebox">
        <h3>Archives</h3>
        <ul class="sidelist">
          <li><a href="#">January 2013 (12)</a></li>
          <li><a href="#">February 2013 (10)</a></li>
          <li><a href="#">March 2013 (18)</a></li>
          <li><a href="#">April 2013 (13)</a></li>
          <li><a href="#">May 2013 (10)</a></li>
          <li><a href="#">June 2013 (18)</a></li>
        </ul>
      </div>
      
      <div class="sidebox">
        <h3>Tags</h3>
        <ul class="sidelist">
          <li><a href="#">Web Design (12)</a></li>
          <li><a href="#">Photography (10)</a></li>
          <li><a href="#">Manipulation (18)</a></li>
          <li><a href="#">Motion Graphic (13)</a></li>
          <li><a href="#">Graphic Design (10)</a></li>
        </ul>
      </div>
    </div>
    <!-- End Secondary -->
    
    <div class="clear"></div>
    
    <!-- Begin Footer -->
    <div id="footer">
      <div class="footer-box one-third">
        <h3>Popular Posts</h3>
        <ul class="popular-posts">
          <li> <a href="#"><img src="__PUBLIC__/style/images/art/s1.jpg" alt="" /></a>
            <h5><a href="#">Dolor Commodo Consectetur</a></h5>
            <span>26 Aug 2013 | <a href="#">21 Comments</a></span> </li>
          <li> <a href="#"><img src="__PUBLIC__/style/images/art/s2.jpg" alt="" /></a>
            <h5><a href="#">Dolor Commodo Consectetur</a></h5>
            <span>26 Aug 2013 | <a href="#">21 Comments</a></span> </li>
          <li> <a href="#"><img src="__PUBLIC__/style/images/art/s3.jpg" alt="" /></a>
            <h5><a href="#">Dolor Commodo Consectetur</a></h5>
            <span>26 Aug 2013 | <a href="#">21 Comments</a></span> </li>
        </ul>
      </div>
      <div class="footer-box one-third">
        <h3>About</h3>
        <p>Donec id elit non mi porta gravida at eget metus. Donec ullamcorper nulla non metus auctor fringilla.</p>
        <p>Lorem Ipsum Dolor Sit
          Moon Avenue No:11/21
          Planet City, Earth<br>
          <br>
          <span class="lite1">Fax:</span> +555 797 534 01<br>
          <span class="lite1">Tel:</span> +555 636 646 62<br>
          <span class="lite1">E-mail:</span> name@domain.com</p>
      </div>
      <div class="footer-box one-third last">
  	<h3>Custom Text</h3>
  	<p>Nullam quis risus eget urna mollis ornare vel eu leo. Maecenas faucibus mollis interdum. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit. </p>
  	<p>Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor.</p>
  	</div>
    </div>
    <!-- End Footer --> 
    
  </div>
  <!-- End Content --> 
  
</div>
<!-- End Wrapper -->
<div class="clear"></div>
<script type="text/javascript" src="__PUBLIC__/style/js/scripts.js"></script>
<!--[if !IE]> -->
<script type="text/javascript" src="__PUBLIC__/style/js/jquery.corner.js"></script>
<!-- <![endif]-->
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>