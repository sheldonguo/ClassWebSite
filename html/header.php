<html>
	<head>
		<title>10软件3班——班级网站</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../css/default.css" />
		<link rel="stylesheet" type="text/css" href="../css/s3slider.css" />
		<link rel="stylesheet" type="text/css" href="../css/post.css" />
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/s3Slider.js"></script>
		<script type="text/javascript">
    		$(document).ready(function() {
		        $('#slider').s3Slider({
		            timeOut: 3000
		        });
		    });
		</script>
	</head>
	<body>
		<div id="cw-header">
			<div id="cw-top-bar">
				<div id="cw-logo">
					<a href="#"><img src="../images/cw_logo.png" /></a>
				</div>
				<ul id="cw-navigation">
					<li><a href="index.php">首页</a></li>
					<li><a href="classinfo.php">班风</a></li>
					<li><a href="blog.php?page_no=0">博文</a></li>
					<li><a href="resources.php">资源</a></li>
				</ul>
				<ul id="cw-login">
		<?php 
			session_start();
			
			if(isset($_SESSION["name"])){
				echo '<li id="nav-login"><a id="logoin-name" href="#">'.$_SESSION["name"];
			}else{
				echo '<li id="nav-login"><a id="logoin-name" href="login.php">登陆';
			}
			echo '</a></li>';
			?>
				<li id="nav-register"><a href="register.php">注册</a></li>
				</ul>
			</div>
		</div>
	