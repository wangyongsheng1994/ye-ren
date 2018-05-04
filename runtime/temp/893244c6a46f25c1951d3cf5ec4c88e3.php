<?php /*a:3:{s:73:"D:\phpstudy\PHPTutorial\WWW\oa\application\admin\view\project\create.html";i:1525316228;s:72:"D:\phpstudy\PHPTutorial\WWW\oa\application\admin\view\public\header.html";i:1524816903;s:72:"D:\phpstudy\PHPTutorial\WWW\oa\application\admin\view\public\footer.html";i:1524816895;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5shiv.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/h-ui.admin/css/style.css" />

<link rel="stylesheet" type="text/css" href="/static/admin/static/ali/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/ali/iconfont.eot" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/ali/iconfont.svg" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/ali/iconfont.ttf" />
<link rel="stylesheet" type="text/css" href="/static/admin/static/ali/iconfont.woff" />
<!--[if IE 6]>
<script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<link href="/static/admin/lib/lightbox2/2.8.1/css/lightbox.css" rel="stylesheet" type="text/css" >
<title>项目列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 项目中心 <span class="c-gray en">&gt;</span> 项目管理 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="cl pd-5 bg-1 bk-gray mt-10">
		<!-- <span class="l">
			<a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a>
			<a href="javascript:;" onclick=member_add('添加项目','<?php echo url('add'); ?>','1100','800') class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加项目</a>
		</span> -->
		<span class="r">共有数据：<strong><?php echo htmlentities($count); ?></strong> 条</span>
	</div>
	<div class="mt-20">
	<table class="table table-border table-bordered table-hover table-bg table-sort">
    <thead>
      <tr class="text-c">
        <th width="20">ID</th>
        <th width="80">项目标题</th>
        <th width="100">项目内容</th>
        <th width="80">项目组长</th>
        <th width="120">项目成员</th>
        <th width="80">发起人</th>
        <th width="80">发起时间</th>
      </tr>
    </thead>
    <tbody>
	<?php if(is_array($create_name) || $create_name instanceof \think\Collection || $create_name instanceof \think\Paginator): if( count($create_name)==0 ) : echo "" ;else: foreach($create_name as $key=>$vo): ?>
      <tr class="text-c">
        <td><?php echo htmlentities($vo['id']); ?></td>
        <td><?php echo htmlentities($vo['title']); ?></td>
        <td><?php echo mb_substr($vo['content'],0,18); ?>... ...<u style="cursor:pointer" class="text-primary" onclick=member_show('内容查看','<?php echo url('detail',array('id'=>$vo['id'])); ?>','<?php echo htmlentities($vo['id']); ?>','800','600')>点我查看</u></td>
        <td><?php echo htmlentities($vo['item_vip']); ?></td>
        <td><?php echo htmlentities($vo['item_group']); ?></td>
        <td><?php echo htmlentities($vo['create_name']); ?></td>
        <td><?php echo htmlentities(date( "Y-m-d H:i:s",!is_numeric($vo['time'])? strtotime($vo['time']) : $vo['time'])); ?></td>
      </tr>
	<?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
  </table>
	</div>
</div>
<!--_footer 作为公共模版分离出去-->
<!--/_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/static/admin/static/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="/static/admin/static/ali/iconfont.js"></script>
<!--/_footer 作为公共模版分离出去-->
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<!-- 图片 -->
<script type="text/javascript" src="/static/admin/lib/lightbox2/2.8.1/js/lightbox.min.js"></script>
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<!-- 图片 -->
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
$(function(){
	$('.table-sort').dataTable({
		// "aaSorting": [[ 1, "desc" ]],//默认第几个排序
		// "bStateSave": true,//状态保存
		// "aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		  // {"orderable":false,"aTargets":[0,3]}// 制定列不参与排序
		// ]
	});
	
});
/*项目-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*项目-历史*/
function member_send(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*项目-查看*/
function member_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*项目-编辑*/
function member_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*密码-修改*/
function change_password(title,url,id,w,h){
	layer_show(title,url,w,h);	
}
/*项目-删除*/
function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		var url = "<?php echo url('delete'); ?>";
		// alert(id);
		$.post(url,{id:id},function(data){
			if(data == "200"){
				$(obj).parents("tr").remove();
				layer.msg('已删除!',{icon:1,time:1000});
			}else{
				layer.msg('删除失败!',{icon:1,time:1300});
			}
			// alert(data);
		});
	});
}
/*管理员-停用*/
function admin_stop(obj,id){
	layer.confirm('确认要启标为已读？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		var url="<?php echo url('start'); ?>";
			$.post(url,{id:id},function(data){
				$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="已读" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
				$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已读</span>');
				$(obj).remove();
				layer.msg('已标记!',{icon: 5,time:1000});
		});
	});
}
			

/*管理员-启用*/
function admin_start(obj,id){
	layer.confirm('确认要启标为未读？',function(index){
		//此处请求后台程序，下方是成功后的前台处理……
		var url="<?php echo url('stop'); ?>";
		$.post(url,{id:id},function(data){
			$(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="未读" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
			$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">未读</span>');
			$(obj).remove();
			layer.msg('已标记!', {icon: 6,time:1000});
		});
	});
}

/*批量-删除*/
function datadel(){
  layer.confirm('确认要删除吗？',function(index){
    arr=[];
    // 便利出来所有的复选框
    $(":checkbox").each(function(){
      //获取选中数据的id
      if($(this).prop("checked")){
        id=$(this).val();
        arr.push(id);
      }
    })
    var url="<?php echo url('alldel'); ?>";
    $.post(url,{arr:arr},function(data){
      // alert(data);
     if(data=="success"){
        for(var i=0;i<arr.length;i++){
	        //根据id获取input tr 
	        $("input[value='"+arr[i]+"']").parents("tr").remove();
      	}
      layer.msg('已删除!',{icon:1,time:1000});
     }
    })
  });
}
</script> 
</body>
</html>