<?php
	session_start();
	include 'db-connect.php';
	$db_handler=new DBHandler;
					
	$query="select 1 from cw_users where user_name='".$_POST["name"]."' and user_pwd='".$_POST["password"]."'";
	
	$rs=mysql_query($query);
	$row=mysql_fetch_row($rs);
	if(!$row[0]=="1"){
		echo "<script language='javascript' type='text/javascript'>";
		echo "location.href='login-fail.php'";
		echo "</script>";
	}
	else{
		$_SESSION["name"]=$_POST["name"];
		echo "<script language='javascript' type='text/javascript'>";
		echo "location.href='index.php'";
		echo "</script>";
	}
	$db_handler->db_close();
?>