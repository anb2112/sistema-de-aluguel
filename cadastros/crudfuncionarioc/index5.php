<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $id = filter_input(INPUT_POST, 'id');

    $nome = filter_input(INPUT_POST, 'nome');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $cpf = filter_input(INPUT_POST, 'cpf');
    $rg = filter_input(INPUT_POST, 'rg');
    $data_nascimento = filter_input(INPUT_POST, 'data_nascimento');
    $email  = filter_input(INPUT_POST, 'email');
    $sexo  = filter_input(INPUT_POST, 'sexo');
    $cnh  = filter_input(INPUT_POST, 'cnh');
    $cep  = filter_input(INPUT_POST, 'cep');
    $endereço  = filter_input(INPUT_POST, 'endereço');
    $cidade  = filter_input(INPUT_POST, 'cidade');
    $bairro  = filter_input(INPUT_POST, 'bairro');
    $numero  = filter_input(INPUT_POST, 'numero');
    $complemento  = filter_input(INPUT_POST, 'complemento');
    


} else if (!isset($id)) {

    $id = (isset($_GET["id"]) && $_GET["id"] != null) ? $_GET["id"] : "";
}

try {
    $conexao = new PDO("mysql:host=localhost;dbname=pdo", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
} catch (PDOException $erro) {
    echo "<p class=\"bg-danger\">Erro na conexão:" . $erro->getMessage() . "</p>";
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "save" && $nome != "") {
    try {
        if ($id != "") {
            $stmt = $conexao->prepare("UPDATE funcionarios SET   nome=?, telefone=?, cpf=?,rg=?, data_nascimento=?, email=?, sexo=?, cnh=?, cep=?, endereço=?,cidade=?,bairro=?, numero=?, complemento=? WHERE id = ?");
            $stmt->bindParam(15, $id);
        } else {
            $stmt = $conexao->prepare("INSERT INTO funcionarios (  nome, telefone, cpf, rg, data_nascimento, email, sexo, cnh, cep, endereço, cidade, bairro, numero, complemento) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        }
        
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $telefone);
        $stmt->bindParam(3, $cpf);
        $stmt->bindParam(4, $rg);
        $stmt->bindParam(5, $data_nascimento);
        $stmt->bindParam(6, $email);
        $stmt->bindParam(7, $sexo );
        $stmt->bindParam(8, $cnh );
        $stmt->bindParam(9, $cep );
        $stmt->bindParam(10, $endereço );
        $stmt->bindParam(11, $cidade );
        $stmt->bindParam(12, $bairro );
        $stmt->bindParam(13, $numero );
        $stmt->bindParam(14, $complemento );
        



        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                echo "<p class=\"bg-success\">Dados cadastrados com sucesso!</p>";
                $id = null;
                
                $nome = null;
                $telefone= null;
                $cpf= null;
                $rg= null;
                $data_nascimento= null;
                $email = null;
                $sexo = null;
                $cnh = null;
                $cep = null;
                $endereço = null;
                $cidade = null;
                $bairro = null;
                $numero = null;
                $complemento = null;
                
            } else {
                echo "<p class=\"bg-danger\">Erro ao tentar efetivar cadastro</p>";
            }
        } else {
            echo "<p class=\"bg-danger\">Erro: Não foi possível executar a declaração sql</p>";
        }
    } catch (PDOException $erro) {
        echo "<p class=\"bg-danger\">Erro: " . $erro->getMessage() . "</p>";
    }
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "upd" && $id != "") {
    try {
        $stmt = $conexao->prepare("SELECT * FROM funcionarios WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            $rs = $stmt->fetch(PDO::FETCH_OBJ);
            $id = $rs->id;
            $nome = $rs->nome;
            $telefone = $rs->telefone;
            $cpf = $rs->cpf;
            $rg = $rs->rg;
            $data_nascimento = $rs->data_nascimento;
            $email = $rs->email;
            $sexo = $rs->sexo;
            $cnh = $rs->cnh;
            $cep = $rs->cep;
            $endereço = $rs->endereço;
            $cidade = $rs->cidade;
            $bairro = $rs->bairro;
            $numero = $rs->numero;
            $complemento = $rs->complemento;
            


        } else {
            echo "<p class=\"bg-danger\">Erro: Não foi possível executar a declaração sql</p>";
        }
    } catch (PDOException $erro) {
        echo "<p class=\"bg-danger\">Erro: " . $erro->getMessage() . "</p>";
    }
}

