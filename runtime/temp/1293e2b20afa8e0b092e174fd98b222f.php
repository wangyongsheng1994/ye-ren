<?php /*a:1:{s:72:"D:\phpstudy\PHPTutorial\WWW\oa\application\admin\view\index\welcome.html";i:1524913975;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>我的桌面</title>
<style type="text/css">
#think_page_trace_open img,#think_page_trace_open div{ display: none!important; }
</style>
</head>
<body>
<div class="page-container">
	<p class="f-20 text-success">欢迎来到<span class="f-14">~~></span>OA</p>
	<p>登录次数：<?php echo htmlentities($data['number']); ?></p>
	<p>上次登录IP：<?php echo htmlentities(app('session')->get('oldlogip')); ?>上次登录时间：<?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric(app('session')->get('oldtime'))? strtotime(app('session')->get('oldtime')) : app('session')->get('oldtime'))); ?></p>
	<center>
	<div class="formControls col-xs-8 col-sm-9"><span id="mytime"></span></div>
	</center>
	<table class="table table-border table-bordered table-bg mt-20">
		<thead>
			<tr>
				<th colspan="2" scope="col">服务器信息</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th width="30%">服务器计算机名</th>
				<td><span id="lbServerName">http://127.0.0.1/</span></td>
			</tr>
			<tr>
				<td>服务器IP地址</td>
				<td><?php echo htmlentities($data['logip']); ?></td>
			</tr>
			<tr>
				<td>服务器域名</td>
				<td><?php echo htmlentities($data['domain']); ?></td>
			</tr>
			<tr>
				<td>服务器端口 </td>
				<td><?php echo htmlentities($data['port']); ?></td>
			</tr>
			<tr>
				<td>网站文档目录 </td>
				<td><?php echo htmlentities($data['document']); ?></td>
			</tr>
			<tr>
				<td>服务器当前时间 </td>
				<td><?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($data['newtime'])? strtotime($data['newtime']) : $data['newtime'])); ?></td>
			</tr>
			<tr>
				<td>服务器操作系统 </td>
				<td><?php echo htmlentities($data['pack']); ?></td>
			</tr>
			<tr>
				<td>剩余空间 </td>
				<td><?php echo htmlentities($data['space']); ?></td>
			</tr>
			<tr>
				<td>通信协议 </td>
				<td><?php echo htmlentities($data['protocol']); ?></td>
			</tr>
		</tbody>
	</table>
</div>
<footer class="footer mt-20">
	<div class="container">
		<p>wml</p>
	</div>
</footer>
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script> 
<!--此乃百度统计代码，请自行删除-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
<!--/此乃百度统计代码，请自行删除-->
function showTime(){
    nowtime=new Date();
    year=nowtime.getFullYear();
    month=nowtime.getMonth()+1;
    date=nowtime.getDate();
    document.getElementById("mytime").innerText=year+"年"+month+"月"+date+" "+nowtime.toLocaleTimeString();
}

setInterval("showTime()",1000);
</script>
</body>
</html>