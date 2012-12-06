<?php 
	include ('header.php');
	include 'db-connect.php';
		$uptypes=array('application/msword',
		'application/vnd.openxmlformats-officedocument.wordprocessingml.document',  //上传文件类型列表
		'application/pdf',
		'application/vnd.ms-powerpoint',
		'application/octet-stream',
		'application/x-zip-compressed'); 
		$max_file_size=100000000;   //上传文件大小限制, 单位BYTE
		$destination_folder="../resources/"; //上传文件路径
		  		 $page_size=10;
					if(isset($_GET["page_no"])){
						$page_no=$_GET["page_no"];
					}else{
						$page_no=0;
					}
				  $db_handler=new DBHandler;
				  $start=$page_no*$page_size;
				  $query_res="select * from cw_upload  order by file_date desc limit $start,$page_size";
				  $query_size="select count(*) from cw_upload";
				  $res_counts=mysql_fetch_array(mysql_query($query_size));
		if(!$result=mysql_query($query_res)){
			echo '<font color=red>获取资源失败，请尝试刷新页面。！</font>';
			$db_handler->db_close();
			exit;
		}
?>
		<div id="cw-content-other" style="height: 700px;">
			<div id="cw-upload-box">
				<form enctype="multipart/form-data" method="post" name="upform">
				<div id="re-upload-box"><span>我要上传文件:</span><input name="upfile" type="file" class="re-input-text" size="17">
				<input type="submit" value="上传" class="re-input-submit" size="17"><br>
				<h4>注：允许上传的文件类型为:doc|docx|pdf|ppt|rar|zip 大小&le;10M哦！</h4>
				</div>
				</form>
				<table id="cw-relist">
					<caption style="font-size: 30px;">资源列表</caption> 
				<tr><td>文件名</td><td>文件大小</td><td>上传者</td><td>上传时间</td></tr>
					<?php
					while($row = mysql_fetch_row($result)){
						if($row[1]>1024){
							$m=1024;
							$file_size=(int)($row[1]/$m);
							$file_size.="KB";
						}else{
							$file_size=$row[1]."B";
						}
						echo '<tr><td><a href="download.php?name='.$row[0].'">'.$row[0].'</a></td><td>'.$file_size.'</td><td>'.$row[2].'</td><td>'.$row[3].'</td></tr>'; //显示数据 				
					} 
					mysql_free_result($result); //关闭数据集 
					$db_handler->db_close();
				?>	
				</table>
				<div id="post-page-nav" style="text-align: center">
					<ul>
					<?php 
						for($i=1;$i<$res_counts[0]/$page_size+1;$i++)
				  		 echo	'<li><a href="resources.php?page_no='.($i-1).'">'.$i.'</a></li>';
					?>
				</ul>
				</div>
				</div>
				<?php
				
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				if(isset($_SESSION['name'])){
				if (!is_uploaded_file($_FILES['upfile']['tmp_name']))
				//是否存在文件
				{ 
				    echo "<script>";
  					echo  "window.location.href=window.location.href;";
					echo 'alert("文件不存在！")';
  					echo "</script>";
				exit;
				}
				
				$file = $_FILES['upfile'];
				if($max_file_size < $file['size'])
				//检查文件大小
				{
				 	 echo "<script>";
  					echo  "window.location.href=window.location.href;";
					echo 'alert("文件超过10M！")';
  					echo "</script>";
				exit;
				  }
				
				if(!in_array($file['type'], $uptypes))
				//检查文件类型
				{
				 	 echo "<script>";
  					echo  "window.location.href=window.location.href;";
					echo 'alert("文件类型不符合！")';
  					echo "</script>";
				exit; 
				}
				$filename=$file['tmp_name'];
				$pinfo=pathinfo($file['name']);
				$ftype=$pinfo['extension'];
				$fsize=$file['size'];
				$upload_file_name=$file['name'];
				$fname =iconv("utf-8","gb2312",$_FILES['upfile']['name']);
				$destination = $destination_folder.$fname;
				if (file_exists($destination))
				{
				    echo "<script>";
  					echo  "window.location.href=window.location.href;";
					echo 'alert("文件已经存在！")';
  					echo "</script>";
				     exit;
				  }
				
				if(!move_uploaded_file ($filename, $destination))
				{
				   	echo "<script>";
  					echo  "window.location.href=window.location.href;";
					echo 'alert("文件上传失败！")';
  					echo "</script>";
				     exit;
				  }else{
					$db_handler2=new DBHandler;
					$username=$_SESSION['name'];
					$qu="insert into cw_upload values('".$upload_file_name."',".$fsize.",'".$username."',now(),'".$destination_folder.$upload_file_name."')";
					if(!mysql_query($qu)){
						echo "<script>";
  						echo  "window.location.href=window.location.href;";
						echo 'alert("数据库出错！")';
  						echo "</script>";
						exit;
					}
					$db_handler2->db_close();
					echo "<script>";
  					echo  "window.location.href=window.location.href;";
					echo 'alert("上传成功！")';
  					echo "</script>";
				  }
				}else{
					echo "<script>";
  					echo  "window.location.href=window.location.href;";
					echo 'alert("请先登陆！")';
  					echo "</script>";
				}
				}
			?>
		</div>
<?php
	include ('footer.php'); 
?>