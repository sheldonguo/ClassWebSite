<?php 
	include ('header.php');
	include 'db-connect.php';
?>
		<div id="cw-content-other" style="height: 600px">
			<?php
				$uptypes=array('application/msword',  //上传文件类型列表
				'application/pdf',
				'application/vnd.ms-powerpoint',
				'application/octet-stream',
				'application/x-zip-compressed'); 
				$max_file_size=100000;   //上传文件大小限制, 单位BYTE
				$destination_folder="../resources/"; //上传文件路径
				?>
				<html>
				<head>
				<title>资源</title>
				<style type="text/css">body,td{font-family:tahoma,verdana,arial;font-size:11px;line-height:15px;color:#666666;}
				strong{font-size:12px;}
				aink{color:#0066CC;}
				a:hover{color:#FF6600;}
				aisited{color:#003366;}
				a:active{color:#9DCC00;}
				table.itable{}
				td.irows{height:20px;background:url("index.php?i=dots" repeat-x bottom}</style>
				</head>
				<body>
					<?php
						$db_handler=new DBHandler;
						$qu="select * from cw_upload";
						if(!$result=mysql_query($qu)){
							echo '<font color=red>获取资源失败，请尝试刷新页面。！</font>';
							exit;
						}
						echo '<table style="margin:0 auto">'; 
						echo "<tr><td>文件名</td><td>文件大小</td><td>上传者</td><td>上传时间</td></tr>"; 
						while($row = mysql_fetch_row($result)){
							echo '<tr><td><a href="download.php?name='.$row[0].'">'.$row[0].'</a></td><td>'.$row[1].'B'.'</td><td>'.$row[2].'</td><td>'.$row[3].'</td></tr><br>'; //显示数据 				
						} 
						echo "</table>"; 
						mysql_free_result($result); //关闭数据集 
						$db_handler->db_close();
					?>
					
					
				<center><form enctype="multipart/form-data" method="post" name="upform">
				我要上传文件: <br><br><br>
				<input name="upfile" type="file"  style="width:200;border:1 solid #9a9999; font-size:9pt; background-color:#ffffff" size="17">
				<input type="submit" value="上传" style="width:30;border:1 solid #9a9999; font-size:9pt; background-color:#ffffff" size="17"><br><br><br>
				允许上传的文件类型为:doc|docx|pdf|ppt|rar|zip <br><br>
				<a href="resources.php">返回</a>
				</form>
				
				<?php
				if ($_SERVER['REQUEST_METHOD'] == 'POST')
				{
				if (!is_uploaded_file($_FILES['upfile']['tmp_name']))
				//是否存在文件
				{ 
				echo "<font color='red'>文件不存在！</font>";
				exit;
				}
				
				$file = $_FILES['upfile'];
				if($max_file_size < $file['size'])
				//检查文件大小
				{
				echo "<font color='red'>文件太大！</font>";
				exit;
				  }
				
				if(!in_array($file['type'], $uptypes))
				//检查文件类型
				{
				echo "<font color='red'>只能上传上述格式的文件！！</font>";
				exit; 
				}
				
				//if(!file_exists($destination_folder))
				//mkdir($destination_folder);
				
				$filename=$file['tmp_name'];
				$pinfo=pathinfo($file['name']);
				$ftype=$pinfo['extension'];
				$destination = $destination_folder.$_FILES['upfile']['name'];
				if (file_exists($destination))
				{
				     echo "<font color='red'>同名文件已经存在了！</a>";
				     exit;
				  }
				
				if(!move_uploaded_file ($filename, $destination))
				{
				   echo "<font color='red'>移动文件出错！</a>";
				   echo "<font color='red'>是否文件名过长或没有权限！</a>";
				     exit;
				  }
				$db_handler=new DBHandler;
				
				$username="USERNAME";
				$qu="insert into cw_upload values('".$_FILES['upfile']['name']."',".$_FILES['upfile']['size'].",'".$username."',"."now(),'".$destination."')";
				if(!mysql_query($qu)){
					echo '<font color=red>上传失败！数据库操作失败！</font>';
					exit;
				}
				$db_handler->db_close();
				
				echo "<script>";
  				echo  "window.location.href=window.location.href;";
				echo 'alert("上传成功！")';
  				echo "</script>";
				
				
				
				}
			?>
</center>
</body>
</html>
		</div>
<?php
	include ('footer.php'); 
?>