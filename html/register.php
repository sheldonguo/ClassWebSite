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
						我的3班<span style="color: #565758;font-size: 15px;"> - 注册</span>
					</h2>	
					<form name="f1" method="post" action="register-jumper.php">
						<table class="table">
					<tr height=40px>
						<td width="150" valign="center"><dfn>*</dfn>用户名：</td>
						<td>
							<input name="name" type="text"  maxlength="50" />
							（请尽量使用真实姓名。*）		
						</td>
					</tr>
					<tr height=40px>
						<td width="150" valign="center"><dfn>*</dfn>密码：</td>
						<td>
							<input type="password" name="password" maxlength="50" />
							（请输入登入密码。*）								
						</td>
					</tr>
					<tr height=40px>
						<td width="150" valign="center"><dfn>*</dfn>再次输入密码：</td>
						<td>
							<input type="password" name="confirm-password" maxlength="50" />
                        	（确保密码输入正确。*）							
						</td>
					</tr>
					<tr height=40px>
						<td width="150" valign="center"><dfn>*</dfn>E-mail：</td>
						<td>
							<input type="text" name="e-mail"  maxlength="100" />
							<span style="color=green;padding-top: 2px;">（邮箱将用来与您的同学联系。*）</span>						
						</td>
					</tr>
					<tr height=40px>
						<td width="150" valign="center"><dfn>*</dfn>头像：</td>
						<td>
							<input type="text" name="face" maxlength="10" />
							（请上传您的头像。）
						</td>
					</tr>
					</table>
					<span>标记“*”为必填项目</span>
					<input name="submit" type="submit" value="注册" style="padding: 10px"/>
					</form>
			</div>
		<?php
		include ('footer.php'); 
		?>
	</body>
</html>