<?php 
	include 'db-connect.php';
	$post_title=$_POST['title'];
	$post_content=$_POST['post_content'];
	$post_author="allen";	//登陆者用户名
	session_start();
	if(isset($_SESSION["name"])){
		
	if(!$post_title){
		echo "标题不能为空!";
	}else if(!$post_content){
		echo "请写点内容吧!";
	}else{
		$db_handler=new DBHandler;
		$query="insert into cw_posts(post_author,post_title,post_content,post_date) values ('".$post_author."','".$post_title."','".$post_content."',now())";
		if(mysql_query($query)){
			echo '发表文章成功';
		}else{
			echo '发表文章失败!';
		}	
		$db_handler->db_close();
	}
	echo '<br/><a href="blog.php">点击返回<a>';
	}else{
		echo '您尚未登陆，请先<a href="login.php">登陆<a>';
	}
?>