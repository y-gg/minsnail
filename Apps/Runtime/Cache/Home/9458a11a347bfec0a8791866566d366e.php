<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if gte IE 9]><!-->
	<script type="text/javascript" src="/snail/Public/jquery/jquery-2.2.1.min.js"></script>
	<!--<![endif]-->
	<!--IE8只能支持jQuery1.9-->
    <!--[if lte IE 8]>
    <script type="text/javascript" src="/snail/Public/jquery/jquery-1.9.1.min.js"></script>
    <![endif]-->
    <script src="/snail/Public/bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
	<link href="/snail/Public/bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet">
	<title>minsani,blog,weather</title>
</head>
<body>
<div class="container">
	<div style="text-align:right;">
		<div class="bdsharebuttonbox" style="float:right;"><a href="#" class="bds_more" data-cmd="more">分享到：</a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone">QQ空间</a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina">新浪微博</a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq">腾讯微博</a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin">微信</a></div>
	</div>
	<div class="header">
		<h1>Minsnail.<strong style="color:green;">cc</strong></h1>
	</div>
	
</div>

<div class="container" style="margin-top:10px;margin-bottom:10px;">
	<div class="btn-group btn-group-lg">
		<a type="button" class="btn btn-default" href="/snail/index.php/Home/Index/index">Home</a>
		<a type="button" class="btn btn-default" href="/snail/index.php/Home/Index/news">News</a>
		<a type="button" class="btn btn-default" href="/snail/index.php/Home/Index/moves">Moves</a>
		<a type="button" class="btn btn-default" href="/snail/index.php/Home/Index/weather">Weather</a>
		<a type="button" class="btn btn-default" href="/snail/Blog">Blog</a>
	</div>
</div>
<div class="container">
<div style="border-top: 4px solid #ef2d36;"></div>

	<div style="margin-top:20px;">
		<form class="form-horizontal" role="form" action="/snail/index.php/Home/Index/addmove" method="get">
		   <div class="form-group">
			  <label for="firstname" class="col-sm-2 control-label">电影名</label>
			  <div class="col-sm-6">
				 <input type="text" class="form-control" id="firstname" 
					placeholder="中文名">
			  </div>
		   </div>
		   <div class="form-group">
			  <label for="lastname" class="col-sm-2 control-label">姓</label>
			  <div class="col-sm-6">
				 <input type="text" class="form-control" id="lastname" 
					placeholder="请输入姓">
			  </div>
		   </div>
		   <div class="form-group">
			  <div class="col-sm-offset-2 col-sm-10">
				 <button type="submit" class="btn btn-default">提交</button>
			  </div>
		   </div>
		</form>
	</div>

</div>
<div class="container">
  
  <footer class="footer" style="text-align:center;color:#9A9A9A;">
	Copyright &copy; 2016 备案号: 浙ICP备15007371号-2
  </footer>
</div>

<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdUrl" :window.location.href,"bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"2","bdSize":"16"},"share":{"bdSize":16}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75307720-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>