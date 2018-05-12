<?php
session_start();
	if(isset($_SESSION['login']))
		{
include "header.php";
?>
<div class="body">
		<div class="content">

									<p><font size="5" color="navy"><u><b>About the Software</b></u></font></p>
									<font size="4" color="green">
									

In contemporary business and science a project is defined as a collaborative enterprise, 
		involving research or design, that is carefully planned to achieve a particular aim.
Projects can be further defined as temporary rather than permanent social systems or work systems that are constituted by teams within or across organizations to accomplish particular 
tasks under time constraints. An ongoing project is usually called (or evolves into) a program.

									<p>The aim of developing this system is to create a digital interface where students can check up for project topics as well as project supervisors who tend to check the existence of a project</p>
									<p>The software is designed to be used by lecturers and the students of the university.</p>
									
									</font>
									<font size="5" color="navy"><u><b>About the Developer</b></u></font>
									<font size="4" color="green">
									<p>This software was created by HADIZA M. ABDULLAHI from the department of computer science, Nile university of nigeria.</p>
									<p>The software was developed under the model of <a href="http://www.facebook.com/scarcitydcoded">DIGITAL NIGERIA INITIATIVE</a>, an innovative 
									and technologically oriented organization aimed at promoting creativity and innovation amongst Nigerian youths.<br>
									<p>
									</font>
</div>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>