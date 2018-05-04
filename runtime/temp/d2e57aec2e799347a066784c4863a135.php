<?php /*a:3:{s:69:"D:\phpstudy\PHPTutorial\WWW\oa\application\admin\view\user\index.html";i:1525401669;s:72:"D:\phpstudy\PHPTutorial\WWW\oa\application\admin\view\public\header.html";i:1524816903;s:72:"D:\phpstudy\PHPTutorial\WWW\oa\application\admin\view\public\footer.html";i:1524816895;}*/ ?>
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
<title>会员列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 会员管理 <span class="c-gray en">&gt;</span> 会员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
  <div class="text-c">
    <input type="text" class="input-text" style="width:250px" placeholder="输入会员名称" id="" name="">
    <button type="submit" class="btn btn-success" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜用户</button>
  </div>
  <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a href="javascript:;" onclick="admin_add('添加会员','<?php echo url('add'); ?>','1000','800')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加会员</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
  <table class="table table-border table-bordered table-bg">
    <thead>
      <tr>
        <th scope="col" colspan="9">员工列表</th>
      </tr>
      <tr class="text-c">
        <th width="25"><input type="checkbox" name="" value=""></th>
        <th width="40">ID</th>
        <th width="100">用户名</th>
        <th width="100">角色</th>
        <th width="100">手机</th>
        <th width="100">邮箱</th>
        <th width="90">加入时间</th>
        <th width="80">是否已启用</th>
        <th width="100">操作</th>
      </tr>
    </thead>
    <tbody>
      <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): if( count($data)==0 ) : echo "" ;else: foreach($data as $key=>$row): ?>
      <tr class="text-c">
        <td><input type="checkbox" value="<?php echo htmlentities($row['id']); ?>" name=""></td>
        <td><?php echo htmlentities($row['id']); ?></td>
        <td><?php echo htmlentities($row['username']); ?></td>
        <td><?php echo htmlentities($row['role']['name']); ?></td>
        <td><?php echo htmlentities($row['phone']); ?></td>
        <td><?php echo htmlentities($row['email']); ?></td>
        <td><?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($row['time'])? strtotime($row['time']) : $row['time'])); ?></td>
        <td class="td-status"><?php if($row['status'] == 1): ?><span class="label label-success radius">已启用</span><?php else: ?><span class="label radius">已停用</span><?php endif; ?></td>

        <td class="td-manage">
          <?php if($row['status'] == 1): ?>
            <a style="text-decoration:none" onClick="admin_stop(this,'<?php echo htmlentities($row['id']); ?>')" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a><?php else: ?><a style="text-decoration:none" onClick="admin_start(this,'<?php echo htmlentities($row['id']); ?>')" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe615;</i></a>
          <?php endif; ?>
          <a title="编辑" href="javascript:;" onclick=admin_edit('会员编辑',"<?php echo url('edit',array('id'=>$row['id'])); ?>","<?php echo htmlentities($row['id']); ?>",'900','500') class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a>
          <a title="删除" href="javascript:;" onclick="admin_del(this,'<?php echo htmlentities($row['id']); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a>
          <a title="权限" href="javascript:;" onclick=admin_edit('角色分配',"<?php echo url('role',array('id'=>$row['id'])); ?>",'<?php echo htmlentities($row['id']); ?>','900','800') class="ml-5" style="text-decoration:none"><i class="iconfont">&#xe616;</i></a>
        </td>
      </tr>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
  </table>
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
<script type="text/javascript" src="/static/admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/static/admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/static/admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*
  参数解释：
  title 标题
  url   请求的url
  id    需要操作的数据id
  w   弹出层宽度（缺省调默认值）
  h   弹出层高度（缺省调默认值）
*/
/*会员-增加*/
function admin_add(title,url,w,h){
  layer_show(title,url,w,h);
}
/*会员-删除*/
function admin_del(obj,id){
  layer.confirm('确认要删除吗？',function(index){
    var url="<?php echo url("delete"); ?>";
    $.post(url,{id:id},function(data){
      // alert(data);
      if(data==200){
        $(obj).parents("tr").remove();
        layer.msg('已删除!',{icon:1,time:1000});
      }else{
        layer.msg('删除失败!',{icon:1,time:1000});
      }
    });
  });
}

/*会员-编辑*/
function admin_edit(title,url,id,w,h){
  layer_show(title,url,w,h);
}
/*会员-停用*/
function admin_stop(obj,id){
  layer.confirm('确认要停用吗？',function(index){
    //此处请求后台程序，下方是成功后的前台处理……
     var url="<?php echo url('stop'); ?>";
    $.post(url,{id:id},function(data){
      // alert(data);
      if(data == 1){
        $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_start(this,id)" href="javascript:;" title="启用" style="text-decoration:none"><i class="Hui-iconfont">&#xe615;</i></a>');
        $(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">已禁用</span>');
        $(obj).remove();
        layer.msg('已停用!',{icon: 5,time:1000});
      }else{
        layer.msg('停用失败!',{icon: 5,time:1000});
      }
    });
  });
}

/*会员-启用*/
function admin_start(obj,id){
  layer.confirm('确认要启用吗？',function(index){
    //此处请求后台程序，下方是成功后的前台处理……
    var url="<?php echo url('start'); ?>";
    $.post(url,{id:id},function(data){
      if(data == 1){
        $(obj).parents("tr").find(".td-manage").prepend('<a onClick="admin_stop(this,id)" href="javascript:;" title="停用" style="text-decoration:none"><i class="Hui-iconfont">&#xe631;</i></a>');
        $(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
        $(obj).remove();
        layer.msg('已启用!', {icon: 6,time:1000});
      }else{
        layer.msg('启用失败!', {icon: 6,time:1000});
      }
    })
    
  });
}
</script>
</body>
</html>