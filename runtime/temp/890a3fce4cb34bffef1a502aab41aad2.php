<?php /*a:3:{s:67:"D:\phpstudy\PHPTutorial\WWW\oa\application\admin\view\seal\add.html";i:1524908032;s:72:"D:\phpstudy\PHPTutorial\WWW\oa\application\admin\view\public\header.html";i:1524816903;s:72:"D:\phpstudy\PHPTutorial\WWW\oa\application\admin\view\public\footer.html";i:1524816895;}*/ ?>
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
<title>添加信息</title>
<meta name="keywords" content="">
<meta name="description" content="">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>收到日期：</label>
		<div class="formControls col-xs-8 col-sm-2">
			<input type="date" class="input-text" placeholder="" id="receive_time" name="receive_time">
		</div>
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>启用日期：</label>
		<div class="formControls col-xs-6 col-sm-2">
			<input type="date" class="input-text" placeholder="" id="use_time" name="use_time">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>用印部门：</label>
		<div class="formControls col-xs-5 col-sm-6">
				<span class="select-box">
					<select class="select" size="1" name="role_id">
						<option value="0">---请选择---</option>
						<?php if(is_array($role) || $role instanceof \think\Collection || $role instanceof \think\Paginator): if( count($role)==0 ) : echo "" ;else: foreach($role as $key=>$vo): ?>
						<option value="<?php echo htmlentities($vo['id']); ?>"><?php echo str_repeat('|——',$vo['level']); ?><?php echo htmlentities($vo['name']); ?></option>
						<?php endforeach; endif; else: echo "" ;endif; ?>
					</select>
				</span>
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>印章类型：</label>
		<div class="formControls col-xs-5 col-sm-6">
				<span class="select-box">
					<select class="select" size="1" name="seal_type">
						<option value="0">---请选择---</option>
						<option value="公章">---公章---</option>
						<option value="法人章">---法人章---</option>
						<option value="财务章">---财务章---</option>
						<option value="合同章">---合同章---</option>
						<option value="其他">---其他---</option>
					</select>
				</span>
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>申请理由：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" autocomplete="off"  placeholder="申请理由" id="result" name="result">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>使用范围：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="" placeholder="" id="scope" name="scope">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>印章名称：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" placeholder="" name="seal_name" id="seal_name">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>枚数：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" placeholder="请输入数字" onkeyup="value=value.replace(/[^\d]/g,'')" name="seal_num" id="seal_num">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>盖章内容概要：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" placeholder="" name="seal_descr" id="seal_descr">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>份数：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" placeholder="请输入数字" onkeyup="value=value.replace(/[^\d]/g,'')" name="number" id="number">
		</div>
	</div>

	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">用印人：</label>
		<div class="formControls col-xs-5 col-sm-2">
			<span class="select-box">
				<select class="select" size="1" onchange="gradeChanges()" id="dutyIds" name="roles">
					<option value="0">---请选择---</option>
					<?php if(is_array($personal) || $personal instanceof \think\Collection || $personal instanceof \think\Paginator): if( count($personal)==0 ) : echo "" ;else: foreach($personal as $key=>$vo): ?>
					<option value="<?php echo htmlentities($vo['id']); ?>"><?php echo str_repeat('|-',$vo['level']); ?><?php echo htmlentities($vo['name']); ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</span>
		</div>
		<div class="formControls col-xs-5 col-sm-2" id="userSelects"></div>
	</div>
		
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">批准人：</label>
		<div class="formControls col-xs-5 col-sm-2">
			<span class="select-box">
				<select class="select" size="1" onchange="gradeChange()" id="dutyId" name="role">
					<option value="0">---请选择---</option>
					<?php if(is_array($personal) || $personal instanceof \think\Collection || $personal instanceof \think\Paginator): if( count($personal)==0 ) : echo "" ;else: foreach($personal as $key=>$vo): ?>
					<option value="<?php echo htmlentities($vo['id']); ?>"><?php echo str_repeat('|-',$vo['level']); ?><?php echo htmlentities($vo['name']); ?></option>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</select>
			</span>
		</div>
		<div class="formControls col-xs-5 col-sm-2" id="userSelect"></div>
	</div>
	
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>备注：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" placeholder="" name="beizhu" id="beizhu">
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
			<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
		</div>
	</div>
	</form>
</article>

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
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/static/admin/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").validate({
		rules:{
			receive_time:{
				required:true,
			},
			use_time:{
				required:true,
			},
			role_id:{
				required:true,
			},
			result:{
				required:true,	
			},
			scope:{
				required:true,
			},
			seal_name:{
				required:true,
			},
			seal_num:{
				required:true,
			},
			seal_descr:{
				required:true,
			},
			number:{
				required:true,
			},
			seal_type:{
				required:true,
			},
			seal_use_name:{
				required:true,
			},
			seal_roval_name:{
				required:true,
			}
			
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
            $(form).ajaxSubmit({
                type: 'post',
                url: "<?php echo url('insert'); ?>" ,
                success: function(data){
		                layer.msg(data,{icon:1,time:1500},function(){
		                    parent.window.location.href="<?php echo url('index'); ?>";
		                    var index=parent.layer.getFrameIndex(window.name);
		                    parent.layer.close(index);
		                });	
                	// alert(data);
                },
                error: function(XmlHttpRequest, textStatus, errorThrown){
                    layer.msg('很遗憾!添加失败',{icon:1,time:1000});
                }
            });
        }
	});
});
/*用印人*/
function gradeChanges(){
	//var objS = document.getElementById("dutyId");
	var options=$("#dutyIds option:selected");
	var id = options.val();
	// alert(id);
	$.post("<?php echo url('add'); ?>",{id:id},function(data){
        // alert(data);
        var html ='',option ='';
        for (var i = 0 ; i < data.length; i++) {
        	option +='<option value="'+data[i].id+'">'+data[i].username+'</option>';

        }
        html += '<span class="select-box">'+
        			'<select class="select" size="1" name="seal_use_name">'+
        			'<option value="0">---请选择---</option>'+
        			option+
        			'</select>'+
        			'</span>';
        
        $("#userSelects").html(html);
	})
}

/*批准人*/
function gradeChange(){
	//var objS = document.getElementById("dutyId");
	var options=$("#dutyId option:selected");
	var id = options.val();
	// alert(id);
	$.post("<?php echo url('add'); ?>",{id:id},function(data){
        // alert(data);
        var html ='',option ='';
        for (var i = 0 ; i < data.length; i++) {
        	option +='<option value="'+data[i].id+'">'+data[i].username+'</option>';

        }
        html += '<span class="select-box">'+
        			'<select class="select" size="1" name="seal_roval_name">'+
        			'<option value="0">---请选择---</option>'+
        			option+
        			'</select>'+
        			'</span>';
        
        $("#userSelect").html(html);
	})
}

</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>