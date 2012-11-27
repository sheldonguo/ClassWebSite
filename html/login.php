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
			<div id="cw-content">
					<div style="color:Red;font-size:24px;position: relative;left: -400px;top: 50px">
						我的3班
					</div>
					<span style="color: #565758;font-size: 15px;position: relative;left: -550px;top: 20px">
						 - 登入
					</span>
					<table class="table">
					<tr height=80px>
						<td width="150" class="right" valign="center"><dfn>*</dfn>用户名：</td>
						<td>
							<input type="text" id="un" class="inputbox" maxlength="50" />
							（请输入用户名或ID。）		
						</td>
					</tr>
					<tr height=80px>
						<td width="150" class="right" valign="center"><dfn>*</dfn>密码：</td>
						<td>
							<input type="password" id="p1" class="inputbox" maxlength="50" /><ul id="pwd-strong" style="display:none;"><li>弱</li><li>中</li><li>强</li></ul>
							（请输入登入密码。）								
						</td>
					</tr>
					</table>
					<button type="button"  style="color: Red;height: 40px;width: 70px;position: relative;left: -400px;top: 300px">登入</button>
			</div>
		<?php
		include ('footer.php'); 
		?>
	</body>
</html>