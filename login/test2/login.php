<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['usuario']) && isset($_POST['senha'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$usuario = validate($_POST['usuario']);
	$pass = validate($_POST['senha']);

	if (empty($usuario)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=senha is required");
	    exit();
	}else{
		$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['usuario'] === $usuario && $row['senha'] === $pass) {
            	$_SESSION['usuario'] = $row['usuario'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: http://localhost/sistemadealuguel/catalogos/index.php");
		        exit();
            }else{
				header("Location: index.php?error=Usuario ou senha errado");
		        exit();
			}
		}else{
			header("Location: index.php?error=Usuario ou senha errado");
	        exit();
		}
	}
	
}else{
	header("Location: index.php");
	exit();
}