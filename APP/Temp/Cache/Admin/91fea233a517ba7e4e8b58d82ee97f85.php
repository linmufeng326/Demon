<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<title>Archon Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Loading Bootstrap -->
<link href="/Demon/Public/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Loading Stylesheets -->
<link href="/Demon/Public/bootstrap/style/demo.css" rel="stylesheet">
<link href="/Demon/Public/bootstrap/style/archon.css" rel="stylesheet">
<link href="/Demon/Public/bootstrap/style/responsive.css" rel="stylesheet">


<!-- Loading Custom Stylesheets -->
<link href="/Demon/Public/bootstrap/style/custom.css" rel="stylesheet">
<link href="/Demon/Public/bootstrap/style/css.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.ico">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<![endif]-->
</head>

<body>
<div class="frame">

  <div class="sidebar">
    <div class="wrapper"> 
      
      <!-- Replace the src of the image with your logo --> 
      <a href="index.html" class="logo"><img src="/Demon/Public/bootstrap/images/logo.png" alt="Archon Admin" /></a>
      <ul class="nav  nav-list">
        
        <!-- sidebar input search box -->
        <li class="nav-search">
          <div class="form-group">
            <input type="text" class="form-control nav-search" placeholder="Search through site" />
            <span class="input-icon fui-search"></span> </div>
        </li>
        
        <!-- Sidebar header @add class nav-header for sidebar header -->
        <li class="nav-header">Overview</li>
        <li><a href="<?php echo U('index/index');?>"><i class="icon-home"></i>后台首页 </a></li>
        <!-- Sidebar header @add class nav-header for sidebar header -->
        

         <li> <!-- Example for second level menu --> 
          <a class="dropdown" href="#"><i class="icon-folder-close-alt"></i> 文章管理 <span class="label">3</span></a>
          <ul>
            <li><a href="<?php echo U('Blog/index');?>"><i class="icon-hdd"></i>文章列表</a></li>
            <li><a href="<?php echo U('Blog/addblog');?>"><i class="icon-coffee"></i>添加文章</a></li>
            <li><a href="<?php echo U('Blog/tracher');?>"><i class="icon-coffee"></i>回收站</a></li>
          </ul>
        </li>
        <!-- Sidebar header @add class nav-header for sidebar header -->
        <li class="nav-header">Components</li>
        <li> <!-- Example for second level menu --> 
          <a class="dropdown" href="#"><i class="icon-folder-close-alt"></i> 栏目管理 <span class="label">3</span></a>
          <ul>
            <li><a href="<?php echo U('Cate/index');?>"><i class="icon-hdd"></i> 栏目列表</a></li>
            <li><a href="<?php echo U('Cate/addCate');?>"><i class="icon-coffee"></i>添加栏目</a></li>
            <li><a href="knobs.html"><i class="icon-coffee"></i>Knobs</a></li>
          </ul>
        </li>
        <li> <!-- Example for second level menu --> 
          <a class="dropdown" href="#"><i class="icon-user"></i> 会员管理 <span class="label">2</span></a>
          <ul>
            <li><a href="<?php echo U('User/index');?>"><i class="icon-hdd"></i> 会员列表</a></li>
            <li><a href="<?php echo U('User/add');?>"><i class="icon-coffee"></i>添加会员</a></li>
          </ul>
        </li>
          <li> <!-- Example for second level menu --> 
          <a class="dropdown" href="#"><i class=" icon-cogs"></i> 权限管理 <span class="label">2</span></a>
          <ul>
            <li><a href="<?php echo U('Cate/index');?>"><i class="icon-hdd"></i> 权限列表</a></li>
            <li><a href="<?php echo U('Cate/addCate');?>"><i class="icon-coffee"></i>添加权限</a></li>
            <li><a href="<?php echo U('Cate/addCate');?>"><i class="icon-coffee"></i>角色管理</a></li>          
          </ul>
        </li>
        <li> <!-- Example for second level menu --> 
          <a class="dropdown" href="#"><i class=" icon-cogs"></i>属性管理 <span class="label">2</span></a>
          <ul>
            <li><a href="<?php echo U('Attr/index');?>"><i class="icon-hdd"></i> 属性列表</a></li>
            <li><a href="<?php echo U('Attr/addattr');?>"><i class="icon-coffee"></i>添加属性</a></li>
         
          </ul>
        </li>
        <li><a href=""><i class="icon-truck"></i>Icons</a></li>
      </ul>
    </div>
    <!-- /Wrapper --> 
  </div>
