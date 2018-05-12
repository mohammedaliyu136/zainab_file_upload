<?php
		session_start();
		if(isset($_SESSION['login']))
		{
include 'header.php';
?>
		<div class="body">

		<div class="content" align="center">
		<div style="border: 1px solid #999;
		width:80%;
		height:auto;
		box-shadow:0px 2px 2px 2px #ddd;
		margin:1em;
		padding:1em;" align="left">
		<style>
		li{margin-top:2%; font-weight:bold;}
		</style>
			<h3><font color="navy">NEW RESEARCH AREAS <?php echo $_GET['sec_name']; ?> SECTION/CATEGORY</font></h3>
<?php
	include "connect.php";
		$query=mysql_query("SELECT * FROM `research` WHERE `r_topic`='".$_GET['r_id']."'");
			echo '<table cellspacing="5" cellpadding="10">';
		echo '<tr><td><b><u>RESEARCH AREA</u></b></td><td><b><u>RESEARCT TOPIC</u></b></td><td><b></b></td></tr>';
		while ($row=mysql_fetch_assoc($query))
		{
			echo '<tr><td>'.$row['r_area'].'</td><td>'.$row['rec_topic'].'</td>
			<td><a href="pro_action.php?rec_id='.$row['rec_id'].'">View Project</a></td></tr>';
		}
		echo '</table>';
		?>
		</div>
		</div>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>
