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
footer
{
text-align:center;
padding:1 rem 0;
background-color:#333;
color:#fff;
}
</style>
</head>
<header>
<div class="header-content">
<img src="archana.jpg"alt="Your Profile Picture"class="profile-picture">
<h1>Archana.S</h1>
<p>I'm a BCA Student</p>
</div>
</header>
<p class="header">Education :</p>
<ul>
<li>School:Purushothaman Pillai Memorial Higher Secondary School Anducode.</li>
<li>Collegr:Nesamony Memorial Christian College Marthandam.</li>
</ul>
<p class="header">Interest :</p>
<ul>
<li>Computer<li>Drawing</li>
</ul>
<p class="head">Skills :</p>
<ul>
<li>Web Design with HTML&CSS</li>
</ul>
<p class="head">Extracurriculars :</p>
<ul>
<li>Red Cross</li>
</ul>
</div>
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









