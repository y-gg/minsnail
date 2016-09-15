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

	<style type="text/css">
		.w{
			color:white;
			font-size:20px;
		}
		.weather{
			background-color: rgba(0,0,0,0.7);
		}
		.tq{
			width:64px;
			height:64px;
			margin-left:15px;
		}
		.cloudy_day_night{
			width:64px;
			height:64px;
			margin-left:15px;
			background-size:64px 64px;
			background-image:url("/snail/Public/images/cloudy_day_night.png");
		}
		.partly-cloudy{
			background-image: none,url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgi…xNTcsNS44NTZsMi4zOTksMC40NDhMMjcuNzU0LDExLjAzNHoiLz4NCjwvZz4NCjwvc3ZnPg0K");

		}
		.isolated-thundershowers{
			background-image: none,url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgi…KCUM2MCwzOC4zNDgsNTguNjM0LDM2LjQ2MSw1Ni41OTIsMzUuNzQ5eiIvPg0KPC9zdmc+DQo=");
		}
		.fair{
			background-image: none,url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgi…1LjY4MiwzMi45MzIsMjAuNDE0LDI2LjM5OCwyMC40MTR6Ii8+DQo8L2c+DQo8L3N2Zz4NCg==");
		}
		.sunny{
			    background-image: none,url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgi…1Nyw2LjA1OGwyLjA3LDEuNDg1TDQ3LjQ1NSwxMi4yODZ6Ii8+DQo8L2c+DQo8L3N2Zz4NCg==");
		}
		.thunderstorms{
			    background-image: none,url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgi…zQzYwLjEyNiwzNC41MTQsNTguNTM4LDMyLjMsNTYuMTY5LDMxLjQ2NXoiLz4NCjwvc3ZnPg0K");
		}
		.tmp{
			font-size:100px;
		}
		.rowitem{
			margin-left:0px;
			margin-right:0px;
			text-align:center;
		}
		.rcrl-bd{
			display: block;
			height: 0;
			padding-bottom: 23.87%;
			background-size: 100% 100%;
			background-repeat: no-repeat;
			background-image:none,url("data:image/svg;base64,iVBORw0KGgoAAAANSUhEUgAAAicAAACDCAYAAABWQrsMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDowRDE5RDU1QkVBQTAxMUUyQkExNjk3MDM3QzQwNUUxRSIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDowRDE5RDU1Q0VBQTAxMUUyQkExNjk3MDM3QzQwNUUxRSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjBEMTlENTU5RUFBMDExRTJCQTE2OTcwMzdDNDA1RTFFIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjBEMTlENTVBRUFBMDExRTJCQTE2OTcwMzdDNDA1RTFFIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+Yy92xwAAGb9JREFUeNrs3QmY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");
		}
		.shitem{
			margin-bottom:15px;
		}
	</style>
	<div style="background:rgba(0,0,0,0.7);color:white;padding:15px;">
		
		<?php  $wther=$weather["HeWeather data service 3.0"][0]; $basic= $wther["basic"]; ?>
		<h3><?php echo $basic["city"];?></h3>
		<span><?php echo $basic["cnty"];?></span><span>  经纬度<?php echo $basic["lon"].','.$basic["lat"];?></span>
		<h4>更新时间 <?php echo $basic["update"]["loc"];?></h4>
		<?php
 $now=$wther["now"]; ?>
		<div class="row">
			<div class="
			<?php  switch($now["cond"]["code"]){ case 101:echo "sunny"; break; case 100:echo "cloudy_day_night"; break; case 109:echo "fair"; break; case 103:echo "partly-cloudy"; break; case 302:echo "isolated-thundershowers"; break; case 303:echo "thundershowers"; break; default: break; }?> col-md-3"></div>
			<div class="col-md-2 w">
				<h4><?php echo $now["cond"]["txt"];?></h4>
			</div>
			<div class="col-md-2 w">
				<?php echo date("l");?>
			</div>
		</div>
		<div class="row">
			<div class="tmp col-md-2"><?php echo $now["tmp"];?>&deg;</div>
			<div class="col-md-5" style="margin-top:100px;">
				<div class="row rowitem" style="border:1px solid white;">
					<div class="col-md-12">
						<div class="row" style="border-bottom:1px solid white;">实况天气</div>
						<div class="row">
							<?php $wind=$now["wind"];?>
							<div class="col-md-3">
								<div class="row">风速(Kmph)</div>
								<div class="row"><?php echo $wind["spd"];?></div>
							</div>
							<div class="col-md-3">
								<div class="row">风力等级</div>
								<div class="row"><?php echo $wind["sc"];?></div>
							</div>
							<div class="col-md-3">
								<div class="row">风向(角度)</div>
								<div class="row"><?php echo $wind["deg"];?></div>
							</div>
							<div class="col-md-3">
								<div class="row">风向(方向)</div>
								<div class="row"><?php echo $wind["dir"];?></div>
							</div>
						
						</div>
					</div>
				</div>
				<div class="row rowitem" style="border:1px solid white;">
					<div class="col-md-3" style="height:100%;">
						<div class="row">体感温度</div>
						<div class="row"><?php echo $now["fl"];?>&deg;</div>
					</div>
					
					<div class="col-md-3">
						<div class="row">降雨量(mm)</div>
						<div class="row"><?php echo $now["pcpn"];?></div>
					</div>
					<div class="col-md-2">
						<div class="row">湿度(%)</div>
						<div class="row"><?php echo $now["hum"];?></div>
					</div>
					<div class="col-md-2">
						<div class="row">气压</div>
						<div class="row"><?php echo $now["pres"];?></div>
					</div>
					<div class="col-md-2">
						<div class="row">能见度(km)</div>
						<div class="row"><?php echo $now["vis"];?></div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="aqi">
			<?php $aqi=$wther["aqi"]["city"];?>
			<h3>空气质量</h3>
			<div class="row rowitem" style="">
				<div class="col-md-1">
					<div class="row">空气质量指数</div>
					<div class="row"><?php echo $aqi["aqi"];?></div>
				</div>
				<div class="col-md-1">
					<div class="row">空气质量类别</div>
					<div class="row"><?php echo $aqi["qlty"];?></div>
				</div>
				<div class="col-md-1">
					<div class="row">PM2.5</div>
					<div class="row"><?php echo $aqi["pm25"];?></div>
				</div>
				<div class="col-md-1">
					<div class="row">PM10</div>
					<div class="row"><?php echo $aqi["pm10"];?></div>
				</div>
				<div class="col-md-1">
					<div class="row">二氧化硫</div>
					<div class="row"><?php echo $aqi["so2"];?></div>
				</div>
				<div class="col-md-1">
					<div class="row">二氧化氮</div>
					<div class="row"><?php echo $aqi["no2"];?></div>
				</div>
				<div class="col-md-1">
					<div class="row">一氧化碳</div>
					<div class="row"><?php echo $aqi["co"];?></div>
				</div>
				<div class="col-md-1">
					<div class="row">臭氧</div>
					<div class="row"><?php echo $aqi["o3"];?></div>
				</div>
			</div>
		</div>
		<div class="hourly_forecast">
			<h3>每小时天气预报</h3>
			<?php $hourly_forecast=$wther["hourly_forecast"];?>
			<div class="row rowitem" style="">
				<?php foreach($hourly_forecast as $v){?>
				<div class="col-md-2" style="border:1px solid white;">
					<div class="row" style="font-size:24px;"><?php echo $v["tmp"];?>&deg;</div>
					<div class="row">
						<div class="col-md-4">
							<div class="row">降水概率</div>
							<div class="row"><?php echo $v["pop"];?>%</div>
						</div>
						<div class="col-md-4">
							<div class="row">湿度(%)</div>
							<div class="row"><?php echo $v["hum"];?></div>
						</div>
						<div class="col-md-4">
							<div class="row">风力等级</div>
							<div class="row"><?php echo $v["wind"]["sc"];?></div>
						</div>
					</div>
					<div class="row"><?php echo substr($v["date"],11);?></div>
				</div>
				<?php }?>
			</div>
		</div>
		<div class="suggestion">
			<h3>生活指数</h3>
			<?php $suggestion=$wther["suggestion"];?>
			<div class="row shitem">
				<div class="col-md-2">生活指数</div>
				<?php $sugg=$suggestion["comf"];?>
				<div class="col-md-6">
					<div class="row"><?php echo $sugg["brf"];?></div>
					<div class="row"><?php echo $sugg["txt"];?></div>
				</div>
			</div>
			<div class="row shitem">
				<div class="col-md-2">穿衣指数</div>
				<?php $sugg=$suggestion["drsg"];?>
				<div class="col-md-6">
					<div class="row"><?php echo $sugg["brf"];?></div>
					<div class="row"><?php echo $sugg["txt"];?></div>
				</div>
			</div>
			<div class="row shitem">
				<div class="col-md-2">感冒指数</div>
				<?php $sugg=$suggestion["flu"];?>
				<div class="col-md-8">
					<div class="row"><?php echo $sugg["brf"];?></div>
					<div class="row"><?php echo $sugg["txt"];?></div>
				</div>
			</div>
			<div class="row shitem">
				<div class="col-md-2">运动指数</div>
				<?php $sugg=$suggestion["sport"];?>
				<div class="col-md-8">
					<div class="row"><?php echo $sugg["brf"];?></div>
					<div class="row"><?php echo $sugg["txt"];?></div>
				</div>
			</div>
			<div class="row shitem">
				<div class="col-md-2">紫外线指数</div>
				<?php $sugg=$suggestion["uv"];?>
				<div class="col-md-8">
					<div class="row"><?php echo $sugg["brf"];?></div>
					<div class="row"><?php echo $sugg["txt"];?></div>
				</div>
			</div>
			<div class="row shitem">
				<div class="col-md-2">洗车指数</div>
				<?php $sugg=$suggestion["cw"];?>
				<div class="col-md-8">
					<div class="row"><?php echo $sugg["brf"];?></div>
					<div class="row"><?php echo $sugg["txt"];?></div>
				</div>
			</div>
			<div class="row shitem">
				<div class="col-md-2">旅游指数</div>
				<?php $sugg=$suggestion["trav"];?>
				<div class="col-md-8">
					<div class="row"><?php echo $sugg["brf"];?></div>
					<div class="row"><?php echo $sugg["txt"];?></div>
				</div>
			</div>
			
		</div>
		<div class="daily_forecast">
			<h3>天气预报</h3>
			<?php  $daily=$wther["daily_forecast"]; foreach($daily as $v){ ?>
			<div class="row shitem">
				<div class="col-md-1"><?php echo $v["date"];?></div>
				<div class="col-md-11">
					<div class="col-md-1">
						<div class="row">温度</div>
						<div class="row"><?php echo $v["tmp"]["min"].'~'.$v["tmp"]["max"];?>&deg;</div>
					</div>
					<div class="col-md-1">
						<div class="row">白天</div>
						<div class="row"><?php echo $v["cond"]["txt_d"];?></div>
					</div>
					<div class="col-md-1">
						<div class="row">夜间</div>
						<div class="row"><?php echo $v["cond"]["txt_n"];?></div>
					</div>
					<div class="col-md-1">
						<div class="row">降雨量(mm)</div>
						<div class="row"><?php echo $v["pcpn"];?></div>
					</div>
					<div class="col-md-1">
						<div class="row">降水概率</div>
						<div class="row"><?php echo $v["pop"];?>%</div>
					</div>
					<div class="col-md-1">
						<div class="row">湿度(%)</div>
						<div class="row"><?php echo $v["hum"];?></div>
					</div>
					<div class="col-md-1">
						<div class="row">能见度(km)</div>
						<div class="row"><?php echo $v["vis"];?></div>
					</div>
					<div class="col-md-2">
						<div class="row">日出日落</div>
						<div class="row"><?php echo $v["astro"]["sr"].'AM,'.$v["astro"]["ss"].'PM';?></div>
					</div>
					<div class="col-md-1">
						<div class="row">风力等级</div>
						<div class="row"><?php echo $v["wind"]["sc"];?></div>
					</div>
					<div class="col-md-1">
						<div class="row">风向</div>
						<div class="row"><?php echo $v["wind"]["dir"];?></div>
					</div>
				</div>
			</div>
			<?php }?>
		</div>
		<div class="alarms">
			<?php  $alarms=$wther["alarms"]; if(!empty($alarms)){ ?>
			<h3>灾害预警</h3>
			<div class="row"><?php echo $alarms["title"];?></div>
			<div class="row">
				<div class="col-md-1">类型</div>
				<div class="col-md-5"><?php echo $alarms["type"];?></div>
			</div>
			<div class="row">
				<div class="col-md-1">级别</div>
				<div class="col-md-5"><?php echo $alarms["level"];?></div>
			</div>
			<div class="row">
				<div class="col-md-1">状态</div>
				<div class="col-md-5"><?php echo $alarms["stat"];?></div>
			</div>
			<div class="row">
				<div class="col-md-1">描述</div>
				<div class="col-md-5"><?php echo $alarms["txt"];?></div>
			</div>
			<?php }?>
		</div>
		<div class="rcrl">
			<h3>日出日落</h3>
			<?php $rcrl=$wther["daily_forecast"][0]["astro"];?>
			<div class="rcrl-bd" style="position:relative;">
				<div class="row" style="width:100%;position:absolute;bottom:-10px;">
					<div class="col-md-6"><span style="margin-left:10%"><?php echo $rcrl["sr"];?>AM</span></div>
					<div class="col-md-6"><span style="margin-left:60%"><?php echo $rcrl["ss"];?>PM</span></div>
				</div>
			</div>
		</div>
		
	</div>
	<div class="ali" style="height:300px;">
		<script type="text/javascript">
			document.write('<a style="display:none!important" id="tanx-a-mm_112660067_13150967_51768244"></a>');
			tanx_s = document.createElement("script");
			tanx_s.type = "text/javascript";
			tanx_s.charset = "gbk";
			tanx_s.id = "tanx-s-mm_112660067_13150967_51768244";
			tanx_s.async = true;
			tanx_s.src = "http://p.tanx.com/ex?i=mm_112660067_13150967_51768244";
			tanx_h = document.getElementsByTagName("head")[0];
			if(tanx_h)tanx_h.insertBefore(tanx_s,tanx_h.firstChild);
		</script>
	</div>
<?php  ?>
<?php echo ($ip); ?>

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