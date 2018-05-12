<?php
		session_start();
		if(isset($_SESSION['login']))
		{
include 'header.php';
?>
		<div class="body">
		<div class="content">
		<div style="border: 1px solid #999;
		width:93%;
		height:auto;
		box-shadow:0px 2px 2px 2px #ddd;
		margin:1em;
		padding:1em;">
		<style>
		td{margin-
		</style>
		<button onclick="window.back();" style="float:left">BACK</button>
		<?php
	include "connect.php";
		$query=mysqli_query($con, "SELECT * FROM `projects` WHERE `rec_id`='".$_GET['rec_id']."'");
		echo '<table cellspacing="10">';
		while ($row=mysqli_fetch_assoc($query))
		{
			echo '<tr><td><b>PROJECT TITLE:</b> </td><td>'.$row['rec_topic'].'</td></tr>
			<tr><td><b>PROJECT AUTHOR:</b></td><td>'.$row['rec_author'].'</td></tr>
			<tr><td><b>YEAR:</b></td><td>'.$row['rec_year'].'</td></tr>
			<tr><td><b>SUPERVISOR:</b></td><td>'.$row['rec_sup'].'</td></tr>
			<tr><td><b>DEPARTMENT<b></td><td>';
			$r=mysqli_fetch_assoc(mysqli_query($con, "SELECT* FROM `sections` WHERE `sec_id`='".$row['rec_dept']."'")); echo $r['sec_name']; 
			echo '</td></tr>';
			echo '<tr><td colspan="2">
			<fieldset>
			<legend><b>PROJECT OVERVIEW (ABSTRACT)</b></legend>
			'.$row['abstract'].'</fieldset></td></tr>';

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
