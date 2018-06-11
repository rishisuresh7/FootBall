<?php
	$db = mysqli_connect('localhost','root','root','FOOTBALL') or die("could not connect");
	$out = '';
	$id = 0;
	$count = 0;
	if(isset($_POST['searchVal'])){
		$searchq = $_POST['searchVal'];
		$searchq = preg_replace("#[^0-9a-z]#i"," ",$searchq);
		$query = "SELECT ID FROM PLAYERS WHERE NAME LIKE '%$searchq%' UNION SELECT TEAM_ID FROM TEAM WHERE TEAM_NAME LIKE '%$searchq%'
					UNION SELECT CLUB_ID FROM CLUB WHERE CLUB_NAME LIKE '%$searchq%'";
		//Query to get all the ID's from TEAM,CLUB AND PLAYERS TABLES.
		$result = mysqli_query($db,$query);
		while($row = mysqli_fetch_array($result))
			$id = $row['ID'];
		$count = mysqli_num_rows($result);
		if($count == 0){
			$out = '<h5><strong>OOPS!!! ERROR 404 RESOURCE NOT FOUND!!</strong><h5>';
		}
		else{
			if(($id >= 4000) && ($id <= 4444)){ //Player Details with the range of 4000-4444
				
				$player_id = $id;
				$query = "SELECT * FROM PLAYERS WHERE ID = '$player_id'";
				$res = mysqli_query($db,$query);
				while($row = mysqli_fetch_array($res)){
					$player_name = $row['NAME'];
					$jersey_no = $row['JERSEY_NO'];
					$position = $row['POSITION'];
					$image = $row['IMAGE'];
					$player_club_id = $row['CLUB_ID'];
					$player_team_id = $row['TEAM_ID'];
					$nationalty = $row['NATIONALITY'];
				}
				$query = "SELECT TEAM_NAME,MANAGER_ID FROM TEAM WHERE TEAM_ID = '$player_team_id'";
				$res = mysqli_query($db,$query);
				while($row = mysqli_fetch_array($res)){
					$team_name = $row['TEAM_NAME'];
					$team_manager_id = $row['MANAGER_ID'];
				}
				$query = "SELECT CLUB_NAME,MANAGER_ID FROM CLUB WHERE CLUB_ID = '$player_club_id'";
				$res = mysqli_query($db,$query);
				while($row = mysqli_fetch_array($res)){
					$club_name = $row['CLUB_NAME'];
					$club_manager_id = $row['MANAGER_ID'];
				}
				$query = "SELECT NAME FROM MANAGER WHERE MANAGER_ID ='$club_manager_id'";
				$res = mysqli_query($db,$query);
				while($row = mysqli_fetch_array($res)){
					$club_manager_name = $row['NAME'];
				}
				$query = "SELECT NAME FROM MANAGER WHERE MANAGER_ID = '$team_manager_id'";
				$res = mysqli_query($db,$query);
				while($row = mysqli_fetch_array($res)){
					$team_manager_name = $row['NAME'];
				}
				$query = "SELECT * FROM GOAL_RECORD WHERE PLAYER_ID = '$player_id'";
				$res = mysqli_query($db,$query);
				while($row = mysqli_fetch_array($res)){
					$total_goals = $row['TOTAL_GOALS'];
					$total_assists = $row['TOTAL_ASSISTS'];
					$red_cards = $row['RED_CARDS'];
					$yellow_cards = $row['YELLOW_CARDS'];
				}
				$out.= "<div class='col-md-4 first'>
	          			<img src='$image' >
	          			<h2><strong>$player_name</strong></h2>
	        			</div>
	        			<div class='col-md-4'>
	            			<p>
	            			  <br>Nationality - <strong>$nationalty</strong>
	            			  <br>Team name -  <strong>$team_name</strong>
	            			  <br>Team Manager - <strong>$team_manager_name</strong>
	            			  <br>Club name - <strong>$club_name</strong>
	            			  <br>Club Manager - <strong>$club_manager_name</strong>
	          				</p>
	        			</div>
	        			<div class='col-md-4'>
	            			<p>
	            			  <br>Position - <strong>$position</strong>
	            			  <br>Total Goals - <strong>$total_goals</strong>
	            			  <br>Total Assists - <strong>$total_assists</strong>
	            			  <br>Red Cards - <strong>$red_cards</strong>
	            			  <br>Yellow Cards - <strong>$yellow_cards</strong>
	            			</p>
	        			</div>";
			}

			elseif (($id >= 600) && ($id <= 800)) {//Club Details with the range of 600-800
				
				$CLUB_ID = $id;
				$query = "SELECT * FROM CLUB WHERE CLUB_ID = '$CLUB_ID'";
				$res = mysqli_query($db,$query);
				while($row = mysqli_fetch_array($res)){
				    $club_name = $row['CLUB_NAME'];
				    $manager_id = $row['MANAGER_ID'];
				    $club_wins = $row['WINS'];
				    $club_loses = $row['LOSES'];
				    $club_draws = $row['DRAWS'];
				    $club_points = $row['POINTS'];
				    $club_goals_scored = $row['GOALS_SCORED'];
				    $club_goals_conceded = $row['GOALS_CONCEDED'];
				    $club_image = $row['LOGO'];
				}
				$query = "SELECT NAME FROM MANAGER WHERE MANAGER_ID = '$manager_id'";
				$res = mysqli_query($db,$query);
				while($row = mysqli_fetch_array($res)){
				    $club_manager_name = $row['NAME'];
				}
				$out.= "<div class='col-md-4 first'>
				      	<img src='$club_image'>
				      	<h2><strong>$club_name</strong></h2>
				      	<h4><strong>$club_manager_name</strong></h4>
				      </div>
				      <div class='col-md-4'>
				        <p>
				        <br>Matches Won - <strong>$club_wins</strong>
				        <br>Matches Lost- <strong>$club_loses</strong>
				        <br>No Result - <strong>$club_draws</strong>
				        </p>
				        </div>
				      <div class='col-md-4'>
				        <p>
				        <br>Goals Scored - <strong>$club_goals_scored</strong>
				        <br>Goals Conceded - <strong>$club_goals_conceded</strong>
				        <br>Points - <strong>$club_points</strong>
				        </p>
				      </div>";
			}

			else{//Team Details with the range of 300-500
				
				$TEAM_ID = $id;
				$query = "SELECT * FROM TEAM WHERE TEAM_ID = '$TEAM_ID'";
				$res = mysqli_query($db,$query);
				while($row = mysqli_fetch_array($res)){
				    $team_name = $row['TEAM_NAME'];
				    $manager_id = $row['MANAGER_ID'];
				    $team_wins = $row['WINS'];
				    $team_loses = $row['LOSES'];
				    $team_draws = $row['DRAWS'];
				    $team_points = $row['POINTS'];
				    $team_goals_scored = $row['GOALS_SCORED'];
				    $team_goals_conceded = $row['GOALS_CONCEDED'];
				    $team_image = $row['LOGO'];
				}
				$query = "SELECT NAME FROM MANAGER WHERE MANAGER_ID = '$manager_id'";
				$res = mysqli_query($db,$query);
				while($row = mysqli_fetch_array($res)){
				    $team_manager_name = $row['NAME'];
				}
				$out.= "<div class='col-md-4 first'>
				        	<img src='$team_image'>
				        	<h2><strong>$team_name</strong></h2>
				        	<h4><strong>$team_manager_name</strong></h4>
				    	</div>
				        <div class='col-md-4'>
				            <p>
				            <br>Wins - <strong>$team_wins</strong>
				            <br>Loses - <strong>$team_loses</strong>
				            <br>Draw - <strong>$team_draws</strong>
				            </p>
				        </div>
				        <div class='col-md-4'>
				        	<p>
				        	<br>Goals Scored - <strong>$team_goals_scored</strong>
				        	<br>Goals Conceded - <strong>$team_goals_conceded</strong>
				        	<br>Points - <strong>$team_points</strong>
				        	</p>
				        </div>";
			}
		}
	}
	echo $out;
?>