<?php
		session_start();
		if(isset($_SESSION['login']))
		{
include 'header.php';
?>
		<div class="body">
<div  style="border:1px solid #999;
		position:relative; 
		width:45%;
		height:auto;
		float:left;
		margin:1%;
		padding:10px;">
		
		<form method="POST" action="search.php" name="regForm">
			<p>Search By: <input type="radio" name="searchby" value="rec_topic" />Project Topic
			<input type="radio" name="searchby" value="rec_year" />Project Year</p>
			<p><input type="text" name="searchtxt" placeholder="Enter search Term" size="40" />
			<input type="submit" name="search" value="SEARCH" style="background-color:yellowgreen; padding:1%; border-radius:5px; cursor:pointer; color:#fff;
		font-weight:bold;"  /></p>

		</form>
		</div>
		
		
		<div  style="border-left: 1px solid #999;
		position:relative; 
		width:45%;
		height:auto;
		float:left;
		margin:1%;
		padding:1%;">
		
<?php
if(isset($_POST['search']))
{
include "connect.php";
	if(!empty($_POST['searchtxt']) && !empty($_POST['searchby']))
	{
		$select="SELECT * FROM `projects` WHERE(`".$_POST['searchby']."` LIKE '%".$_POST['searchtxt']."%')";
		$query=mysql_query($select);
		if($query)
		{
			if(mysql_num_rows($query) == 0)
			{
				echo '<h3>No Result For The Search</h3>';
			}
			else
			{
			echo "<h3>Search Results for '".$_POST['searchtxt']."'</h3>";
				while($row=mysql_fetch_assoc($query))
				{
				echo '<p><a href="pro_action.php?rec_id='.$row['rec_id'].'">'.$row['rec_topic'].' BY '.$row['rec_author'].'</a></p>';
				}
			}
				
		}
		else { echo 'Error while Searching.'.mysql_error(); }
	}
	else
	{
		echo '***FIELDS CANNOT BE BLANK.***';
	}
}

?>
		
		</div>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>
