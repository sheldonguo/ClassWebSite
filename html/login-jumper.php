<?php
	$mysql_server_name="localhost";
	$mysql_username="root";
	$password="272814";
	$database="class_website";
	
	$conn=mysql_connect($mysql_server_name,$mysql_username,$password) or die ("fail to connect to database");
					
	mysql_select_db($database);
					
	$query="select 1 from cw_users where user_name='".$_POST["name"]."' and user_pwd='".$_POST["password"]."'";
	
	$rs=mysql_query($query);
	$row=mysql_fetch_row($rs);
	if(!$row[0]=="1"){
		echo "<script language='javascript' type='text/javascript'>";
		echo "location.href='login-fail.php'";
		echo "</script>";
	}
	else{
		echo "<script language='javascript' type='text/javascript'>";
		echo "location.href='index.php'";
		echo "</script>";
	}
?>