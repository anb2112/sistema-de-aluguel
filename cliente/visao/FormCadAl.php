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

    <form method="post" action="./Controle/ControleAluga.php?ACAO=cadastrarAluguel">


    
        <div>
            <center><p style="font-size: 30px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >Dados do funcionário</p>
            <hr size=1>
            <br><br>

            

            
            <div>
        <div>ID do Funcionário: <input placeholder="ID do Funcionário" style=" border-style: ridge;" type="id_f" name="id_f" id="id_f">
                    <br><br>
            Funcionário: <input placeholder="Nome completo" style=" border-style: ridge;" type="nome_f" name="nome_f" id="nome_f">
        <br><br>
        
        <p style="font-size: 30px; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Dados do cliente</p>
        
        <hr size=1>
        <br><br>
        Nome completo: <input placeholder="Nome completo" style=" border-style: ridge;" type="nome" name="nome" id="nome">
        <br><br>
        Telefone: <input placeholder="Telefone" style=" border-style: ridge;" type="telefone" name="telefone" id="telefone">
        <br><br>
        CPF: <input pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" placeholder="xxx.xxx.xxx-xx" style=" border-style: ridge;" type="cpf" name="cpf" id="cpf">
        <br><br>
        Rg: <input placeholder="RG"  style=" border-style: ridge;" type="rg" name="rg" id="rg">
        <br><br>
        Data de nascimento: <input type="date" placeholder="Data de nascimento" style=" border-style: ridge;" type="data_nascimento" name="data_nascimento" id="data_nascimento">
        <br><br>
        Email: <input placeholder="E-mail" style=" border-style: ridge;" type="email" name="email" id="email">
        <br><br>
        Sexo: <input placeholder="Sexo" style=" border-style: ridge;" type="sexo" name="sexo" id="sexo">
        <br><br>
        CNH<input placeholder="CNH" style=" border-style: ridge;" type="cnh" name="cnh" id="cnh">
        <br><br>
        
        CEP: <input placeholder="CEP" style=" border-style: ridge;" type="cep" name="cep" id="cep">
        <br><br>
        Endereço: <input placeholder="endereço" style=" border-style: ridge;" type="endereco" name="endereco" id="endereco">
        <br><br>
        
        Cidade: <input placeholder="Cidade" style=" border-style: ridge;" type="cidade" name="cidade" id="cidade">
        <br><br>
        Bairro: <input placeholder="Bairro" style=" border-style: ridge;" type="bairro" name="bairro" id="bairro">
        <br><br>
        Número: <input placeholder="Número" style=" border-style: ridge;" type="numero" name="numero" id="numero">
        <br><br>
        Complemento: <input placeholder="Complemento" style=" border-style: ridge;" type="complemento" name="complemento" id="complemento">
        <br><br>
        Forma de pagamento: <input placeholder="Forma de pagamento" style=" border-style: ridge;" type="forma_pag" name="forma_pag" id="forma_pag">
        <br><br>
        Status:  <input placeholder="Status" style=" border-style: ridge;" type="status_pg" name="status_pg" id="status_pg">
        <br><br>
        <h3>Período de aluguel do veiculo:</h3>
        
        A partir de: <input type="datetime-local" placeholder="Periodo de aluguel do veiculo" style=" border-style: ridge;" type="data_in" name="data_in" id="data_in"> até: <input type="datetime-local" style=" border-style: ridge;" type="data_f" name="data_f" id="data_f">
        
        <h3>Dados do veículo</h3>
        Placa do veículo: <input placeholder="Placa do veiculo" style=" border-style: ridge;" type="placa_v" name="placa_v" id="placa_v">
        <br><br>
        ID do veículo: <input placeholder="ID do veiculo" style=" border-style: ridge;" type="id_v" name="id_v" id="id_v">
        <br><br>
        Modelo do veículo: <input placeholder="Modelo do veiculo" style=" border-style: ridge;" type="modelo" name="modelo" id="modelo">
        <br><br>
        Nome: <input placeholder="Nome" style=" border-style: ridge;" type="nome_v" name="nome_v" id="nome_v">


        <br><br>
        Fabricante: <input placeholder="Fabricante" style=" border-style: ridge;" type="fabricante" name="fabricante" id="fabricante"></center>
        <br><br>

        </div>
        <center><button type="submit" value="Registrar">salvar</button>
        <button type="reset" value="Limpar">cancelar</button></center>
        </div>

    



    </form>
    </body>
</html>
