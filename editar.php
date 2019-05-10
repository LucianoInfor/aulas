<?php
  include_once('conexao.php');
  $id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar imobiliaria LB</title>
	<style>
	#alte{
		width:250px;
		height:299px;
		background-color:green;
		margin-left:20%;
		text-align:center;
	}
	input{
		
		color:blue;
		margin-left:10%;
		padding:4px;
	}
	h2{
		text-align:center;
		font-color:blue;
	}
	h4{
		font-color:white;
	}
	
	</style>
</head>
<body>
	<form method="POST">
	  
	  	 <div id="alte">
	  	 	<h2>Auterar</h2>
	  	 
				<h4>Digite seu nome completo:</h4>
		<input type="text" name="nome" required><br>
				<h4>Degite sua email:</h4>
		<input type="email" name="email" required><br>
		<input type="submit" name="alterar" value="Alterar">
	 	</div>
	  <?php
	  	if(isset($_POST['alterar'])){
	  	  $nome = $_POST['nome'];
	  	  $email = $_POST['email'];
	  	  mysqli_query($con,"UPDATE usuario SET nome='$nome',email='$email' WHERE id=$id ");
	  	  header('location:listar.php');
	  	}
	  ?>
	</form>
</body>
</html>
