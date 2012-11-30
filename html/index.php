<?php 
	include ('header.php');
	include('db-connect.php');
?>
		<div id="cw-content">
		<div id="slider">

					 <ul id="sliderContent">
                        <li class="sliderImage">
                            <a href="#" target="_blank"><img src="../gallery/1.jpg" alt="1" /></a>
                            <span class="bottom"><strong>Photo 1</strong><br /></span>
                        </li>
                        <li class="sliderImage">
                            <a href="#" target="_blank"><img src="../gallery/2.jpg" alt="2" /></a>
                            <span class="bottom"><strong>Photo 2</strong><br /></span>
                        </li>
                        <li class="sliderImage">
                            <a href="#" target="_blank"><img src="../gallery/3.jpg" alt="3" /></a>
                            <span class="bottom"><strong>Photo 3</strong><br /></span>
                        </li>
                        <li class="sliderImage">
                            <a href="#" target="_blank"><img src="../gallery/4.jpg" alt="4" /></a>
                            <span class="bottom"><strong>Photo 4</strong><br /></span>
                        </li>
                         <li class="sliderImage">
                        </li>
                        
                    </ul>
				</div>
		<div id="cw-message">
			<div class="label-title">重要通知</div>
			<ul>
				<li><a href="http://202.194.15.128/ReadNews.asp?NewsId=4541" title="关于进行2014届本科学生普通话水平测试报名工作的通知 ">
					关于进行2014届本科学生普通话水平测试报名工作的通知 </a></li>
				<li><a href="http://www.sc.sdu.edu.cn/getNewsDetail.do?newsId=6439" title="关于举办山东大学软件园校区第一届曙光杯并行程序设计竞赛的通知 ">
					关于举办山东大学软件园校区第一届曙光杯并行程序设计竞赛的通知</a></li>
				<li><a href="http://www.sc.sdu.edu.cn/getNewsDetail.do?newsId=6429" title="关于申报山东大学2012年度软件学院学生科技创新项目奖的通知">
					关于申报山东大学2012年度软件学院学生科技创新项目奖的通知</a></li>
				<li><a href="http://www.online.sdu.edu.cn/news/article.php?pid=636516800" title="关于选拔本科生担任2012年度校长奖学金评审会评委的通知 ">
					关于选拔本科生担任2012年度校长奖学金评审会评委的通知</a></li>
				<li><a href="http://www.online.sdu.edu.cn/news/article.php?pid=636516839" title="关于组织学生认真学习宣传贯彻党的十八大精神的通知 ">
					关于组织学生认真学习宣传贯彻党的十八大精神的通知</a></li>
				<li><a href="http://202.194.15.128/ReadNews.asp?NewsID=4539" title="2012-2013学年第一学期期中学生评教参评情况通报 ">
					2012-2013学年第一学期期中学生评教参评情况通报 </a></li>
			</ul>
			<a class="cw-more" href="http://202.194.15.128">更多</a>;
		</div>
		<div id="cw-post">
			<div class="label-title">博文</div>
			<div class="cw-post-box">
				<?php 
				  $db_handler=new DBHandler;
				  $query_post="select * from cw_posts order by post_date desc limit 2";
				  $result=mysql_query($query_post);
				  for($i=0;$i<2;$i++){
				  	$row=mysql_fetch_array($result);
					  echo '<div class="cw-post-item">
				<img src="../images/cw_post_items_bg.png"/><label>作者:<span>'.$row["post_author"].'</span></label><label>时间:<span>'.$row["post_date"].'</span></label>
					<a href="post_details.php?post_id='.$row["post_id"].'">'.$row["post_title"].'</a>
				</div>';
				  }
				  mysql_free_result($result);
				  $db_handler->db_close();
				?>
			
			</div>
			<a class="cw-more" href="blog.php">更多</a>
		</div>
		<div id="cw-friend-link">
			<div class="label-title">友情链接</div>
			 <table width="249" border="0">
                      <tr>
                        <td align="left"><a href="http://cnblogs.com" target="_new">◆博客园</a></td>
                        <td align="left"><a href="http://cgbt.cn/" target="_new">◆晨光BT</a></td>
                      </tr>
                      <tr>
                        <td align="left"><a href="http://www.online.sdu.edu.cn/" target="_new">◆学生在线</a></td>
                        <td align="left"><a href="http://www.youth.sdu.edu.cn/" target="_new">◆青春山大</a></td>
                      </tr>
                        <tr>
                        <td align="left"><a href="http://202.194.15.128/" target="_new">◆教务处</a></td>
                        <td align="left"><a href="http://www.sdu.edu.cn/" target="_new">◆山东大学</a></td>
                      </tr>
                        <tr>
                        <td align="left"><a href="http://58.194.172.34/reader/login.php" target="_new">◆图书馆</a></td>
                        <td align="left"><a href="http://www.sc.sdu.edu.cn/" target="_new">◆软件学院</a></td>
                      </tr>
                  </table>
		</div>
		</div>
		<div id="cw-footer">
		<div id="cw-copyright">
				<p>
			 Copyright © 2012 <a href="#">Artwork Studio</a> | 
        		from <a href="index.php" target="_parent">10软3班</a>
        		</p>
		</div>
		</div>
	</body>
</html>