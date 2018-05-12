<?php
		session_start();
		if(isset($_SESSION['signed_in']))
		{
include 'header.php';
?>
		<div class="body" align="center">
		<a href="../welcome.php"><img src="./images/back.png" style="float:left;" /></a>
		<style>
		fieldset{width:50%;}
		td{padding-right:3em;}
		td img{border:solid 1px black;}
		</style>
		<fieldset>
		<legend>CONTROL PANEL/SYSTEM SETTINGS</legend>
		<h3>Administrative Tasks.</h3>
		<table cellspacing="15">
		<tr><td><a href="section.php"><img src="./images/library2.jpg" height="150" title="Add New Section" /></a></td>
		<td><a href="add_books.php"><img src="./images/books2.jpg" height="150" title="Add New Book" /></a></td></tr>
		<tr><td><a href="view_books.php"><img src="./images/book.jpg" height="150" title="Add New Book" /></a></td>
		<td><a href="research.php"><img src="./images/ra.png" height="150" title="Research Areas" /></a></td></tr>
		<tr><td><p><a href="admin.php"><img src="./images/admin.jpg" height="150" title="System Administrator" /></a></td>
		<td><a href="users.php"><img src="./images/user.jpg" height="150" title="System Users" /></a></td></tr>
		</table>
		</fieldset>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>
