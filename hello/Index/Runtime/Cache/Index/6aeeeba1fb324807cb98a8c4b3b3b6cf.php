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
<title>［yawn]我在这里－博客区</title>
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

        <li><a href="__GROUP__/contact" class="active">联系</a>
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
        
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <!-- End Sidebar --> 

  
  <!-- Begin Content -->
  <div id="content">
    <h1 class="title">[yawn] 我在这里－博客区</h1>
    <div class="line"></div>
     <div align="center"><div class="intro">把心里的话都写在里面。</div></div>
     <div align="center"><p style="font-family:courier">「这里是“一本”开放的“杂志”，欢迎投稿，可以在左边点击查看分类。」</p></div>
    <div class="primary"> 
      <!-- Begin Post -->
      <div align="center"><a href="__GROUP__/send"><img src="__PUBLIC__/style/images/article.png" alt="Caprice" /></a></div>
        
        <!-- Begin Info -->
 
     <div class='main'>
      <div class='main-left'>
            <?php if(is_array($blog)): foreach($blog as $key=>$v): ?><dl>
              <dt><?php echo ($v["name"]); ?></dt>
              <div align="center"><dd class='channel'><?php echo ($v["title"]); ?></dd></div>
              <div align="center"><dd class='time'><?php echo (date('Y年m月d日 H:i:s', $v["time"])); ?></dd></div>
              <font face="verdana"><dd class='content'><?php echo ($v["summary"]); ?></dd></font>
              <dd class='read'>
                <a href="<?php echo U('/' . $v['id']);?>" target='_blank'>♡戳进来</a>
              </dd>
            </dl><?php endforeach; endif; ?>
        </div>

        </div>

      
      <!-- End Post --> 
      
      
      <!-- Begin Page Navi -->
            <p><?php echo ($page); ?></p>
       
      <!-- End Page Navi --> 
    <!-- End Primary --> 
    
    <!-- Begin Secondary -->
   
    <!-- End Secondary -->
    
    <div class="clear"></div>
    
    <!-- Begin Footer -->
 <div id="footer">
    <div class="footer-box one-third">
      <h3>「热门的」</h3>
        <ul class="popular-posts">
          <?php echo W('Hot', array('id' => 100));?>
        </ul>
      </div>
            <div class="footer-box one-third">
                   <h3>「最近的」</h3>
        <ul class="popular-posts">
          <?php echo W('New', array('limit' => 5));?>
        </ul>
      </div>   
      <div class="footer-box one-third last">
     <h3>「 唯有好网站不可辜负 」</h3>
     <br>
        <ul>
          <li><a href="http://www.jianshu.com/">简书「交流故事，沟通想法」 </a></li>
          <li><a href="http://www.manshijian.com/">慢时间「慢下来，发现身边的美好点滴」</a></li>
          <li><a href="http://pianke.me">片刻网「用文字交换世界」</a></li>
          <li><a href="http://10years.me/account/login">十年後「你会成为什么样的人」</a></li>
          <li><a href="http://www.lofter.com/?urschecked=true">Lofter「记录生活，发现同好」</a></li>
        </ul>
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