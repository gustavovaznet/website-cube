<?php
	//REQUIRED
	require_once 'connection.php';
	require_once 'cube.model.php';
	require_once 'cube.service.php';
	//ACTION VARIABLE
	$action = isset($_GET['action']) ? $_GET['action'] : $action;
		//REGISTER ACTION
		if($action == 'register'){		
			//INPUT VALIDATION
			if(empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['password_confirm'])){
				header('location: ../register.php?status=white');
				exit;
			}
			//PASS VALIDATION
			if($_POST['password_confirm'] != $_POST['password']){
				header('location: ../register.php?status=unlike');
				exit;
			}
			//CONNECTION
			$connection = new Connection();
			$cube = new Cube();
			$cube->__set('name',$_POST['name']);
			$cube->__set('surname',$_POST['surname']);
			$cube->__set('email',$_POST['email']);
			$cube->__set('password',$_POST['password']);
			$cube->__set('password_confirm',$_POST['password_confirm']);
			$cubeService = new CubeService($connection, $cube);
			$cubeService->register();
			header('location: ../index.php?status=registered');
		}
?>