if (isset($_REQUEST["act"]) && $_REQUEST["act"] == "del" && $id != "") {
    try {
        $stmt = $conexao->prepare("DELETE FROM funcionarios WHERE id = ?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            echo "<p class=\"bg-success\">Registo foi excluído com êxito</p>";
            $id = null;
        } else {
            echo "<p class=\"bg-danger\">Erro: Não foi possível executar a declaração sql</p>";
        }
    } catch (PDOException $erro) {
        echo "<p class=\"bg-danger\">Erro: " . $erro->getMessage() . "</a>";
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" >
        <title>CRUD Funcionarios</title>
        <link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet" />
        <script src="assets/js/bootstrap.js" type="text/javascript" ></script>
    </head>
    <body>
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
        <div class="container">
            <header class="row">
                <br />
            </header>
            <article>
                <div class="row">
                    <form action="?act=save" method="POST" name="form1" class="form-horizontal" >
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="panel-title">CRUD Funcionarios</span>
                            </div>
                            <div class="panel-body">

                                <input type="hidden" name="id" value="<?php
                                echo (isset($id) && ($id != null || $id != "")) ? $id : '';

                                ?>" />
                                
                                <div class="form-group">
                                    <label for="nome" class="col-sm-1 control-label">Nome :</label>
                                    <div class="col-md-4">
                                        <input type="text" name="nome" value="<?php
                                        echo (isset($nome) && ($nome != null || $nome != "")) ? $nome : '';

                                        ?>" class="form-control" />
                                    </div>
                                    <label for="telefone" class="col-sm-2 control-label">Telefone:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="telefone" value="<?php
                                        echo (isset($telefone) && ($telefone != null || $telefone != "")) ? $telefone : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cpf" class="col-sm-1 control-label">CPF:</label>
                                    <div class="col-md-4">
                                        <input type="text" name="cpf" value="<?php

                                        echo (isset($cpf) && ($cpf != null || $cpf != "")) ? $cpf : '';

                                        ?>" class="form-control" />
                                    </div>
                                    <label for="rg" class="col-sm-2 control-label">RG:</label>
                                    <div class="col-md-2">
                                        <input type="text" name="rg" value="<?php
                                        echo (isset($rg) && ($rg != null || $rg != "")) ? $rg : '';

                                        ?>" class="form-control" />
                                    </div>
                                    <label for="data_nascimento" class="col-sm-1 control-label">Data Nascimento:</label>
                                    <div class="col-md-1">
                                        <input type="date" name="data_nascimento" value="<?php
                                        echo (isset($data_nascimento) && ($data_nascimento != null || $data_nascimento != "")) ? $data_nascimento : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-1 control-label">E-mail:</label>
                                    <div class="col-md-2">
                                        <input type="text" name="email" <?php
                                        echo (isset($email) && ($email != null || $email != "")) ? $email : '';

                                        ?> class="form-control" />
                                    </div>
                                    <label for="sexo" class="col-sm-4 control-label">Sexo:</label>
                                    <div class="col-md-2">
                                        <input type="text" name="sexo" value="<?php
                                        echo (isset($sexo) && ($sexo != null || $sexo != "")) ? $sexo : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cnh" class="col-sm-1 control-label">CNH:</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cnh" <?php
                                        echo (isset($cnh) && ($cnh != null || $cnh != "")) ? $cnh : '';

                                        ?> class="form-control" />
                                    </div>
                                    <label for="cep" class="col-sm-4 control-label">CEP:</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cep" value="<?php
                                        echo (isset($cep) && ($cep != null || $cep != "")) ? $cep : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="endereço" class="col-sm-1 control-label">Endereço:</label>
                                    <div class="col-md-2">
                                        <input type="text" name="endereço" <?php
                                        echo (isset($endereço) && ($endereço != null || $endereço != "")) ? $endereço : '';

                                        ?> class="form-control" />
                                    </div>
                                    <label for="cidade" class="col-sm-4 control-label">Cidade:</label>
                                    <div class="col-md-2">
                                        <input type="text" name="cidade" value="<?php
                                        echo (isset($cidade) && ($cidade != null || $cidade != "")) ? $cidade : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="bairro" class="col-sm-1 control-label">Bairro:</label>
                                    <div class="col-md-2">
                                        <input type="text" name="bairro" <?php
                                        echo (isset($bairro) && ($bairro != null || $bairro != "")) ? $bairro : '';

                                        ?> class="form-control" />
                                    </div>
                                    <label for="numero" class="col-sm-4 control-label">Numero:</label>
                                    <div class="col-md-2">
                                        <input type="text" name="numero" value="<?php
                                        echo (isset($numero) && ($numero != null || $numero != "")) ? $numero : '';

                                        ?>" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="complemento" class="col-sm-1 control-label">Complemento:</label>
                                    <div class="col-md-2">
                                        <input type="text" name="complemento" <?php
                                        echo (isset($complemento) && ($complemento != null || $complemento != "")) ? $complemento : '';

                                        ?> class="form-control" />
                                    </div>
                                    

                                
                            </div>
                            <div class="panel-footer">
                                <div class="clearfix">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary" /><span class="glyphicon glyphicon-ok"></span> salvar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row">
                    <div class="panel panel-default">
                        <table class="table table-striped">
                        <thead>
                                <tr>
                                    
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>CPF</th>
                                    <th>RG</th>
                                    <th>Data Nascimento</th>
                                    <th>E-mail</th>
                                    <th>Sexo</th>
                                    <th>CNH</th>
                                    <th>CEP</th>
                                    <th>Endereço</th>
                                    <th>Cidade</th>
                                    <th>Bairro</th>
                                    <th>Número</th>
                                    <th>Complemento</th>
                                    
                                    <th>Ações</th>
                                    
                                    </tr>

                                
                            </thead>
                            <tbody>
                                <?php
                                
                                try {
                                    $stmt = $conexao->prepare("SELECT * FROM funcionarios");
                                    if ($stmt->execute()) {
                                        while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {

                                            ?><tr>
                                                
                                                <td><?php echo $rs->nome ; ?></td>
                                                <td><?php echo $rs->telefone; ?></td>
                                                <td><?php echo $rs->cpf; ?></td>
                                                <td><?php echo $rs->rg; ?></td>
                                                <td><?php echo $rs->data_nascimento; ?></td>
                                                <td><?php echo $rs->email  ; ?></td>
                                                <td><?php echo $rs->sexo ; ?></td>
                                                <td><?php echo $rs->cnh  ; ?></td>
                                                <td><?php echo $rs->cep ; ?></td>
                                                <td><?php echo $rs->endereço ; ?></td>
                                                <td><?php echo $rs->cidade ; ?></td>
                                                <td><?php echo $rs->bairro ; ?></td>
                                                <td><?php echo $rs->numero   ; ?></td>
                                                <td><?php echo $rs->complemento  ; ?></td>
                                                
                                                <td><center>
                                            <a href="?act=upd&id=<?php echo $rs->id; ?>" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-pencil"></span> Editar</a>
                                            <a href="?act=del&id=<?php echo $rs->id; ?>" class="btn btn-danger btn-xs" ><span class="glyphicon glyphicon-remove"></span> Excluir</a>
                                        </center>
                                        </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "Erro: Não foi possível recuperar os dados do banco de dados";
                                }
                            } catch (PDOException $erro) {
                                echo "Erro: " . $erro->getMessage();
                            }

                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </article>
        </div>
    </body>
</html>