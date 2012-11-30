<?php 
	include ('header.php');
	include('db-connect.php');
?>
		<div id="cw-content-other" style="height: 600px">
		<div id="cw-new-post"><a href="../ueditor/post-new.php">写文章</a></div>
		<div id="cw-post" style="width: 700px ;position: relative;left:50px;">
			<div class="cw-post-box">
				<?php 
				    $page_size=5;
					if(isset($_GET["page_no"])){
						$page_no=$_GET["page_no"];
					}else{
						$page_no=0;
					}
				  $db_handler=new DBHandler;
				  $start=$page_no*$page_size;
				  $query_post="select * from cw_posts order by post_date desc limit $start,$page_size";
				  $query_size="select count(*) from cw_posts";
				  $post_counts=mysql_fetch_array(mysql_query($query_size));
				  $result=mysql_query($query_post);
				  while($row=mysql_fetch_array($result)){
					  echo '<div class="cw-post-item">
				<img src="../images/cw_post_items_bg.png"/><label>作者:<span>'.$row["post_author"].'</span></label><label>时间:<span>'.$row["post_date"].'</span></label>
					<a href="post_details.php?post_id='.$row["post_id"].'">'.$row["post_title"].'</a>
				</div>';
				  }
				  mysql_free_result($result);
				  $db_handler->db_close();
				?>
			</div>
			<div id="post-page-nav">
				<ul>
					<?php 
						for($i=1;$i<$post_counts[0]/$page_size+1;$i++)
				  		 echo	'<li><a href="blog.php?page_no='.($i-1).'">'.$i.'</a></li>';
					?>
				</ul>
			</div>
		</div>
		</div>
<?php
	include ('footer.php'); 
?>