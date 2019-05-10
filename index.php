<html>
    <head>
        <title>Cadastror</title>
        <style>
           #cont{
           	background-color:green;
           	width:250px;
           	heght:800px;
           	fonte-color:blue;
           	text-align:center;
           	align:center;
           	margin-left:20%;
           	
           }
           submit{
           	color:blue;
           }
           h1{
           	
           	text-aling:center;
           	margin-left:20%;
           	color:green;
           }
           h4{
           	padding:2px;
           	color:white;
           }
           #buton{
           	color:white;
           	background-color;
           }
        </style>
    </head>
    <body>
       <h1>Imobiliária LB</h1>
        <form action="index.php" method="POST" autocomplete="off">
           <div id="cont">
           <h2>Cadastre-se</h2>
           
               <h4>NOME:</h4>
              <input type="text" name="nome" placeholder="Digitseu Nome" required><br>    
                 <h4> EMAIL:</h4>
               <input type="email" name="email" placeholder="Digite o email" required><br>
                  <h4>SENHA:</h4>
              <input type="password" name="senha" placeholder="Digite sua senha" required><br>
              <input type="submit" name="enviar" value="Cadastrar" id="buton">
           </div>
        </form>
        <?php
          include_once "conexao.php";
          if(isset($_POST['enviar'])){
              $nome = $_POST['nome'];
              $email = $_POST['email'];
              $senha = $_POST['senha'];
              mysqli_query($con,"INSERT INTO usuario (nome, email, senha)VALUES('$nome', '$email', '$senha')");
              mysqli_close($con);
              header('location:listar.php');
          }
        ?>
    </body>
</html>
