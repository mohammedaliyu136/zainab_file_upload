<?php
session_start();
	if(isset($_SESSION['login']))
		{
include 'header.php';
?>
		<div class="body">
		<marquee behavior="alternate">
		<b>NUN ONLINE STUDENT PROJECT RECORD SYSTEM.</b>
		</marquee>

		<div class="content">
<font style="float:left;"><?php echo 'Welcome <font  color="blue"><b>'.$_SESSION['name'].'</b></font>'; ?></font><br />
		<div style="float:left; width:60%;
		border:solid 1px lightgray; 
	height:auto; 
	overflow:hidden; 
	margin:1%; 
	 padding:1%; 
	box-shadow:0px 2px 2px 2px #ddd; 
	border-radius:15px;
		">
		<img src="images/Nile-University-VC.png" style="float:left; padding-right:2%;" />
<p><b>WELCOME TO NILE UNIVERSITY!</b><br />
Dear students,

I wish to welcome both the returning and all our fresh students to the serene and student friendly campus of the Nile University of Nigeria for the new academic session. I wish to congratulate the returning students on their success at the last session’s examination. I also rejoice with the fresh students on their admission to the University this session.

You have passed through a period and entered into a new level where you will be held accountable for some of your actions. Therefore, what you will learn here will be necessary tools needed throughout your life via the quality of education acquired here. I assure you that the quality of education delivery at Nile University of Nigeria is of international standard.

The need to provide both the returning and fresh students with adequate and current information on the activities of the University in order to bridge communication gap informed the review of the existing student’s handbook. This handbook is an authoritative source of information necessary for the guidance of all students throughout the duration of their stay in the University. Therefore all students should endeavour to collect the handbook from their various Departments, study and acquaint themselves with information therein.

It is pertinent for all new students to note that the various activities (both social and academic) engaged in while on campus, will earn points that would cumulatively reflect in the final transcript.

Nile University of Nigeria is in collaboration with many International Universities. Recently, we signed special MoUs with two International Universities to embark on exchange programmes. This is an opportunity to be explored by students. Students should research the courses available for the exchange programme and discover new internship opportunities to enhance practical exposure and widen their knowledge and experience.

Students should take advantage of the language courses offered at Nile University of Nigeria to develop themselves, be relevant and impactful on the multi-cultural African society and the world at large. These language courses could be taken as minors or part of double majors; the opportunities are endless here.

New students should ensure that they attend the yearly orientation program conducted by the University at the beginning of their academic semester.  This program affords them the opportunity of meeting the Heads of Departments (HoDs) officially, for the first time. It is also at this gathering that they will get acquainted with the University general rules and regulations, lecture venues, libraries, etc.

In fact, it is important to establish and maintain cordial relationship with your Heads of Departments (HoDs). Endeavour to check the H.O.D’s office and notice boards from time to time to be abreast of current events at the department.

I wish to inform all fresh students that Nile University of Nigeria offers the opportunity for them to network and make friends with people from various nationalities, cultural backgrounds and professions. One avenue where contacts can be established is in the University social clubs.

Interested students who wish to take advantage of the existence of the various social clubs in the University to develop their hobbies, leadership & inherent skills and make friends are advised to contact the Student Affairs Division for guidance. It is our expectation that all your energies, time and resources will always be directed to things that are noble and constructive.

Students should feel free to visit the career planning centres to be informed about prospective job offers. You should also participate in the activities of the Alumni Association to keep in touch with your friends even after graduation.

To the returning students, time passes swiftly, and your University education will be completed in a short time. It is only imperative that you learn to use all the detailed information acquired from your lecturers, library (research), information technology, and even from this website effectively. Get relevant information about e-learning and distant education programs that can be of use to you in future.

Keep track of activities in the University and actively participate in them; take notes, and ask questions. Try to attend programmes organized by different Departments and Faculties related to your course of study.

I am very delighted to inform you that the School of Postgraduate Studies has taken off and hope you will take advantage of it to do your master programme here.

Globalisation has reached the point of ‘localisation’ lately, in which local features are considered while trying to think and act globally. In other words, while being global on one hand, do not forget your local values, traditions, cultures, society and language on the other hand. That is why at Nile University of Nigeria, we also pay attention to your moral, social, ethical and religious development.

Dear students, let me emphasize here that there is no short road to any place worth going because only a serious approach can guarantee a glorious and excellent result. That is, to be successful, the opportunity you have to study at Nile University of Nigeria must be consolidated with adequate preparation.

Once again, I welcome all new students to Nile University of Nigeria and wish you all success in 2016/2017 academic year.</p>
<p>Prof. Dr. Huseyin Sert M.D  </p>
<p>Vice Chancellor,
  Nile University of Nigeria </p>
<div style="margin-top:19%;">
		<h3 align="center"><u>What is a Project?</u></h3>
		<p><img src="./images/p.jpg" style="width:98%;"/></p>
		In contemporary business and science a project is defined as a collaborative enterprise, 
		involving research or design, that is carefully planned to achieve a particular aim.
Projects can be further defined as temporary rather than permanent social systems or work systems that are constituted by teams within or across organizations to accomplish particular 
tasks under time constraints. An ongoing project is usually called (or evolves into) a program.
		</div>
		</div>
		<div style="
	height:auto; 
	overflow:hidden; 
	width:35%; 
	border-left:solid 1px lightgray;
	margin-top:1%;
	float:right;
		">
		<ul>
		<b style="color:green;"><u><a href="www.Nile university.edu.ng">NUN News Flash</a></u></b>

		    <font size="2">More information can be gotten from the university website.</font></li>
		
		</u>

		
		</div>
		</div>
		</div>
<?php include 'footer.php';
		}
else { header("location:index.php"); }
	?>