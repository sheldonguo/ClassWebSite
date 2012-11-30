<?php 
	include ('header.php');
	include 'db-connect.php';
?>
	<?php 
		$db_handler=new DBHandler;
		if(isset($_GET["post_id"])){
		$post_id=$_GET["post_id"];
		}else{
			$post_id="1000000000";
		}
		if(isset($_POST['comment'])){
			$comment_content=$_POST['comment'];
			if($comment_content!=""){
				
			
			if(isset($_SESSION['name'])){
				$comment_author=$_SESSION['name'];
				$comment_insert="insert into cw_comments(post_id,comment_author,comment_content,comment_date) values ('".$post_id."','".$comment_author."','".$comment_content."',now())";
				if(mysql_query($comment_insert)){
					
				}else{
					echo '<h1 style="color:red">评论失败</h1>';
				}
			}else{
				echo '<h1 style="color:red">请先登陆</h1>';
			}	
			}else{
				echo '<h1 style="color:red">评论内容不能为空</h1>';
			}	
		}
		$post_query="select * from cw_posts where post_id='".$post_id."'";
		$comment_query="select * from cw_comments where post_id='".$post_id."'";	
		$result=mysql_query($post_query);
		$c_result=mysql_query($comment_query);
		$row=mysql_fetch_array($result);
		mysql_free_result($result);
	?>
		<div id="cw-content-other">
			<div id="post-box">
				<div id="post-title">
					<h2><?php echo $row["post_title"]?></h2>
					<label class="post-head">时间：<span><?php echo $row["post_date"]?></span></label>
					<label class="post-head">作者：<span><?php echo $row["post_author"]?></span></label>				
				</div>
				<div id="post-content">
					<?php 
						echo $row["post_content"];
					?>		
				</div>
				<div id="comment-box">
					<?php 
					while($crow=mysql_fetch_array($c_result)){
					echo '<div class="comment-items">
							<h3>comments by '.$crow["comment_author"].'</h3>
							<p>'.$crow["comment_content"].'</p>
						</div>';
					}
						mysql_free_result($c_result);
						$db_handler->db_close();
				?>
				</div>
			</div>
			<div id="cw-new-comment">
				<form action="post_details.php?<?php echo 'post_id='.$post_id?>" method="post">
					<label>
						<input type="text" name="comment" class="input-text"/>
						<input type="submit" value="评论" class="input-submit"></label>
				</form>
			</div>
		</div>
<?php
	include ('footer.php'); 
?>