<!DOCTYPE html>
<html lang="en">
    <head><link rel="stylesheet" href="styles.css">


    <meta charset="UTF-8">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 

 <title>

        </title>

        <style>
             




        </style>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
	<link href="styles.css" rel="stylesheet">
    </head>

    <body style="background-color: rgb(255, 255, 255);">


    <nav>
		<ul>
			<li class="logo"><img alt="" src="logo.png"></li>
			<li>
				<a href="http://localhost/sistemadealuguel/catalogos/index.php"><i class="fa fa-home"></i>   pagina inicial</a>
			</li>
			<li>
				<a href="http://localhost/sistemadealuguel/cliente/index.php"><i class="fa fa-book"></i>  formulario aluguel</a>
			</li>
            <li>
				<a href="http://localhost/sistemadealuguel/funcionario/index.php"><i class="fa fa-book"></i>  formulario funcionario</a>
			</li>
			<li>
				<a href="http://localhost/sistemadealuguel/cadastros/index.php"><i class="fa fa-users"></i>   cadastros</a>
			</li>
            
            
			<li>
				<a href="http://localhost/sistemadealuguel/login/test2/index.php"><i class="fa fa-power-off"></i>   logout</a>
			</li>
		</ul>
	</nav>

    <form method="post" action="./Controle/ControleFuncionario.php?ACAO=cadastrarFuncionario">

       
        <div>
            <center><p style="font-size: 30px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >Cadastro de funcionário</p></center>
            <hr size=1>
            <br><br>

        
        <center>
        <br><br>
        
        
        
        <div>
        
        Nome completo: <input placeholder="Nome completo" style=" border-style: ridge;" type="nome" id="nome" name="nome">
        <br><br>
        Telefone: <input placeholder="telefone" style=" border-style: ridge;"  type="tel" id="tel" name="tel">
        <br><br>
        CPF: <input pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="xxx.xxx.xxx-xx" style=" border-style: ridge;" type="cpf" id="cpf" name="cpf">
        <br><br>
        Rg: <input placeholder="rg"  style=" border-style: ridge;" type="rg" id="rg" name="rg">
        <br><br>
        Data de nascimento: <input type="date" placeholder="data de nascimento" style=" border-style: ridge;" type="dtn" id="dtn" name="dtn">
        <br><br>
        Email: <input placeholder="email" style=" border-style: ridge;" type="email" id="email" name="email">
        <br><br>
        Sexo<input placeholder="sexo" style=" border-style: ridge;" type="sexo" id="sexo" name="sexo">
        <br><br>
        CNH<input placeholder="cnh" style=" border-style: ridge;" type="cnh" id="cnh" name="cnh">
        <br><br>
        
        CEP: <input placeholder="cep" style=" border-style: ridge;" type="cep" id="cep" name="cep">
        <br><br>
        Endereço: <input placeholder="endereço" style=" border-style: ridge;" type="end" id="end" name="end">
        <br><br>
        
        Cidade: <input placeholder="cidade" style=" border-style: ridge;" type="cid" id="cid" name="cid">
        <br><br>
        Bairro: <input placeholder="bairro" style=" border-style: ridge;" type="bairro" id="bairro" name="bairro">
        <br><br>
        Número: <input placeholder="numero" style=" border-style: ridge;" type="num" id="num" name="num">
        <br><br>
        Complemento: <input placeholder="complemento" style=" border-style: ridge;" type="comp" id="comp" name="comp">
        <br><br></center>

        </div>

        <center><button type="submit" value="Registrar">salvar</button>
            <button type="reset" value="Limpar">cancelar</button></center>
        

        </div>

        <button>cadastrar</button> 




        </form>

        
    </body>
</html>
