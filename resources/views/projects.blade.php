<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Everyone Can Code 2</title>
	<!--<link rel="stylesheet" type="text/css" href="">-->

	<link rel="stylesheet" href="{{ URL::asset('projects.css'); }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
	    crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Acme|Fascinate+Inline" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed" rel="stylesheet">

	<script>
		x = 0;
		id = '';
		function change(id) {
			x++;
			x = x % 2;
			document.getElementById(id).src = "images/" + id + x + ".jpg";
		}
	</script>
</head>

<body>
	<br>
	<div class="alex">Everyone Can Code</div>
	<br>
	<div class="container">
		<div class='row'>
			<hr color="grey" width="1000">
			<br><br>
			<div class="navbar">
				<a href="#projects">Projects</a>
				<a href='#skills'>Skills</a>
				<a href="#tutorials">Tutorials</a>
				<a href="#contact">Contact</a>
			</div>
		</div>
	</div>
	<br><br><br>

	<div class="container">
		<div class="container">
			<h3 id="projects">PROJECTS</h3>
			<br>
			<div class='row'> 
                <div class="col-sm">
					<a href="/farm"><p>Organic Farm</p></a>
					<img id="o" src="images/o0.jpg" alt="Organic Farm" width="150" height="115" onclick='change(this.attributes["id"].value)'>
					<br><br>
					<footer id="f">PHP + Laravel + Docker</footer>
				</div>
				<div class="col-sm">
					<a href="https://www.serenityacupuncture.ca/"><p>Acupuncture</p></a>
					<img id="a" src="images/a0.jpg" alt="Acupuncture" width="150" height="115" onclick='change(this.attributes["id"].value)'>
					<br><br>
					<footer id="f">VueJS + SPA</footer>
				</div>
				<div class="col-sm">
					<a href="comingsoonpage.html"><p>Inventory</p></a>
					<img id="i" src="images/i0.jpg" alt="Inventory" width="150" height="115" onclick='change(this.attributes["id"].value)'>
					<br><br>
					<footer id="f">JavaScript + Reactive</footer>
				</div>
				<div class="col-sm">
					<a href="comingsoonpage.html"><p>Free Know-how</p></a>
					<img id="k" src="images/k0.jpg" alt="Free Know-how" width="150" height="115" onclick='change(this.attributes["id"].value)'>
					<br><br>
					<footer id="f">Java + Spring + JUnit</footer>
				</div>
				<div class="col-sm">
					<a href="comingsoonpage.html"><p>AI Doctor</p></a>
					<img id="d" src="images/d0.jpg" alt="AI Doctor" width="150" height="115" onclick='change(this.attributes["id"].value)'>
					<br><br>
					<footer id="f">Python + Fast API</footer>
					<!--<button onclick="myFunction()">More</button>
		      <p id="demo"></p>-->
				</div>
				<div class="col-sm">
					<a href="comingsoonpage.html"><p>Beer Coin</p></a>
					<img id="c" src="images/c0.jpg" alt="Beer Coin" width="150" height="115" onclick='change(this.attributes["id"].value)'>
					<br><br>
					<footer id="f">Blockchain</footer>
				</div>
			</div>
		</div>
		<br><br><br>
		
		<div class="container">
    		<h3 id="skills">SKILLS</h3>
    		<br>
    		<div class='row'>
    		    <div class="col-sm-3">
    				<a href=https://www.w3schools.com/php/default.asp>
    					<p>PHP</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://laravel.com>
    					<p>Laravel</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://codingbat.com/java>
    					<p>Java (Coding Bat)</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://codingbat.com/python>
    					<p>Python</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://www.tutorialspoint.com/javascript/index.htm>
    					<p>JavaScript (Tutorials Point)</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://vuejs.org/guide/introduction.html>
    					<p>Vue JS</p>
    				</a>
    			</div>
				<div class="col-sm-3">
    				<a href=https://regexone.com>
    					<p>Regex</p>
    				</a>
    			</div>
				<div class="col-sm-3">
    				<a href=https://www.tutorialspoint.com/redis/index.htm/>
    					<p>Redis (Tutorials Point)</p>
    				</a>
    			</div>
				<div class="col-sm-3">
    				<a href=https://www.mysql.com>
    					<p>MySQL</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://www.phpmyadmin.net>
    					<p>PhpMyAdmin</p>
    				</a>
    			</div>
				<div class="col-sm-3">
    				<a href=https://www.docker.com>
    					<p>Docker</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://www.w3schools.com/html/default.asp>
    					<p>HTML (W3School)</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://www.w3schools.com/css/default.asp>
    					<p>CSS (W3School)</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://docs.microsoft.com/en-us/dotnet/csharp/>
    				<p>C#</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://unity3d.com>
    					<p>Unity</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://aws.amazon.com>
    					<p>AWS</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://github.com>
    					<p>Git</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://about.gitlab.com>
    					<p>GitLab</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://www.selenium.dev>
    					<p>Selenium</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://www.tutorialspoint.com/jenkins/index.htm>
    					<p>Jenkins</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://www.asp.net/mvc>
    					<p>ASP.NET MVC (Microsoft)</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://leetcode.com/problemset/all/>
    					<p>Algorithms (LeetCode)</p>
    				</a>
    			</div>
    			<div class="col-sm-3">
    				<a href=https://flatironschool.com/blog/best-websites-to-practice-coding-for-beginners/>
    					<p>Best Websites to Practice Coding</p>
    				</a>
    			</div>
			</div>
		</div>
		<br><br><br>

	    <div class="container">
			<h3 id="tutorials">TUTORIALS</h3>
			<br>
			<div class='row'>
				<div class="col-sm">
					<iframe width="230" height="170" src="https://www.youtube.com/embed/3Roxls_2W2M" frameborder="0" allowfullscreen></iframe>
				</div>

				<div class="col-sm">
					<iframe width="230" height="170" src="https://www.youtube.com/embed/Dv7gLpW91DM" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-sm">
					<iframe width="230" height="170" src="https://www.youtube.com/embed/Fkd9TWUtFm0" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-sm">
					<iframe width="230" height="170" src="https://www.youtube.com/embed/w3jLJU7DT5E" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-sm">
					<iframe width="230" height="170" src="https://www.youtube.com/embed/wFjEZw-FF_w" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-sm">
					<iframe width="230" height="170" src="https://www.youtube.com/embed/Bv_5Zv5c-Ts" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-sm">
					<iframe width="230" height="170" src="https://www.youtube.com/embed/uWYPVz_i7W4" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-sm">
					<iframe width="230" height="170" src="https://www.youtube.com/embed/X0FoelOIZM0" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
        </div>
		<br><br><br>
		
		<div class="container">
			<h3 id="contact">CONTACT</h3>
			<br>
			<div class='row'>
				<div class="col-sm-2"></div>
				<div class="col-sm-2">
					<a href="https://www.linkedin.com">
						<img id="linkedin">
					</a>
				</div>
				<div class="col-sm-2">
					<a href="https://www.facebook.com">
						<img id="facebook">
					</a>
				</div>
				<div class="col-sm-2">
					<a href="https://www.twitter.com">
						<img id="twitter">
					</a>
				</div>
				<div class="col-sm-2">
					<a href="https://www.google.com">
						<img id="google">
					</a>
				</div>
				<div class="col-sm-2">
				    
				</div>
			</div>
		</div>
		<br><br><br><br>

		<div>
			<p class="end">Copyright @ Everyone Can Code 2022</p>
		</div>
		<br><br><br>

	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
	    crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	    crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
	    crossorigin="anonymous"></script>

</body>

</html>