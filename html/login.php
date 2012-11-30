<html>
	<head>
		<title>登陆</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		<link rel="stylesheet" type="text/css" href="../css/register.css" />
	</head>
	<body>
		<?php 
			include ('header.php');
		?>
			<div id="cw-content-other" style="height: 450px">
					<h1 style="color:#C0F048;padding:40px">
						我的3班<span style="color: #565758;font-size: 18px;"> —登录</span>
					</h1>	
					<form name="f1" method="post" action="login-jumper.php">
						<div class="login">
						<label><span>用户名:</span><input name="name" type="text"  class="input-text"/></label><br />
						<label><span>&nbsp;&nbsp;&nbsp;密码:</span><input type="password" name="password" class="input-text" /></label>
						<input name="submit" type="submit" value="登录" class="input-submit"/>
					</div>
					</form>
				</div>
		<?php
		include ('footer.php'); 
		?>
	</body>
</html>