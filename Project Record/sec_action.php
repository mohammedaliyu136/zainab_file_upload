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
		<div style="border:0px;" align="right">
			<form method="post" action="s_action.php">
			<input type="text" name="searchtxt" placeholder="Enter Topic or author" size="30" /> 
			<input type="hidden" value="<?php error_reporting(0); echo $_GET['sec_id']; ?>" name="sec" /> 
			<input type="submit" name="submit" value="Search" />
			</form>
			</div>
		
			<h3><font color="navy">PROJECTS IN THE <?php echo $_GET['sec_name']; ?> SECTION</font></h3>
<?php
	include "connect.php";
		$query=mysql_query("SELECT * FROM `projects` WHERE `rec_dept`='".$_GET['sec_id']."'");
			echo '<table cellspacing="5" cellpadding="10">';
			if(mysql_num_rows($query)!=0)
			{
		echo '<tr><td><b><u>PROJECT TITLE</u></b></td><td><b><u>AUTHOR</u></b></td><td><b></b></td></tr>';
		while ($row=mysql_fetch_assoc($query))
		{
			echo '<tr><td>'.$row['rec_topic'].'</td><td>'.$row['rec_author'].'</td>
			<td><a href="pro_action.php?rec_id='.$row['rec_id'].'">View Project</a></td></tr>';
		}
		echo '</table>';
			}
		else { echo'<h1>NO PROJECTS FOUND!</h1>';}
		?>
		</div>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>
