<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /
<?php
	include 'db-connect.php';
	$db_handler=new DBHandler;
	$file_to_download=$_GET['name'];
	echo $file_to_download;
	$query="select file_location from cw_upload where file_name='".$file_to_download."'";
	if(!$result=mysql_query($query)){
		echo '<font color=red>获取资源失败，请重新下载！</font>';
		exit;
	}
	$row=mysql_fetch_row($result);
	$url=$row[0];
	
	$file= $url;  
   
	if(file_exists($file)) {  
	    header('Content-Description: File Transfer');  
	    header('Content-Type: application/octet-stream');  
	    header('Content-Disposition: attachment; filename='.basename($file));  
	    header('Content-Transfer-Encoding: binary');  
	    header('Expires: 0');  
	    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');  
	    header('Pragma: public');  
	    header('Content-Length: ' . filesize($file));  
	    ob_clean();  
	    flush();  
	    readfile($file);  
	    exit;  
	}
	
?>