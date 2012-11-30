<?php 
	include ('header.php');
	$xml_class_info=simplexml_load_file('../xml/class_info.xml');
?>
		<div id="cw-content-other" >
		<div id="cw-class-info">
			<table>
				<caption style="font-size: 30px;">班级成员</caption> 
			<tr><th>姓名</th><th>职务</th><th>宿舍</th><th>手机号</th></tr>
			
			<?php  
				foreach ($xml_class_info as $student) {
					echo "<tr><td>$student->name</td><td>$student->position</td><td>$student->dormitory</td><td>$student->telephone</td></tr>";
				}
			?>
			</table>
			</div>
		</div>
<?php
	include ('footer.php'); 
?>