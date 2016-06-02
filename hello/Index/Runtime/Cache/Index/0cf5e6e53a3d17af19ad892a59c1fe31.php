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
    <h1 class="title">Blog</h1>
    <div class="line"></div>
         <div align="center"><div class="intro">把心里的话都写在里面。</div></div>
    <div class="primary"> 
      <!-- Begin Post -->
       <div align="center"><a href="__GROUP__/send"><img src="__PUBLIC__/style/images/article.png" alt="Caprice" /></a></div>
        
        <!-- Begin Info -->

          <!-- End Date --> 
          
          <!-- Begin Meta -->
            <div class='main'>
            <div class='main-left'>
              <div align="center"><h1><dd class='channel'><?php echo ($blog["title"]); ?></dd></h1></div>

              <dd class='content'><?php echo ($blog["content"]); ?></dd>
              <div class="bshare-custom"><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到网易微博" class="bshare-neteasemb"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count">0</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/button.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><a class="bshareDiv" onclick="javascript:return false;"></a><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
              <!-- 多说评论框 start -->
  <div class="ds-thread" data-thread-key="<?php echo ($blog["id"]); ?>" data-title="<?php echo ($v["title"]); ?>"</div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"liangyeni"};
  (function() {
    var ds = document.createElement('script');
    ds.type = 'text/javascript';ds.async = true;
    ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
    ds.charset = 'UTF-8';
    (document.getElementsByTagName('head')[0] 
     || document.getElementsByTagName('body')[0]).appendChild(ds);
  })();
  </script>
<!-- 多说公共JS代码 end -->
          <!-- End Meta --> 
        </div>
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