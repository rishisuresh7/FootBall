<?php
	$db = mysqli_connect('localhost','root','root','FOOTBALL');
	//Managers
	$mgrid = $_POST['managerid'];
	$mgrname = $_POST['mname'];
	$mgrnat = $_POST['mnationality'];
	$mgrQuery = "INSERT INTO MANAGER(MANAGER_ID,NAME,NATIONALITY) VALUES('$mgrid','$mgrname','$mgrnat')";
	if(isset($_POST['mbutton']))
	{	
		$q1 = mysqli_query($db,$mgrQuery);
		header('Location: admin.php');
	}
	//Teams id range [300-500]
	$teamid = $_POST['teamid'];
	$tname = $_POST['tname'];
	$tnation = $_POST['tnationality'];
	$logo = $_POST['logo'];
	$teammgrid = $_POST['mid'];
	$tgs = $_POST['tgs'];
	$tgc = $_POST['tgc'];
	$twins = $_POST['twins'];
	$tloses = $_POST['tloses'];
	$tdraws = $_POST['tdraws'];
	$tpoints = $_POST['tpoints'];
	$teamQuery = "INSERT INTO TEAM(TEAM_ID,TEAM_NAME,NATIONALITY,LOGO,MANAGER_ID,GOALS_SCORED,GOALS_CONCEDED,WINS,LOSES,DRAWS,POINTS) 
					VALUES('$teamid','$tname','$tnation','$logo','$teammgrid','$tgs','$tgc','$twins','$tloses','$tdraws','$tpoints')";
	if(isset($_POST['tbutton']))	
	{	
		$q2 = mysqli_query($db,$teamQuery);
		header('Location: admin.php');
	}

	//Clubs id range [600-800]
	$clubid = $_POST['clubid'];
	$cname = $_POST['cname'];
	$cnation = $_POST['cnationality'];
	$clogo = $_POST['clogo'];
	$clubmgrid = $_POST['cmid'];
	$cgs = $_POST['cgs'];
	$cgc = $_POST['cgc'];
	$cwins = $_POST['cwins'];
	$closes = $_POST['closes'];
	$cdraws = $_POST['cdraws'];
	$cpoints = $_POST['cpoints'];
	$clubQuery = "INSERT INTO CLUB(CLUB_ID,CLUB_NAME,NATIONALITY,LOGO,MANAGER_ID,GOALS_SCORED,GOALS_CONCEDED,WINS,LOSES,DRAWS,POINTS) 
						VALUES('$clubid','$cname','$cnation','$clogo','$clubmgrid','$cgs','$cgc','$cwins','$closes','$cdraws','$cpoints')";
	if(isset($_POST['cbutton']))
	{
		$q3 = mysqli_query($db,$clubQuery);
		header('Location: admin.php');
	}

	//Players id range [4000-4444]
	$id = $_POST['ID'];
	$name = $_POST['name'];
	$jno = $_POST['jno'];
	$nationality = $_POST['nationality'];
	$cid = $_POST['cid'];
	$tid = $_POST['tid'];
	$image = $_POST['image'];
	$position = $_POST['position'];
	$playerQuery = "INSERT INTO PLAYERS(ID,NAME,JERSEY_NO,NATIONALITY,CLUB_ID,TEAM_ID,IMAGE,POSITION) 
						VALUES('$id','$name','$jno','$nationality','$cid','$tid','$image','$position')";
	if(isset($_POST['pbutton']))	
	{
		$q4 = mysqli_query($db,$playerQuery);
		header('Location: admin.php');
	}

	//GOAL RECORDS
	$totgoals = $_POST['tgoals'];
	$tassists = $_POST['tassists'];
	$red = $_POST['rcards'];
	$yellow = $_POST['ycards'];
	$pid = $_POST['pid'];
	$goalQuery = "INSERT INTO GOAL_RECORD(TOTAL_GOALS,TOTAL_ASSISTS,RED_CARDS,YELLOW_CARDS,PLAYER_ID) 
						VALUES('$totgoals','$tassists','$red','$yellow','$pid')";
	if(isset($_POST['rbutton']))
	{
		$q5 = mysqli_query($db,$goalQuery);
		header('Location: admin.php');
	}

?>