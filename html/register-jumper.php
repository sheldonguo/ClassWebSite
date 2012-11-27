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
				<div style="position: relative;top: 40px">
					<?php
					$f=TRUE;
					echo  '<p style="color:#565758;">正在为您注册......</p>';
					if(ctype_space($_POST["name"]) || $_POST["name"]==""){
						echo  '<p style="color:#565758;">童鞋，没写名字啊，介肿么整啊</p>';
						echo '<a href="register.php">返回</a>';
						$f=FALSE;
					}elseif(ctype_space($_POST["password"] || $_POST["password"]=="")){
						echo  '<p style="color:#565758;">童鞋，密码为空啊，介肿么整啊</p>';
						echo '<a href="register.php">返回</a>';
						$f=FALSE;
					}elseif(ctype_space($_POST["confirm-password"]) || $_POST["confirm-password"]==""){
						echo  '<p style="color:#565758;">童鞋，两次密码都不一样啊，介肿么整啊</p>';
						echo '<a href="register.php">返回</a>';
						$f=FALSE;
					}elseif(ctype_space($_POST["e-mail"]) || $_POST["e-mail"]==""){
						echo  '<p style="color:#565758;">童鞋，没写邮箱啊，介肿么整啊</p>';
						echo '<a href="register.php">返回</a>';
						$f=FALSE;
					}
					
					$mysql_server_name="localhost";
					$mysql_username="root";
					$password="272814";
					$database="class_website";
					
					$conn=mysql_connect($mysql_server_name,$mysql_username,$password) or die ("fail to connect to database");
					
					mysql_select_db($database);
					
					$query="insert into cw_users(user_name,user_pwd,user_touxiang,user_email,user_registered) values('".$_POST["name"]."','".$_POST["password"]."',"."null".",'".$_POST["e-mail"]."',"."now())";
					
					if($f){	
						if(mysql_query($query)){
							echo '<p style="color:#565758;">恭喜你！童鞋，你现在是我们3班滴淫啦~<br></p>';
							echo '<a href="index.php">到处看看去</a>';
						}
						else{
							echo  '<p style="color:#565758;">童鞋，没成功啊，介肿么整啊<br></p>';
							echo '<a href="register.php">返回</a>';
						}
					}
					mysql_close($conn);
				?>
				</div>
					
				
			</div>
		<?php
		include ('footer.php'); 
		?>
	</body>
</html>