<div class="content">
	<div class="navbar"> 
<a href="#" onclick="return false;" class="btn pull-left toggle-sidebar "><i class="icon-list"></i></a> <a class="navbar-brand" href="index.html">Archon</a> 
      
      <!-- Top right user menu -->
      <ul class="nav navbar-nav user-menu pull-right">
        <!-- First nav user item -->
        <li class="dropdown hidden-xs"> <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-alt"></i></a>
          <ul class="dropdown-menu right inbox">
            <li class="dropdown-menu-title"> INBOX <span>(25)</span> </li>
            <li> <img src="/Demon/Public/bootstrap/images/theme/avatarTwo.png" alt="" class="avatar">
              <div class="message"> <span class="username">Anusha</span> <span class="mini-details">(6) <i class="icon-paper-clip"></i></span> <span class="time pull-right"> 06:58 PM</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
              </div>
            </li>
            <li> <img src="/Demon/Public/bootstrap/images/theme/avatarFive.png" alt="" class="avatar">
              <div class="message"> <span class="username">Veeru</span> <span class="mini-details">(2) <i class="icon-paper-clip"></i></span> <span class="time pull-right"> 09:58 AM</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
              </div>
            </li>
            <li> <img src="/Demon/Public/bootstrap/images/theme/avatarSix.png" alt="" class="avatar">
              <div class="message"> <span class="username">Nag</span> <span class="mini-details">(6) <i class="icon-paper-clip"></i></span> <span class="time pull-right">Yesterday</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
              </div>
            </li>
            <li> <img src="/Demon/Public/bootstrap/images/theme/avatarSeven.png" alt="" class="avatar">
              <div class="message"> <span class="username">Harish</span> <span class="mini-details"> <i class="icon-picture"></i></span> <span class="time pull-right">14/12/2013</span>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's ... </p>
              </div>
            </li>
            <li class="dropdown-menu-footer"> <a href="#">View All Messages</a> </li>
          </ul>
        </li>
        <!-- /dropdown --> 
        
        <!-- Second nav user item -->
        <li class="dropdown hidden-xs"> <a class="dropdown-toggle" data-toggle="dropdown"><i class="icon-bell"></i></a>
          <ul class="dropdown-menu right notifications">
            <li class="dropdown-menu-title"> Notifications </li>
            <li> <i class="icon-cog avatar text-success"></i>
              <div class="message"> <span class="username text-success">New settings activated</span> <span class="time pull-right"> 06:58 PM</span> </div>
            </li>
            <li> <i class="icon-shopping-cart avatar text-danger"></i>
              <div class="message"> <span class="username text-danger">You have 2 returns</span> <span class="time pull-right"> 04:29 PM</span> </div>
            </li>
            <li> <i class="icon-user avatar text-success"></i>
              <div class="message"> <span class="username text-success">New User registered</span> <span class="time pull-right"> Yesterday</span> </div>
            </li>
            <li> <i class="icon-comment avatar text-info"></i>
              <div class="message"> <span class="username text-info">New Comment received</span> <span class="time pull-right"> Yesterday</span> </div>
            </li>
            <li> <i class="icon-cog avatar text-warning"></i>
              <div class="message"> <span class="username text-warning">User deleted</span> <span class="time pull-right"> 2 days ago</span> </div>
            </li>
            <li> <i class="icon-dollar avatar"></i>
              <div class="message"> <span class="username">Earned 200 points</span> <span class="time pull-right">3 days ago</span> </div>
            </li>
            <li> <i class="icon-hdd avatar text-danger"></i>
              <div class="message"> <span class="username text-danger">Memory size exceeded </span> <span class="time pull-right"> 1 week ago</span> </div>
            </li>
            <li class="dropdown-menu-footer"> <a href="#">View All Notifications</a> </li>
          </ul>
        </li>
        <!-- / dropdown -->
        
        <li class="dropdown user-name"> <a class="dropdown-toggle" data-toggle="dropdown"><img src="/Demon/Public/bootstrap/images/theme/avatarSeven.png" class="user-avatar" alt="" />Demon</a>
          <ul class="dropdown-menu right inbox user">
            <li class="user-avatar"> <img src="/Demon/Public/bootstrap/images/theme/avatarSeven.png" class="user-avatar" alt="" /> Demon </li>
            <li> <i class="icon-user avatar"></i>
              <div class="message"> <span class="username">个人信息</span> </div>
            </li>
            <li> <i class="icon-cogs avatar"></i>
              <div class="message"> <span class="username">设置 </span> </div>
            </li>
            <li> <i class="icon-book avatar"></i>
              <div class="message"> <span class="username">帮助 </span> </div>
            </li>
            <li><a href="<?php echo U('index/logout');?>" target="_self" onclick="logout()">Logout</a></li>
          </ul>
        </li>
        <!-- / dropdown -->
      </ul>
      <!-- / Top right user menu --> 
      
    </div>
        <div id="main-content">
           <div class="row">
        <div class="col-mod-12">
          <ul class="breadcrumb">
            <li><a href="index.html">Archon Admin</a></li>
            <li><a href="tables.html">Tables</a></li>
            <li class="active">Bread Crumb</li>
          </ul>
        </div>
      </div>
	
    <div id="content" class="col-mod">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title"><i class="glyphicon glyphicon-header"></i> 权 限 列 表</h4>
				</div>

				<div class="panel-body">
					<form action="<?php echo U('Attr/runattr');?>" method="post">
					<table class="table table-hover table-bordered table-condensed">
						<tr>
							<td>ID</td>
							<td>名称</td>
							<td>颜色</td>
							<td>操作</td>
						</tr>
						<?php if(is_array($attr)): $i = 0; $__LIST__ = $attr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><?php echo ($vo['id']); ?></td>
							<td><?php echo ($vo['name']); ?></td>
							<td>
								<div style="width: 20px; height: 20px; background:<?php echo ($vo['color']); ?> ;"></div></td>
							<td>
								<div class="btn-group btn-group-xs">
									<a href="<?php echo U('Attr/edit',array('id'=>$vo['id']));?>" class="btn btn-warning">修改</a>
									<a href="<?php echo U('Attr/delattr',array('id'=>$vo['id']));?>" class="btn btn-danger">删除</a>
								</div>

							</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						<tr>
							<td colspan='7'><?php echo ($page); ?></td>
						</tr>
					</table>
					</form>
				</div>

			</div>
		</div>
