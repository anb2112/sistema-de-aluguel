<?php
require_once '../Modelo/ClassFuncionario.php';
require_once '../Modelo/DAO/ClassFuncionarioDAO.php';

$id =@$_POST['id'];
$nome = @$_POST['nome'];
$tel = @$_POST['tel'];
$cpf = @$_POST['cpf'];
$rg = @$_POST['rg'];
$dtn = @$_POST['dtn'];
$email = @$_POST['email'];
$sexo = @$_POST['sexo'];
$cnh = @$_POST['cnh'];
$cep = @$_POST['cep'];
$end = @$_POST['end'];
$cid = @$_POST['cid'];
$bairro = @$_POST['bairro'];
$num = @$_POST['num'];
$comp = @$_POST['comp'];
$acao = $_GET['ACAO'];


$novoFuncionario = new ClassFuncionario();
$novoFuncionario->setId($id);
$novoFuncionario->setNome($nome);
$novoFuncionario->setTel($tel);
$novoFuncionario->setCpf($cpf);
$novoFuncionario->setRg($rg);
$novoFuncionario->setDtn($dtn);
$novoFuncionario->setEmail($email);
$novoFuncionario->setSexo($sexo);
$novoFuncionario->setCnh($cnh);
$novoFuncionario->setCep($cnh);
$novoFuncionario->setEnd($end);
$novoFuncionario->setCid($cid);
$novoFuncionario->setBairro($bairro);
$novoFuncionario->setNum($num);
$novoFuncionario->setComp($comp);






$classFuncionarioDAO = new ClassFuncionarioDAO();
switch ($acao) {
	case "cadastrarFuncionario":
        $funcionario = $classFuncionarioDAO->cadastrar($novoFuncionario);
	    if($funcionario >= 1){
            header('Location:../index.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= NÃ£o foi possivel realizar o cadastro!');
        }
        break;
		
 }
?>