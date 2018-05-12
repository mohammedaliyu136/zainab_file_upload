<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
	"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html lang="en" xml:lang="en">
	<head>
		<title>PROJECT RECORD |NUN|</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<link rel="shortcut icon" type="image/jpeg" href="./images/nile.png" />
		<script language="javascript" type="text/javascript">
		$(document).ready(function(){
			$('#menu_items a').each(function(index) {
				if(this.href.trim() == window.location)
					$(this).addClass("selected");
			});
		});
		function check()
			{
				var x=document.regForm;
				var re;	
			if(x.name.value.length == 0)
			{
				alert("You Must enter your Name");
				x.name.focus();
				return false;
			} 
			if(x.dob.value == "")
			{
				alert("You Must enter your Date of Birth");
				x.dob.focus();
				return false;
			}
			re = /[a-z]/;
			if(re.test(x.dob.value))
			{
				alert("Incorrect Date of Birth");
				x.dob.focus();
				return false;
			} 
			re = /[A-Z]/;
			if(re.test(x.dob.value))
			{
				alert("Incorrect Date of Birth");
				x.dob.focus();
				return false;
			} 
			re = /[@,#,$,%,^,&,(,),_,=,+,!,|,~,?,.,*,',",,-,{,},;,:,<,>,\[,\], ]/;
			if(re.test(x.dob.value))
			{
				alert("Incorrect Date of Birth");
				x.dob.focus();
				return false;
			} 
			var sexEmpty = true;
			for (i=0; i<x.sex.length; i++) {
			if (x.sex[i].checked) {
			sexEmpty = false;
			}
			}
			if(sexEmpty)
			{
				alert("You must select your Sex");
				return false;
			} 
			if(x.lga.value.length == 0)
			{
				alert("You Must enter your L.G.A");
				x.lga.focus();
				return false;
			} 
			if(x.state.value.length == 0)
			{
				alert("You Must enter your State");
				x.state.focus();
				return false;
			} 
			if(x.country.value.length == 0)
			{
				alert("You Must enter your Country");
				x.country.focus();
				return false;
			} 
			if(x.score.value.length == 0)
			{
				alert("You Must enter your UTME score");
				x.score.focus();
				return false;
			} 
			if(x.no.value.length == 0)
			{
				alert("You Must enter your UTME Reg. Number");
				x.no.focus();
				return false;
			} 
			if(x.subjects.value.length == 0)
			{
				alert("You Must enter your UTME Subjects");
				x.subjects.focus();
				return false;
			} 
			if(x.image.value == "")
			{
				alert("You Must Select your Photo");
				return false;
			} 
			if(x.courses.value == "")
			{
				alert("You Must Choose the Course you want to Apply for.");
				return false;
			} 
			if(x.address.value.length == 0)
			{
				alert("You Must enter your Address");
				x.address.focus();
				return false;
			}
			if(x.email.value.length == 0)
			{
				alert("You Must enter your Email");
				x.email.focus();
				return false;
			}
			re = /[#,$,%,^,&,(,),\\,=,+,!,|,~,?,*,',",,-,{,},;,:,<,>,\[,\], ]/;
			if(re.test(x.email.value))
			{
				alert("Email contains Invalid Characters!");
				x.email.focus();
				return false;
			} 
			re = /[@]/;
			if(!re.test(x.email.value))
			{
				alert("Missing  '@'  in Email");
				x.email.focus();
				return false;
			} 
			re = /[.]/;
			if(!re.test(x.email.value))
			{
				alert("Missing  '.'  in Email");
				x.email.focus();
				return false;
			} 

			if(x.agree.checked == false)
			{ 
				alert("You Must Agree to the Condition Above!");  
				return false;
			}
			return true; 
		
			}
			</script>			

		
	</head>

	<body>
		<header>
<img src="./images/header.png" style="position:relative; left:10%;" />
		</header>
	<div class="menu" id="menu_items">
	  <ul>
		<li><a href="welcome.php">HOME</a></li>
		<li><a href="about.php">ABOUT</a></li>
		<li><a href="sections.php">DEPARTMENTS</a></li>
		<li><a href="books.php">PROJECTS</a></li>
		<li><a href="search.php">SEARCH</a></li>
		<li><a href="research.php">RESEARCH</a></li>
		<li><a href="admin/index.php">ADMIN.</a></li>
	  </ul>
		</div>
	