</div>
</div>
</div>
<script src="/Demon/Public/bootstrap/js/jquery-1.8.3.min.js"></script> 
<script src="/Demon/Public/bootstrap/js/jquery-ui-1.10.3.custom.min.js"></script> 
<script src="/Demon/Public/bootstrap/js/jquery.ui.touch-punch.min.js"></script> 
<script src="/Demon/Public/bootstrap/js/bootstrap.min.js"></script> 
<script src="/Demon/Public/bootstrap/js/bootstrap-select.js"></script> 
<script src="/Demon/Public/bootstrap/js/bootstrap-switch.js"></script> 
<script src="/Demon/Public/bootstrap/js/flatui-checkbox.js"></script> 
<script src="/Demon/Public/bootstrap/js/flatui-radio.js"></script> 
<script src="/Demon/Public/bootstrap/js/jquery.tagsinput.js"></script> 
<script src="/Demon/Public/bootstrap/js/jquery.placeholder.js"></script> 
<script src="/Demon/Public/bootstrap/js/bootstrap-typeahead.js"></script> 
<script src="/Demon/Public/bootstrap/js/application.js"></script> 
<script src="/Demon/Public/bootstrap/js/moment.min.js"></script> 
<script src="/Demon/Public/bootstrap/js/jquery.dataTables.min.js"></script> 
<script src="/Demon/Public/bootstrap/js/bootstrap-datatables.js"></script> 
<script src="/Demon/Public/bootstrap/js/jquery.sortable.js"></script> 
<script type="text/javascript" src="/Demon/Public/bootstrap/js/jquery.gritter.js"></script> 

<!-- Archon JS =============================--> 
<script src="/Demon/Public/bootstrap/js/archon.js"></script>
</body>
</html>