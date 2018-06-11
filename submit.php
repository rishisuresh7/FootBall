<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pass = '';
	$db = mysqli_connect('localhost','root','root','FOOTBALL');
	$query = "SELECT password FROM user WHERE username = '$username'";
	$result = mysqli_query($db,$query);
	while($row = mysqli_fetch_array($result))
	{
		$pass = $row[0];
	}
	if($pass == $password)
	{
		$_SESSION['id'] = 'admin';
		header('Location: admin.php');
	}
	else
	{
		echo "<script>
		alert('Wrong Credentials');
		</script>";
		header('Location: index.php');
	}
?>