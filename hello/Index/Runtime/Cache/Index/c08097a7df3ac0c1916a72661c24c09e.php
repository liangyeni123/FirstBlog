<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>投稿给我 | design by liangyeni</title>
        <link rel="stylesheet" href="__PUBLIC__/2013style.css"/>
        <style>
            body{
                background:url("../images/ad_bg.png") #eeeeee;
            }
            input.text,input.title,.add-more{
                height:25px;
                padding:5px;
                width:220px;
                font-size:1.5em;
            }  
            input.text,input.title,textarea,.add-more{
                background:#ffffff;
                border:1px solid #808080;
                margin:0.5em 0;
            }
            input.text:focus,input.title:focus,textarea:focus{
                border-color:#f6c86f;
            }
            .err{
                color:#ff3333;
            }
        </style>
    </head>
    <body>
        <div class="top_header">
    <div class="nav">
        <span class="meiri_text"><a href="__GROUP__">回到首页</a></span>
    </div>

</div>
        <div id="article_show" style="width:700px;">
                              <div class="contact-form">
                     <div style="padding-bottom:10px; color: #808080;">
                    1 添加文章是匿名的，或者在最后你也可以附上自己名字。<br>
                    2 保持良好的文章格式：段落之间空一行，每段开头不空两个字，所有标点都是中文标点。<br>
                    3 关于博文投稿，原创与转载均欢迎，请注意标明文章分类。<br>
                    4 关于推荐投稿，若有图片，请投稿至liangyeni123@hotmail.com<br>
                </div>


                        <form method="post" action="<?php echo U('handle');?>">
                            <div class="title">标题</div>
                            <div>
                    <input type="text" class="title" name="title" value="" id="title" />
                        </div>


                           <div class="reg_item">文章</div>

                                <div>
                    <textarea class="title" style="width:100%; height:600px;font-size:14px;" name="content" /></textarea>
                </div>
                           <div>
                                <span><input type="submit" class="" value="给[我在这里]投稿"></span>
                          </div>
                        </form>
                    </div>
                <div class="clear"></div>       
              </div>
        </div>
</div>
</div>      
    
            <div class="footer_empty_box"></div>
<div id="footer">
        <div title="" style="float:right; font-size:13px;">
            [yawn] | by liangyeni © 2015. All Rights Reserved.
        </div>
    </div>
</div>
<!--统计代码-->

<!--ta-->


        </body>


    </html>