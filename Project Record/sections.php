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
		$query=mysqli_query($con, "SELECT * FROM `sections`");
		
		while ($row=mysqli_fetch_assoc($query))
		{
			echo'<div style="float:left; 
								width:30%;
								height:230px;
								margin:1%;
								margin-left:13%;
								padding:1%;
								box-shadow:0px 2px 2px 2px #ddd; border-radius:10px; border:solid 2px gray;" align="center">
					<a href="sec_action.php?sec_id='.$row['sec_id'].' & sec_name='.$row['sec_name'].'">
					<img src="'.$path.$row['photo'].'"  width="210" height="190"/>
					<br />'.$row['sec_name'].'
					</a>
					</div>';
		}
		?>
		</div>
		</div>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>
