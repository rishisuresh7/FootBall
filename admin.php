<?php
    session_start();
    if(isset($_SESSION['id'])) 
        {
?>
        <html>
<head>
    <title>FootBall</title>
    <link href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <script type="text/javascript" src="js/admin.js"></script>
</head>

<body>
    <div id="box">
        <center><h1>FOOTBALL </h1></center>
        <hr style="border-color: white; border-width: 1px;">
    <div class="container insert">
        <form action="insert.php" method="POST">
                <center> <h3> MANAGERS: </h3> </center> <br>
                <div class="row">
                    <div class="col-md-3">
                        <label for="managerid">Manager ID:</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="managerid" required> 
                    </div>
                    <div class="col-md-3">
                        <label for="mname">Name:</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="mname" required> 
                    </div>
                </div> <br>
                
                <div class="row">
                    <div class="col-md-3">
                        <label for="mnationality">Nationality:</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="mnationality" required> 
                    </div>
                </div> <br>
                <div class="col-md-6"><center><input type="submit" class="btn btn-primary" name="mbutton" value="Insert Managers"></center></div>
                <div class="col-md-6"><center><input type="button" class="btn btn-primary" onclick="replace(this.name);" name="mbutton" value="View Managers"></center></div>
        </form>    


        <form action="insert.php" method="POST">
            <center> <h3> TEAMS: </h3> </center><br>
            <div class="row">
                <div class="col-md-3">
                    <label for="teamid">ID:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="teamid" maxlength="3" min="300" max="500" required> 
                </div>
                <div class="col-md-3">
                    <label for="tname">Team Name:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="tname" required> 
                </div>
            </div> <br>

            
            <div class="row">
                <div class="col-md-3">
                    <label for="mid">Manager ID:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="mid" required> 
                </div>
                <div class="col-md-3">
                    <label for="tpoints">Points:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="tpoints" required> 
                </div>
            </div> <br> 
            
            <div class="row">
                <div class="col-md-3">
                    <label for="tnationality">Nationality:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="tnationality" required> 
                </div>
                <div class="col-md-3">
                    <label for="logo">Team Logo Link:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="logo" required> 
                </div>
            </div> <br> 

                <div class="row">
                <div class="col-md-3">
                    <label for="tgs">Goals Scored:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="tgs" required> 
                </div>
                <div class="col-md-3">
                    <label for="tgc">Goals Conceded:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="tgc" required> 
                </div>
            </div> <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="twins">Wins:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="twins" required> 
                </div>
                <div class="col-md-3">
                    <label for="tloses">Loses:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="tloses" required> 
                </div>
            </div> <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="tdraws">Draws:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="tdraws"  required> 
                </div>
                
            </div> <br>
                <div class="col-md-6"><center><input type="submit" class="btn btn-primary" name="tbutton" value="Insert Team"></center></div>
                <div class="col-md-6"><center><input type="button" onclick="replace(this.name);" class="btn btn-primary" name="tbutton" value="View Teams"></center></div>
            <br>
        </form>    
        <form action="insert.php" method="POST">    
            <center> <h3> CLUBS: </h3> </center> <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="clubid">ID:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="clubid" maxlength="3" min="600" max="800" required> 
                </div>
                <div class="col-md-3">
                    <label for="cname">Club Name:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="cname"  required> 
                </div>
            </div> <br>
            
            <div class="row">
                <div class="col-md-3">
                    <label for="cmid">Manager ID:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="cmid"required> 
                </div>
                <div class="col-md-3">
                    <label for="cpoints">Points:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="cpoints" required> 
                </div>
            </div> <br> 
            
            <div class="row">
                <div class="col-md-3">
                    <label for="cnationality">Nationality:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="cnationality" required> 
                </div>
                <div class="col-md-3">
                    <label for="Clogo">Club Logo Link:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="clogo" required> 
                </div>
            </div> <br>

             <div class="row">
                <div class="col-md-3">
                    <label for="cgs">Goals Scored:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="cgs"  required> 
                </div>
                <div class="col-md-3">
                    <label for="cgc">Goals Conceded:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="cgc" required> 
                </div>
            </div> <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="cwins">Wins:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="cwins" required> 
                </div>
                <div class="col-md-3">
                    <label for="closes">Loses:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="closes" required> 
                </div>
            </div> <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="cdraws">Draws:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="cdraws"  required> 
                </div>
                
            </div> <br>
                <div class="col-md-6"><center><input type="submit" class="btn btn-primary" name="cbutton" value="Insert Club"></center></div>
                <div class="col-md-6"><center><input type="button" class="btn btn-primary" onclick="replace(this.name);" name="cbutton" value="View Clubs"></center></div>
            <br>

        </form>
        <form action="insert.php" method="POST">
            <center> <h3> PLAYERS: </h3> </center> <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="ID">ID:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="ID"  maxlength="4" min="4000" max="4444" required> 
                </div>
                <div class="col-md-3">
                    <label for="Name">Name:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="name"  required> 
                </div>
            </div> <br>
            
            <div class="row">
                <div class="col-md-3">
                    <label for="jno">Jersey Number:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="jno" required>
                </div>
                <div class="col-md-3">
                    <label for="nationality">Nationality:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="nationality" required>
                </div>
            </div> <br>
            
            <div class="row">
                <div class="col-md-3">
                    <label for="cid">Club Id:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="cid" maxlength="3" required>
                </div>
                <div class="col-md-3">
                    <label for="tid">Team Id:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="tid" maxlength="4" required>
                </div>
            </div> <br>
            
            <div class="row">
                <div class="col-md-3">
                    <label for="position">Position:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="position" required>
                </div>
                <div class="col-md-3">
                    <label for="image">Image Link:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="image" required>
                </div>
            </div> <br>
                <div class="col-md-6"><center><input type="submit" class="btn btn-primary" name="pbutton" value="Insert Player"></center></div>
                <div class="col-md-6"><center><input type="button" class="btn btn-primary" onclick="replace(this.name);" name="pbutton" value="View Players"></center></div>
            <br> <br>
        </form>
        <form action="insert.php" method="POST">    
            <center> <h3> GOAL RECORDS: </h3> </center> <br>
            <div class="row">
                <div class="col-md-3">
                    <label for="tgoals">Total Goals:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="tgoals" required> 
                </div>
                <div class="col-md-3">
                    <label for="pid">Player ID:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="pid" required> 
                </div>
            </div> <br>
            
            <div class="row">
                <div class="col-md-3">
                    <label for="tassists">Total Assists:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="tassists" required> 
                </div>
            </div> <br>
            
            <div class="row">
                <div class="col-md-3">
                    <label for="rcards">Red Cards</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="rcards"  required> 
                </div>
                <div class="col-md-3">
                    <label for="ycards">Yellow Cards</label>
                </div>
                <div class="col-md-3">
                    <input type="text" name="ycards" required> 
                </div>
            </div> <br>
                <div class="col-md-6"><center><input type="submit" class="btn btn-primary" name="rbutton" value="Insert Records"></center></div>
                <div class="col-md-6"><center><input type="button" class="btn btn-primary" onclick="replace(this.name);" name="rbutton" value="View Records"></center></div>
            <br> <br>
        </form>
        <div class="row">
            <form action="logout.php" method="POST">
                <div class="col-md-12"><center><input type="submit" class="btn btn-primary" name="logbutton" value="Logout"></center></div>
            </form>
        </div>  
        <br>
        <br>
    </div>
    </div>
</body>
</html>

<?php   
    }
    else
    {
        echo "<script>";
        echo "alert('Please Login To Continue');";
        echo "window.location.replace('index.php');";
        echo "</script>";
    }
?>