<!DOCTYPE html>
<html>
<head>
<title>Your Name - Porttolio</title>
<style>
body
{
font-family:Ariel,sans-serif;
margin:0;
padding:0;
background-color:#f0f0f0;
}
header
{
background-color:#333;
color:#fff;
text-align:center;
padding:2rem 0;
position:relative;
}
.header-content h1
{
font-size:2.5 rem;
}
.profile-picture{
width:100px;
height:100px;
border-radius:75%;
object-fit:cover;
position:absolute;
top:75px;
left:75px;
}
nav
{
background-color:#333;
color:#fff;
text-align:center;
}
nav ul{
list-style-type:none;
padding:0;
}
nav ul li{
display:inline;
margin:0 20px;
}
nav ul li{
text-decoration:none;
color:fff;
}
.section-content{
background-color:#fff;
padding:2 rem;
margin:1 rem;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}
.download-button{
background-color:#555;
color:#fff;
padding:0.5 rem 1rem;
text-decoration:none;
border-radius:20px;
display:inline-block;
margin-top:5px;
}
.download-button:hover{
background-color:aqua;
}
footer
{
rext-align:center;
padding:1 rem 0;
background-color:#333;
color:#fff;
}
ul
{
list-style-type:square;
padding-left:20px;
}
</style>
</head>
<header>
<div class="header-content">
<img src="archana.jpg"alt="Your Profile Picture"class="profile-picture">
<h1>Archana.S</h1>
<p>BCA Student</p>
</div>
</header>
<nav>
<ul>
<li><a href="#about">About</a></li>
<li><a href="#education">Education</a></li>
<li><a href="#skills">Skills</a></li>
<li><a href="#projects">Projects</a></li>
<li><a href="#resume">Resume</a></li>
</ul>
</nav>
<section id="about">
<div class="section-content">
<h2>About me</h2>
<p> Hey Friends I'm Archana  I'm a BCA student
</p>
</div>
</section>
<section id="education">
<div class="section-content">
<h2>BCA</h2>
<p>Nesamony Memorial Christian College Marthandam
</p>
</div>
</section>
<section id="skills">
<div class="section-content">
<h2>Skills</h2>
<ul>
<li>HTML</li>
<li>CSS</li>
</ul>
</div>
</section>
<section id="project">
<div class="section-content">
<h2>project</h2>
<ul>
<li><a href="voterid.php">Project</a></li>
<li><a href="Userlogin.php">Project</a></li>
</ul>
</div>
</section>
<section id="resume">
<center>
<div class="section-content">
<h2>Resume</h2>
<a href ="resume1.php"class="download-button">Download CV</a>
</div>
</center>
</section>
<footer>
<center>
<p>&copy;2023 Archana.S</p>
</center>
</footer>
<script>
document.queryselectorAll('a[href^="#"]').forEach(anchor=>{
anchor.addEventListener('click;,function(e){
e.preventDefault();
const targetId=this.getAttribute('bref').substring(1);
const targetElement=document.getElementById(targetId);
if(targetElement){
window.scrollTo({
top:targetElement.offsetTop,behavoir:'smooth';
});
}
});
});
</script>
</body>
</html>









