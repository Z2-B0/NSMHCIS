<?php
	session_start();
	require_once("../controller/Test.php");
	$con = New Test();
	$db = $con->db_connect();
	$username = mysqli_real_escape_string($db,$_POST['txtuser']);
	$password = mysqli_real_escape_string($db,($_POST['txtpass']));
	$validate = $con->check($username,$password);
	if(!$validate){
		echo'<script>alert("Cannot connect to database.")</script>';
	}else{
		if(mysqli_num_rows($validate)!=0){
			$row=$validate->fetch_assoc();
			$userLevel = $row['type_id'];
			$_SESSION['username'] = $row['username'];
			$_SESSION['type_id'] = $userLevel;
			//$_SESSION['type_desc'] = $con->getName($row['type_desc']);
				if($userLevel==123123){
					header("location:../views/Scholar/");
				}else if($userLevel==246246){
					header("location:../views/Admin/");	
				}else if($userLevel==369369){
					header("location:../views/SCSC");
				}else if($userLevel==481248){
					header("location:../views/Finance/");
				}else if($userLevel==510152){
					header("location:../views/SuperAdmin/");
				}
		}else{
			echo'<script>alert("Wrong username or password.")</script>';
		}
	}
?>