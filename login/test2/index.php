<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: rgb(245, 90, 0);">
    <center> 
    <img src="logo.png" height="130px" width="170px"/></center>
    <div id="square">
     <form action="login.php" method="post">
     	<center><h2>LOGIN</h2></center>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Usuario</label>
     	<input type="text" name="usuario" placeholder="usuario"><br>

     	<label>Senha</label>
     	<input type="senha" name="senha" placeholder="senha"><br>

     	<a href="http://localhost/sistemadealuguel/catalogos/index.php" ><button type="submit" class="buttonl">Login</button></a>
     </form>
</body>
</html>