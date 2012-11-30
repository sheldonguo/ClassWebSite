<html>
	<head>
		<title>注册</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		<link rel="stylesheet" type="text/css" href="../css/register.css" />
	</head>
	<body>
		<?php 
			include ('header.php');
		?>
			<div id="cw-content-other" style="height:450px">
					<h1 style="color:#C0F048;padding:20px">
						我的3班<span style="color: #565758;font-size: 18px;"> —登录</span>
					</h1>	
			<div class="table">
				<form name="f1" method="post" action="register-jumper.php">
				<label><div>用户名:</div><input name="name" type="text"  class="input-text"/></label><br />
				<label><div>密码:</div><input name="password" type="password"  class="input-text"/></label><br />
				<label><div>再次输入密码:</div><input name="confirm-password" type="password"  class="input-text"/></label><br />
				<label><div>邮箱:</div><input type="text" name="e-mail" class="input-text"/></label><br />
				<input name="submit" type="submit" value="注册" class="input-submit"/>
				</form>
			</div>
			</div>
		<?php
		include ('footer.php'); 
		?>
	</body>
</html>