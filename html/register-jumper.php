<html>
	<head>
		<title>注册</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		<link rel="stylesheet" type="text/css" href="../css/register.css" />
	</head>
	<body>
		<?php 
			include ('header.php');
			include 'db-connect.php';
		?>
			<div id="cw-content-other" style="height: 400px">
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
						echo  '<p style="color:#565758;">童鞋，第二次密码为空，介肿么整啊</p>';
						echo '<a href="register.php">返回</a>';
						$f=FALSE;
					}else if($_POST["confirm-password"]!=$_POST["password"]){
						echo  '<p style="color:#565758;">童鞋，两次密码都不一样啊，介肿么整啊</p>';
						echo '<a href="register.php">返回</a>';
						$f=FALSE;
					}elseif(ctype_space($_POST["e-mail"]) || $_POST["e-mail"]==""){
						echo  '<p style="color:#565758;">童鞋，没写邮箱啊，介肿么整啊</p>';
						echo '<a href="register.php">返回</a>';
						$f=FALSE;
					}
					
					
					$db_handler=new DBHandler;
					$query_c="select 1 from cw_users where user_name='".$_POST["name"]."'";
					
					$query="insert into cw_users(user_name,user_pwd,user_touxiang,user_email,user_registered) values('".$_POST["name"]."','".$_POST["password"]."',"."null".",'".$_POST["e-mail"]."',"."now())";
					
					if($f){
						if($result=mysql_query($query_c)){
							$row=mysql_fetch_array($result);
							if(isset($row[0])){
								echo '<p style="color:#565758;">童鞋，用户名已经存在！<br></p>';
								echo '<a href="register.php">返回</a>';
							}else{
								if(mysql_query($query)){
									echo '<p style="color:#565758;">恭喜你！童鞋，你现在是我们3班滴淫啦~<br></p>';
									$_SESSION["name"]=$_POST["name"];
									echo '<a href="index.php">到处看看去</a>';
								}else{
									echo  '<p style="color:#565758;">童鞋，没成功啊，介肿么整啊<br></p>';
									echo '<a href="register.php">返回</a>';
										}
								}
						}	
					}
					$db_handler->db_close();
				?>
				</div>
					
				
			</div>
		<?php
		include ('footer.php'); 
		?>
	</body>
</html>