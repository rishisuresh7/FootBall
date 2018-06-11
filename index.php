<?php
	session_start();
	if(isset($_SESSION['id'])){
		session_unset();
	}
?>
<html>
<head>
	<title>FootBall</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mainmenu.css">
	<link rel="stylesheet" type="text/css" href="css/carousel.css">
	<link rel="stylesheet" type="text/css" href="css/searchbar.css"/>
	<link rel="stylesheet" type="text/css" href="css/searchresult.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="js/scroll.js"></script>
	<script type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
	<div id="main">
		<div id="icon">
			<div id="lines">
			</div>
		</div>
		<div id="menu">
			<div id="m1"><a href="#slideshow" id="link1" >Home</a></div>
			<div id="m2"><a href="#box2" id="link2" >About</a></div>
			<div id="m3"><a href="#box3" id="link3" >Search</a></div>
			<div id="m4"><a href="#box4" id="link4" >Contact</a></div>
		</div>
	</div>
	<div id="box1">
		<div id="carousel">
			<div id="slideshow" class="cycle-slideshow" data-cycle-speed="1500" data-cyle-timeout="1000" >
				<img src="images/1.jpg">
				<img src="images/2.jpg">
				<img src="images/3.jpg">
				<img src="images/4.jpg">
				<img src="images/5.jpg">
				<img src="images/rooney.jpeg">
			</div>
			<div id="carousel-text">
				<div class="text1">
					<h1>Welcome To The World Of Football</h1>
				</div>
				<div class="text2">
					<p>Get to know about your favorite Teams and Players in Football</p>
				</div>
			</div>
		</div>
	</div>
	<div id="box3">
		<div class="bar searchbar">
			<form method="POST" id="submit-form">
				<input type="search" id="search" placeholder="You May Choose..." onkeyup="searchitem();" autocomplete="off"/>
				<a id="search-icon" class="glyphicon glyphicon-search"></a>
				<script type="text/javascript" src="js/searchbar.js"></script>
				<!-- If changed this position the default mouse event wont work-->
			</form>
		</div>
		<div class="container-fluid">
			<hr id="hr1">
			<div class="row">
				<div id="output">
				</div>
			</div>
			<hr id="hr2">
		</div>
	</div>
	<div id="box2">
		<div id="conatiner">
			<div id="dock1">
				<img src="images/blackgun.jpg">
				<p>A Creative Man is motivated by the desire to achieve, not by the desire to beat others.</p>
				<h2>Nitish Mehta</h2> 
				<h3>1MV15CS070</h3>          
			</div>
			<div id="dock2">
				<img src="images/blackgun.jpg">
				<p>Quality is never an accident but a result of intelligent effort.</p>
				<h2>Rishi Suresh</h2>
				<h3>1MV15CS084</h3>           
			</div>
		</div>
	</div>
	<div id="box4">
		<div id="leftcontactdock">
			<h2>Admin Login</h2>
			<form action="submit.php" method="post">
				<div class="inputbox">
					<input type="text" name="username" maxlength="5" required autocomplete="off">
					<label>Username</label>
				</div>
				<div class="inputbox">
					<input type="password" name="password" maxlength="8" required autocomplete="off">
					<label>Password</label>
				</div>
				<input type="submit" name="submit" value="Login">
			</form>
		</div>
		<div id="rightcontactdock">
			<h2><strong>Nitish Mehta</strong></h2>
			<h4>--> 10.nitish.mehta.10@gmail.com</h4>
			<h4>--> +91-8095260687</h4>
			<h2><strong>Rishi Suresh</strong></h2>
			<h4>--> rishisuresh9632@gmail.com</h4>
			<h4>--> +91-8792615476</h4>
		</div>
	</div>
	<script type="text/javascript" src="js/mainmenu.js"></script>
</body>
</html>