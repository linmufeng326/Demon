<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8">
<title>Archon Admin Template</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Loading Bootstrap -->
<link href="/Demon/Public/bootstrap/css/bootstrap.css" rel="stylesheet">

<!-- Loading Stylesheets -->


<!-- Loading Custom Stylesheets -->

<link href="/Demon/Public/bootstrap/style/login.css" rel="stylesheet">


<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
	<script src="bootstrap/js/html5shiv.js"></script>
	<![endif]-->
</head>

<body>
<div class="container">
		<div class="row col-md-6 col-sm-offset-3 login">
				
				<form class="form-horizontal" action="<?php echo U('Login/login');?>" role="form" method="post">
					<div class="form-group">
						<label for="username" class="col-sm-2 control-label">用户名:</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="username" name="username" placeholder="用户名" />
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="col-sm-2 control-label">密 &nbsp; &nbsp;码:</label>
						<div class="col-sm-7">
							<input type="password" class="form-control" id="password" name="password" placeholder="密码" />
							
						</div>				
					</div>

					<div class="form-group">
						<label for="code" class="col-sm-2 control-label">验证码:</label>
						<div class="col-sm-7">
							<input type="text" class="form-control" id="code" name="code" placeholder="验证码" />
							
						</div>				
					</div>					

					<div class="form-group">
						<label for="code" class="col-sm-2 control-label"></label>
						<div class="col-sm-7">
							<img src="<?php echo U('Login/verify','');?>" onclick="javascript:this.src=this.src+'?time='+Math.random()" />						
						</div>				
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-7">
							<button type="submit" class="btn btn-primary btn-login">登陆</button>
							
						</div>
						
					</div>

				</form>	

		</div>
	</div>
</body>
</html>