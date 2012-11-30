<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=8">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="../css/default.css" />
	<link rel="stylesheet" type="text/css" href="../css/post.css" />
	<title>发表文章</title>
	<script type="text/javascript">
		window.UEDITOR_HOME_URL = location.pathname.substr(0, location.pathname.lastIndexOf('/')) + '/';
	</script>
	<script type="text/javascript" src="editor_config.js"></script>
	<script type="text/javascript" src="editor.js"></script>
	<link rel="stylesheet" href="themes/default/ueditor.css" />
</head>
<body>
	<div id="cw-header">
			<div id="cw-top-bar">
				<div id="cw-logo">
				</div>
				<ul id="cw-navigation">
					<li><a href="../html/index.php">首页</a></li>
					<li><a href="../html/classinfo.php">班风</a></li>
					<li><a href="../html/blog.php?page_no=0">博文</a></li>
					<li><a href="../html/resources.php">资源</a></li>
				</ul>
				<ul id="cw-login">
					<li id="nav-login"><a href="../html/login.php">登录</a></li>
					<li id="nav-register"><a href="../html/register.php">注册</a></li>
				</ul>
			</div>
		</div>
	<div id="cw-content-other">
	<form action="../html/post-return.php" method="post">
	<div style="width:600px;height:100px; relative;top:20px;margin:0 auto">
		<h1 style="padding:10px;color: #ffffff">撰写新文章</h1>
			<label>
			<span style="font-size:40px;color: #ffffff">标题:</span>
			<input type="text" name="title" style="width: 400px;height: 40px;font-size: 25px;"/>
			</label>
	</div>
<script type="text/plain" name="post_content" id="editor" style="width:600px;margin: 20px auto;">记录生活中点点滴滴滴!</script>
<input name="submit" value="提交" type="submit" style="width: 80px;height: 40px;font-size: 25px">
</form>
</div>
		<div id="cw-footer">
		<div id="cw-copyright-other">
			<p>
			 Copyright © 2012 <a href="#">Artwork Studio</a> | 
        		from <a href="../html/index.php" target="_parent">10软3班</a>
        		</p>
		</div>
		</div>
</body>
<script type="text/javascript">
    var editor = new UE.ui.Editor();
    editor.render('editor');
</script>
</html>