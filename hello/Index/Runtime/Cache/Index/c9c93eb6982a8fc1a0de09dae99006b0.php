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
<link rel="stylesheet" href="__ROOT__/Data/Ueditor/third-party/SyntaxHighlighter/shCoreDefault.css">
<script type="text/javascript" src='__ROOT__/Data/Ueditor/third-party/SyntaxHighlighter/shCore.js'></script>
<script type="text/javascript">
SyntaxHighlighter.all();
</script>
<title>[yawn]我在这里－博文</title>

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

    <li><a href="__GROUP__" class="active">关于</a>
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
    <div class="intro">尽情写下自己所想写的吧。可以是自己的故事、别人的故事，你的心情、想说的任何话。这里是“一本”开放的“杂志”，你可以在左边点击博客查看分类。</div>
    <div class="primary"> 
      <!-- Begin Post -->
      <div class="post"> <img src="__PUBLIC__/style/images/art/blog2-1.jpg" alt="" /> 
        
        <!-- Begin Info -->

          <!-- End Date --> 
          
          <!-- Begin Meta -->
          <div class="meta">
            <h3 class="title"><?php echo ($blog["title"]); ?></h3>
          </div>
          <div class='comments'><?php echo ($blog["content"]); ?></div>
          <!-- End Meta --> 
        </div>
        <div class="clear"></div>
        <!-- End Info -->
        
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

    <!-- Begin Footer -->
    <div class="footer-box one-third">
        <ul class="popular-posts">
          <?php echo W('Hot', array('id' => 100));?>
          <li> <a href="#"><img src="__PUBLIC__/style/images/art/s1.jpg" alt="" /></a>
            <h5><a href="#">Dolor Commodo Consectetur</a></h5>
            <span>26 Aug 2013 | <a href="#">21 Comments</a></span> </li>
        </ul>
      </div>
            <div class="footer-box one-third">
        <ul class="popular-posts">
          <?php echo W('New', array('limit' => 5));?>
          <li> <a href="#"><img src="__PUBLIC__/style/images/art/s1.jpg" alt="" /></a>
            <h5><a href="#">Dolor Commodo Consectetur</a></h5>
            <span>26 Aug 2013 | <a href="#">21 Comments</a></span> </li>
        </ul>
      </div>   
      <div class="footer-box one-third last">
     <h3>「 唯有好网站不可辜负 」</h3>
        <ul class="sidelist">
          <li><a href="#">Web Design (12)</a></li>
          <li><a href="#">Photography (10)</a></li>
          <li><a href="#">Manipulation (18)</a></li>
          <li><a href="#">Motion Graphic (13)</a></li>
          <li><a href="#">Graphic Design (10)</a></li>
        </ul>
    </div>
    </div>
    <!-- End Footer --> 
    
  </div>
  <!-- End Content --> 
  
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