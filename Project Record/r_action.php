<?php
		session_start();
		if(isset($_SESSION['login']))
		{
include 'header.php';
?>
<a href="../research.php"><img src="./images/back.png" style="float:left;" /></a>
		<div class="body">
		<div class="content">
		
		<div align="center" style="border: 1px solid #999;
		width:90%;
		height:auto;
		overflow:hidden;
		box-shadow:0px 2px 2px 2px #ddd;
		margin:1em;
		padding:1em;">
		</style><button onclick="window.back();" style="float:left">BACK</button>
			<h3><font color="navy">RESEARCH AREAS AND TOPICS IN <?php echo $_GET['r_department']; ?> DEPARTMENT</font></h3>
<?php
	include "connect.php";
		$query=mysqli_query($con, "SELECT * FROM `research` WHERE `r_department`='".$_GET['r_department']."'");
		echo '<table cellspacing="10">
		<tr><td><b>RESEARCH AREAS</b> </td><td><b>TOPIC</b></td></tr>';
		while ($row=mysqli_fetch_assoc($query))
		{
			echo '<tr><td>'.$row['r_area'].':</td><td>'.$row['r_topic'].'</td></tr>';
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
