<?php 
	include 'db.php';
	session_start();
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql= "SELECT * FROM employee WHERE username = '$username' AND password = '$password' ";
		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			$_SESSION['username'] = $row['username'];
			$_SESSION['id'] = $row['id'];
			if($_POST['username'] === 'pallavi'){
			header('location: audit.php');
			}else{
				header('location: designation.php');
			}
		}else{
			header('location: index.php');
		}

	}
?>