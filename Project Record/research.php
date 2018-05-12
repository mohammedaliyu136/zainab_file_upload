<?php
		session_start();
		if(isset($_SESSION['login']))
		{
include 'header.php';
?>

		<div class="body">
		<div class="content">
		
		<div align="center" style="border: 1px solid #999;
		width:90%;
		height:auto;
		overflow:hidden;
		box-shadow:0px 2px 2px 2px #ddd;
		margin:1em;
		padding:1em;">
			<h3><font color="navy">NUN DEPARTMENTS</font></h3>
            <?php
	include "connect.php";
	$path="./admin/photos/";
		$query=mysqli_query($con, "SELECT * FROM `research`");
		
		while ($row=mysqli_fetch_assoc($query))
		{
			echo'<ul>
					<li><a href="r_action.php?r_id='.$row['r_id'].' & r_department='.$row['r_department'].'">
					
					'.$row['r_department'].'
					</a></li>
					</ul>';
		}
		?>
		</div>
		</div>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>
