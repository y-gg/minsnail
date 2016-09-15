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

	<div>
		<style type="text/css">
			#carousel{
				margin:0 auto;
				padding:20px;
				width:920px;
			}
			#move-title a{
				cursor:pointer;
			}
			.col-md-3{
				padding-bottom:5px;
			}
		</style>
		<div id="move-title">
			<div>
				<script type="text/javascript">
					document.write('<a style="display:none!important" id="tanx-a-mm_112660067_13150967_53424904"></a>');
					tanx_s = document.createElement("script");
					tanx_s.type = "text/javascript";
					tanx_s.charset = "gbk";
					tanx_s.id = "tanx-s-mm_112660067_13150967_53424904";
					tanx_s.async = true;
					tanx_s.src = "http://p.tanx.com/ex?i=mm_112660067_13150967_53424904";
					tanx_h = document.getElementsByTagName("head")[0];
					if(tanx_h)tanx_h.insertBefore(tanx_s,tanx_h.firstChild);
				</script>
			</div>
			<div class="row">
				<div class="col-md-3">
					<h4>影片类型</h4>
					<div class="row">
						<div class="col-md-3"><a>喜剧</a></div>
						<div class="col-md-3"><a>音乐</a></div>
						<div class="col-md-3"><a>冒险</a></div>
						<div class="col-md-3"><a>剧情</a></div>
						<div class="col-md-3"><a>惊悚</a></div>
						<div class="col-md-3"><a>悬疑</a></div>
						<div class="col-md-3"><a>动作</a></div>
						<div class="col-md-3"><a>爱情</a></div>
						<div class="col-md-3"><a>家庭</a></div>
						<div class="col-md-3"><a>奇幻</a></div>
						<div class="col-md-3"><a>动画</a></div>
						<div class="col-md-3"><a>犯罪</a></div>
						<div class="col-md-3"><a>恐怖</a></div>
						<div class="col-md-3"><a>科幻</a></div>
						<div class="col-md-3"><a>记录片</a></div>
						<div class="col-md-3"><a>历史</a></div>
						<div class="col-md-3"><a>战争</a></div>
						<div class="col-md-3"><a>短片</a></div>
						<div class="col-md-3"><a>古装</a></div>
						<div class="col-md-3"><a>歌舞</a></div>
						<div class="col-md-3"><a>伦理</a></div>
						<div class="col-md-3"><a>传记</a></div>
						<div class="col-md-3"><a>西部</a></div>
						<div class="col-md-3"><a>武侠</a></div>
						<div class="col-md-3"><a>微电影</a></div>
					</div>
				</div>
				<div class="col-md-9">
					<div id="myCarousel" class="carousel slide">
						<!-- 轮播（Carousel）指标 -->
					   <ol class="carousel-indicators">
						  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						  <li data-target="#myCarousel" data-slide-to="1"></li>
						  <li data-target="#myCarousel" data-slide-to="2"></li>
					   </ol>
					   <!-- 轮播（Carousel）项目 -->
					   <div class="carousel-inner">
						  <div class="item active">
							 <img class="img-thumbnail" src="http://i.blu-raydisc.tv/images/photos/A_10.jpg" alt="First slide">
						  </div>
						  <div class="item">
							 <img class="img-thumbnail" src="http://i.blu-raydisc.tv/images/photos/A_12.jpg" alt="Second slide">
						  </div>
						  <div class="item">
							 <img class="img-thumbnail" src="http://i.blu-raydisc.tv/images/photos/A_11.jpg" alt="Third slide">
						  </div>
					   </div>
					   <!-- 轮播（Carousel）导航 -->
					   <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					   <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9" style="text-align:center;">
					<?php if(empty($moves["id"])){foreach($moves as $move){?>
					<div class="col-md-3" style="text-align:center;">
						<a href="/snail/index.php/Home/Index/moves/film/<?php echo $move["id"];?>"><img class="img-thumbnail" src="<?php echo $move["film_pic"];?>"></img></a>
						<h4><a href="/snail/index.php/Home/Index/moves/film/<?php echo $move["id"];?>"><?php echo $move["film_name_zh"];?></a></h4>
					</div>
					<?php }}?>
					<?php if(!empty($moves["id"])){?>
						<div style="text-align:left;">
							<h2><?php echo $moves["film_name_zh"];?></h2>
							<div class="">分类：<?php echo $moves["film_category"];?></div>
							<div class="">国家：<?php echo $moves["film_country"];?></div>
							<div class="">发行日期：<?php echo $moves["film_issue_date"];?></div>
							<div class="">片长：<?php echo $moves["film_duration"];?></div>
							<img class="img-thumbnail" src="<?php echo $moves["film_pic_bg"];?>"></img>
							<div class="">英文名：<?php echo $moves["film_name_en"];?></div>
							<div class="">中文名：<?php echo $moves["film_name_zh"];?></div>
							<div class="">国家：<?php echo $moves["film_country"];?></div>
							<div class="">语言：<?php echo $moves["film_lang"];?></div>
							<div class="">文件格式：<?php echo $moves["film_format"];?></div>
							<div class="">视频尺寸：<?php echo $moves["film_size"];?></div>
							<div class="">清晰：<?php echo $moves["film_clear"];?></div>
							<div class="">文件大小：<?php echo $moves["film_file_size"];?></div>
							<div class=""><strong>资源下载</strong></div>
							<div class="">百度网盘BT资源：<a target="__blank" href="<?php echo $moves["film_source"];?>"><?php echo $moves["film_name_zh"];?> </a> 提取码:1phu</div>
						</div>
					<?php }?>
				</div>
				<div class="col-md-3">
					
				</div>
				
			</div>
			
		</div>
		<div style="float:left;">
			<script type="text/javascript">
			var sogou_ad_id=576375;
			var sogou_ad_height=200;
			var sogou_ad_width=500;
			</script>
			<script type='text/javascript' src='http://images.sohu.com/cs/jsfile/js/c.js'></script>
		</div>
		<div style="float:right;">
			<script type="text/javascript">
				document.write('<a style="display:none!important" id="tanx-a-mm_112660067_13150967_53426812"></a>');
				tanx_s = document.createElement("script");
				tanx_s.type = "text/javascript";
				tanx_s.charset = "gbk";
				tanx_s.id = "tanx-s-mm_112660067_13150967_53426812";
				tanx_s.async = true;
				tanx_s.src = "http://p.tanx.com/ex?i=mm_112660067_13150967_53426812";
				tanx_h = document.getElementsByTagName("head")[0];
				if(tanx_h)tanx_h.insertBefore(tanx_s,tanx_h.firstChild);
			</script>
		</div>
		<div style="clear:both;"></div>
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