<?php  
	define('DATABASE', 'class_website');
	define('USER_TABLE', 'cw_users');
	define('POST_TABLE','cw_posts');
	define('COMMENT_TABLE', 'cw_comments');
	define('SERVER','localhost');
	define('USER','admin');
	define('PASSWORD','123456');                                       
	class DBHandler{
		var $db;
	  function __construct(){
	  	$this->db=mysql_connect(SERVER,USER,PASSWORD) or die("connect failed!");
		mysql_select_db(DATABASE);
	  }	
	  function db_close(){
	  	mysql_close($this->db);
	  }
	}	
?>