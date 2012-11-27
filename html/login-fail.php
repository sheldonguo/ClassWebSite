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
			<div id="cw-content-other">
					<h2 style="color:Red;padding:20px">
						我的3班<span style="color: #565758;font-size: 15px;"> - 登入</span>
					</h2>	
					<form name="f1" method="post" action="login-jumper.php">
						<table class="table" style="height: 200px">
					<tr >
						<td width="150" valign="center"><dfn>*</dfn>用户名：</td>
						<td>
							<input name="name" type="text"  maxlength="50" />
							（您注册时的姓名。）		
						</td>
					</tr>
					<tr >
						<td width="150" valign="center"><dfn>*</dfn>密码：</td>
						<td>
							<input type="password" name="password" maxlength="50" />
							（请输入登入密码。*）								
						</td>
					</tr>
					</table>
					<input name="submit" type="submit" value="登入" style="padding: 10px"/>
					<span style="color: Red;">用户名不存在或者密码错误。</span>
					</form>
				</div>
		<?php
		include ('footer.php'); 
		?>
	</body>
</html>