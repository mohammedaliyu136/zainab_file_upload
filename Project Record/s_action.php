<?php
		session_start();
		if(isset($_SESSION['login']))
		{
	include 'header.php';
?>
		<div class="body">

		<div class="content" align="center">
		
		<style>
		li{margin-top:2%; font-weight:bold;}
		</style><button onclick="window.back();" style="float:left">BACK</button>
		
		<?php
	if(isset($_POST['submit']))
	{
		if(!empty($_POST['searchtxt'])) 
		{
		include "connect.php";
		$query=mysql_query("SELECT * FROM `projects` WHERE `rec_dept`= '".$_POST['sec']."' AND `rec_topic` LIKE '%".$_POST['searchtxt']."%' OR `rec_author` LIKE '%".$_POST['searchtxt']."%'");
		if(mysql_num_rows($query)!=0)
			{
		echo '<table cellspacing="5" cellpadding="10">';
		echo '<tr><td><b><u>PROJECT TITLE</u></b></td><td><b><u>AUTHOR</u></b></td><td><b></b></td></tr>';
		while ($row=mysql_fetch_assoc($query))
		{
			echo '<tr><td>'.$row['rec_topic'].'</td><td>'.$row['rec_author'].'</td>
			<td><a href="pro_action.php?rec_id='.$row['rec_id'].'">View Project</a></td></tr>';
		}
		echo '</table>';
			}
		else { echo'<h1>PROJECT NOT FOUND!</h1>';}
		}
			else { echo'<h1>YOU MUST ENTER THE PROJECT NAME TO SEARCH FOR!</h1>';}

	}
			?>
		</div>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>