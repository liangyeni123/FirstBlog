<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" type="image/x-icon" href="__PUBLIC__/style/images/favicon.png" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/style2.css" media="all" />
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
<title>[yawn]我在这里</title>

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
		 
	
    <!-- Begin Menu -->
    <div id="menu" class="menu-v">
      <ul>
        <li><a href="__GROUP__" class="active">首页</a>
        </li>
        
            
            
      <?php
 $_nav_cate = M('cate')->order("sort ASC")->select(); import('Class.Category', APP_PATH); $_nav_cate = Category::unlimitedForlayer($_nav_cate); foreach ($_nav_cate as $_nav_cate_v) : extract($_nav_cate_v); $url = U('/c_' . $id); ?><li class ='nav-lv1-li'>
               <a href="<?php echo ($url); ?>" class='top-cate'><?php echo ($name); ?></a>
        	<ul>
                <?php if(is_array($child)): foreach($child as $key=>$v): ?><li><a href="<?php echo U('/c_'. $v['id']);?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
        	</ul>
        </li><?php endforeach;?>

    <li><a href="__GROUP__/send" class="active">投稿</a>
        </li>

        <li><a href="index.php/contact" class="active">联系</a>
        </li>
      </ul>
    </div>
    <!-- End Menu -->
    
    <div class="sidebox">
    <ul class="share">
    	<li><a href="#"><img src="__PUBLIC__/style/images/icon-rss.png" alt="RSS" /></a></li>
    	<li><a href="#"><img src="__PUBLIC__/style/images/icon-facebook.png" alt="Facebook" /></a></li>
    	<li><a href="https://twitter.com/yeni_liang"><img src="__PUBLIC__/style/images/icon-twitter.png" alt="Twitter" /></a></li>
    	<li><a href="#"><img src="__PUBLIC__/style/images/icon-dribbble.png" alt="Dribbble" /></a></li>
    	<li><a href="#"><img src="__PUBLIC__/style/images/icon-linkedin.png" alt="LinkedIn" /></a></li>
    </ul>
    </div>

    
	</div>
	<!-- End Sidebar -->
	
	<!-- Begin Content -->
	<div id="content">
	<h1 class="title">我在这里，等你很久了。</h1>
	<div class="line"></div>
	<div class="intro">欢迎来到“[yawn]我在这里”。推荐小物件、小音乐、小电影；写下小故事、小情绪、小心情；中意简单、纯净的生活态度。</div>
	
	<!-- Begin Slider -->
	<div id="slider">

		<div class="flexslider">
	    <ul class="slides">
	    	<li><img src="__PUBLIC__/style/images/art/slide1.jpg" alt=""/></li>
	    	<li><img src="__PUBLIC__/style/images/art/slide2.jpg" alt=""/></li>
	    	<li><img src="__PUBLIC__/style/images/art/slide3.jpg" alt=""/></li>
	    	<li><img src="__PUBLIC__/style/images/art/slide4.jpg" alt=""/></li>
	    </ul>
	  </div>

	</div>
    <!-- End Slider --> 
    
    <h3>以上照片来源于豆瓣神机，1982年诞生的美能达x700~</h3>
    
    <p><img src="__PUBLIC__/style/images/meitu_3.png" alt=""></p>

        </p>
    
    
    
    <div class="one-half">
    <h3><img src="__PUBLIC__/style/images/icon-web.png" alt="" />我在这里。</h3>
    <p>在这里，了解到更多有趣的和新奇的。</p>
    </div>
    
    <div class="one-half last">
    <h3><img src="__PUBLIC__/style/images/music.jpg" alt="" />音乐。</h3>
    <p>不如，一起来听一首歌。</p>
    </div>
    
    <div class="clear"></div>
    
    
    
    <div class="one-half">
    <h3><img src="__PUBLIC__/style/images/icon-motion.png" alt="" />电影。</h3>
    <p>无论是记忆中的黑白默片，还是就着爆米花的电影院大片，我们都早已离不开它。</p>
    </div>
    
    <div class="one-half last">
    <h3><img src="__PUBLIC__/style/images/icon-camera.jpg" alt="" />摄影。</h3>
    <p>摄影也是一门艺术，哪怕只是光影变幻。 </p>
    </div>
    
    <div class="clear"></div>
    
    <div class="line"></div>
    
    <!-- Begin Latest Works -->
    <h2>点击视频有喵和美食！↓↓↓↓↓↓</h2>
         <video src="__PUBLIC__/style/images/video1.mp4" controls>第一段视频</video>    Video by @姜老刀。Resource from Meipai。
    <!-- End Latest Works -->
</br>
    

    
    <!-- Begin Footer -->
    

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