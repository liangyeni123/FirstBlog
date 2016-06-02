<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>[yawn]我在这里|design by liangyeni.</title>
<meta name="keywords" content="branding,design,logo,book,video,website,web,art">



<link rel="stylesheet" href="__PUBLIC__/css1/style.css" type="text/css" />

<link rel="stylesheet" href="__PUBLIC__/js1/jquery.maximage.css" type="text/css" media="screen" title="CSS" charset="utf-8" />
<link rel="stylesheet" href="__PUBLIC__/js1/overlay.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="__PUBLIC__/js1/tinybox/style.css" type="text/css" />
<script src="__PUBLIC__/js1/jquery.js"></script>

<script src="__PUBLIC__/js1/jquery.center.js"></script>
<script src="__PUBLIC__/js1/tinybox/tinybox.js"></script>
<script src="__PUBLIC__/js1/jquery.cycle.all.js" type="text/javascript"></script>
<script src="__PUBLIC__/js1/jquery.maximage.min.js" type="text/javascript"></script>


<script type="text/javascript" src="__PUBLIC__/js1/rotate3d/base.js"></script>
<script type="text/javascript" src="__PUBLIC__/js1/rotate3d/rotate3di.js"></script>


<style>
.back{
	display:none;
}

</style>

<script type="text/javascript" charset="utf-8">

$(function(){
    $('#maximage').maximage({
        cycleOptions: {
            fx:'fade',
            speed: 900,
            timeout: 6000,
            prev: '#arrow_left',
            next: '#arrow_right'
        },
        onFirstImageLoaded: function(){
	$("#preloader").delay(350).fadeOut(1500);
        }
    });
	
	
    function mySideChange(front) {
        if (front) {
            $(this).parent().find('div.front').show();
            $(this).parent().find('div.back').hide();
            
        } else {
            $(this).parent().find('div.front').hide();
            $(this).parent().find('div.back').show();
        }
    }
    

    $('#logo').hover(
        function () {
            $(this).find('div').stop().rotate3Di('flip', 200, {direction: 'clockwise', sideChange: mySideChange});
        },
        function () {
            $(this).find('div').stop().rotate3Di('unflip', 380, {sideChange: mySideChange});
        }
    );
	

	
});
</script>


</head>

<body>
<div id="preloader">
<div id="status">&nbsp;</div>
</div>

<div id="logo">

	
	<div class="front">
						<img  src="__PUBLIC__/images1/logo.png" alt="[yawn] | by liangyeni" title="[yawn] | by liangyeni"/>
	</div>
				
	<div class="back">
		<div id="comingSoon" >I am in here.</div>
	</div>

	
</div>

<div id="contact">

<div class="contactType">tel&nbsp;</div><div class="contactContent">&nbsp;&nbsp;&nbsp;+86 15521232914</div>
<div class="contactType">email&nbsp;</div><div class="contactContent">&nbsp;&nbsp;&nbsp;<a href="mailto:liangyeni123@hotmail.com">liangyeni123@hotmail.com</a></div>
<div class="contactType">weibo&nbsp;</div><div class="contactContent">&nbsp;&nbsp;&nbsp;<a href="http://weibo.com/liangyeni" target="_blank" alt="[yawn] | by liangyeni" >http://weibo.com/liangyeni</a></div>


</div>


<div id="copyright">
[yawn] | by liangyeni © 2015. All Rights Reserved.
</div>


<div id="dots"></div>



<div id="maximage">
	
    <img src="__PUBLIC__/images1/bg_1.jpg" alt="" />
    <img src="__PUBLIC__/images1/bg_2.jpg" alt="" />
    <img src="__PUBLIC__/images1/bg_3.jpg" alt="" />
    <img src="__PUBLIC__/images1/bg_4.jpg" alt="" />

</div>
    

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41352738-1', 'liangyeni.com');
  ga('send', 'pageview');

</script>

<audio autoplay="" loop=""><source src="__PUBLIC__/music/fiction.mp3"></audio>

</body>
</html>