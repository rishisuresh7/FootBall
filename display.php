<!DOCTYPE html>
<html>
<head>
	<title>Display Tables</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/tables.css">
</head>
<body>
<?php
	$id = $_GET['id'];
	$db = mysqli_connect('localhost','root','root','FOOTBALL');
	echo "<div class = 'container'>";
	echo "<div class = 'row'>";
	switch ($id) {
		case 'pbutton': $query = "SELECT * FROM PLAYERS";
						$res = mysqli_query($db,$query);
						echo "<center><h1>Players<h1></center>";
						echo "<table class='table table-bordered table-striped table-condensed table-hover'>
								<thead>
									<tr>
										<th class = 'col-md-1'><center>Player ID</center></th>
										<th class = 'col-md-1'><center>Name</center></th>
										<th class = 'col-md-1'><center>Jersey No</center></th>
										<th class = 'col-md-1'><center>Nationality</center></th>
										<th class = 'col-md-1'><center>Club ID</center></th>
										<th class = 'col-md-1'><center>Team ID</center></th>
										<th class = 'col-md-4'><center>Image Link</center></th>
										<th class = 'col-md-2'><center>Position</center></th>
									</tr>
								</thead>";
						while($row = mysqli_fetch_array($res)){
							echo "<tr>
									<td class = 'col-md-1'><center>$row[0]</center></td>
									<td class = 'col-md-1'><center>$row[1]</center></td>
									<td class = 'col-md-1'><center>$row[2]</center></td>
									<td class = 'col-md-1'><center>$row[3]</center></td>
									<td class = 'col-md-1'><center>$row[4]</center></td>
									<td class = 'col-md-1'><center>$row[5]</center></td>
									<td class = 'col-md-4'><center>$row[6]</center></td>
									<td class = 'col-md-2'><center>$row[7]</center></td>
								</tr>";
						}
						echo "</table>";
						echo "</div>";
						break;
		case 'mbutton': echo "<center><h1>Managers<h1></center>";
						echo "<div class = 'row'>";
						$query = "SELECT * FROM MANAGER";
						$res = mysqli_query($db,$query);
						echo "<table class='table table-bordered table-striped table-condensed table-hover'>
								<thead>
									<tr>
										<th class = 'col-md-4'><center>Manager ID</center></th>
										<th class = 'col-md-4'><center>Name</center></th>
										<th class = 'col-md-4'><center>Nationality</center></th>
									</tr>
								</thead>";
						while($row = mysqli_fetch_array($res)){
							echo "<tr>
									<td class = 'col-md-4'><center>$row[0]</center></td>
									<td class = 'col-md-4'><center>$row[1]</center></td>
									<td class = 'col-md-4'><center>$row[2]</center></td>
								</tr>";
						}
						echo "</table>";
						echo "</div>";
						break;
		case 'tbutton':	echo "<center><h1>Teams<h1></center>";
						echo "<div class = 'row'>";
						$query = "SELECT * FROM TEAM";
						$res = mysqli_query($db,$query);
						echo "<table class='table table-bordered table-striped table-condensed table-hover'>
								<thead>
									<tr>
										<th class = 'col-md-1'><center>Team ID</center></th>
										<th class = 'col-md-1'><center>Team Name</center></th>
										<th class = 'col-md-1'><center>Nationality</center></th>
										<th class = 'col-md-2' style='word-wrap: break-word;min-width: 310px;max-width: 310px;'><center>Logo</center></th>
										<th class = 'col-md-1'><center>Team Manager ID</center></th>
										<th class = 'col-md-1'><center>Goals Scored</center></th>
										<th class = 'col-md-1'><center>Goals Conceded</center></th>
										<th class = 'col-md-1'><center>Wins</center></th>
										<th class = 'col-md-1'><center>Loses</center></th>
										<th class = 'col-md-1'><center>Draws</center></th>
										<th class = 'col-md-1'><center>Points</center></th>
									</tr>
								</thead>";
						while($row = mysqli_fetch_array($res)){
							echo "<tr>
									<td class = 'col-md-1'><center>$row[0]</center></td>
									<td class = 'col-md-1'><center>$row[1]</center></td>
									<td class = 'col-md-1'><center>$row[2]</center></td>
									<td class = 'col-md-2' style='word-wrap: break-word;min-width: 310px;max-width: 310px;'><center>$row[3]</center></td>
									<td class = 'col-md-1'><center>$row[4]</center></td>
									<td class = 'col-md-1'><center>$row[5]</center></td>
									<td class = 'col-md-1'><center>$row[6]</center></td>
									<td class = 'col-md-1'><center>$row[7]</center></td>
									<td class = 'col-md-1'><center>$row[8]</center></td>
									<td class = 'col-md-1'><center>$row[9]</center></td>
									<td class = 'col-md-1'><center>$row[10]</center></td>
								</tr>";
						}
						echo "</table>";
						echo "</div>";
						break;
		case 'cbutton': echo "<center><h1>Clubs<h1></center>";
						echo "<div class = 'row'>";
						$query = "SELECT * FROM CLUB";
						$res = mysqli_query($db,$query);
						echo "<table class='table table-bordered table-striped table-condensed table-hover'>
								<thead>
									<tr>
										<th class = 'col-lg-1'><center>Club ID</center></th>
										<th class = 'col-lg-1'><center>Club Name</center></th>
										<th class = 'col-lg-1'><center>Nationality</center></th>
										<th class = 'col-lg-2' style='word-wrap: break-word;min-width: 160px;max-width: 160px;'><center>Logo</center></th>
										<th class = 'col-lg-1'><center>Club Manager ID</center></th>
										<th class = 'col-lg-1'><center>Goals Scored</center></th>
										<th class = 'col-lg-1'><center>Goals Conceded</center></th>
										<th class = 'col-lg-1'><center>Wins</center></th>
										<th class = 'col-lg-1'><center>Loses</center></th>
										<th class = 'col-lg-1'><center>Draws</center></th>
										<th class = 'col-lg-1'><center>Points</center></th>
									</tr>
								</thead>";
						while($row = mysqli_fetch_array($res)){
							echo "<tr>
									<td class = 'col-lg-1'><center>$row[0]</center></td>
									<td class = 'col-lg-1'><center>$row[1]</center></td>
									<td class = 'col-lg-1'><center>$row[2]</center></td>
									<td class = 'col-lg-2' style='word-wrap: break-word;min-width: 310px;max-width: 310px;'><center>$row[3]</center></td>
									<td class = 'col-lg-1'><center>$row[4]</center></td>
									<td class = 'col-lg-1'><center>$row[5]</center></td>
									<td class = 'col-lg-1'><center>$row[6]</center></td>
									<td class = 'col-lg-1'><center>$row[7]</center></td>
									<td class = 'col-lg-1'><center>$row[8]</center></td>
									<td class = 'col-lg-1'><center>$row[9]</center></td>
									<td class = 'col-lg-1'><center>$row[10]</center></td>
								</tr>";
						}
						echo "</table>";
						echo "</div>";
						break;
		case 'rbutton': echo "<center><h1>Goal Record<h1></center>";
						echo "<div class = 'row'>";
						$query = "SELECT * FROM GOAL_RECORD";
						$res = mysqli_query($db,$query);
						echo "<table class='table table-bordered table-striped table-condensed table-hover'>
								<tr>
									<th class = 'col-md-3'><center>Total Goals</center></th>
									<th class = 'col-md-2'><center>Total Assits</center></th>
									<th class = 'col-md-2'><center>Red Cards</center></th>
									<th class = 'col-md-2'><center>Yellow Cards</center></th>
									<th class = 'col-md-3'><center>Player ID</center></th>
								</tr>";
						while($row = mysqli_fetch_array($res)){
							echo "<tr>
									<td class = 'col-md-3'><center>$row[0]</center></td>
									<td class = 'col-md-2'><center>$row[1]</center></td>
									<td class = 'col-md-2'><center>$row[2]</center></td>
									<td class = 'col-md-2'><center>$row[3]</center></td>
									<td class = 'col-md-3'><center>$row[4]</center></td>
								</tr>";
						}
						echo "</table>";
						echo "</div>";
						echo "</div>";
	}
	echo "</div>";
	echo "</div>";

?>
</body>
</html>