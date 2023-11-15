<?php
require_once '../Modelo/ClassAluga.php';
require_once '../Modelo/DAO/ClassAlugaDAO.php';

$id =@$_POST['id'];
$id_f =@$_POST['id_f'];
$nome_f =@$_POST['nome_f'];
$nome = @$_POST['nome'];
$telefone = @$_POST['telefone'];
$cpf = @$_POST['cpf'];
$rg = @$_POST['rg'];
$data_nascimento = @$_POST['data_nascimento'];
$email = @$_POST['email'];
$sexo = @$_POST['sexo'];
$cnh = @$_POST['cnh'];
$cep = @$_POST['cep'];
$endereco = @$_POST['endereco'];
$cidade = @$_POST['cidade'];
$bairro = @$_POST['bairro'];
$numero = @$_POST['numero'];
$complemento = @$_POST['complemento'];
$forma_pag = @$_POST['forma_pag'];
$status_pg = @$_POST['status_pg'];
$data_in = @$_POST['data_in'];
$data_f = @$_POST['data_f'];
$placa_v = @$_POST['placa_v'];
$id_v = @$_POST['id_v'];
$modelo = @$_POST['modelo'];
$nome_v = @$_POST['nome_v'];
$fabricante = @$_POST['fabricante'];
$acao = $_GET['ACAO'];


$novoAluguel = new ClassAluga();



$novoAluguel->setId_f($id_f);
$novoAluguel->setNome_f($nome_f);
$novoAluguel->setNome($nome);
$novoAluguel->setTelefone($telefone);
$novoAluguel->setCpf($cpf);
$novoAluguel->setRg($rg);
$novoAluguel->setData_nascimento($data_nascimento);
$novoAluguel->setEmail($email);
$novoAluguel->setSexo($sexo);
$novoAluguel->setCnh($cnh);
$novoAluguel->setCep($cep);
$novoAluguel->setEndereco($endereco);
$novoAluguel->setCidade($cidade);
$novoAluguel->setBairro($bairro);
$novoAluguel->setNumero($numero);
$novoAluguel->setComplemento($complemento);
$novoAluguel->setForma_pag($forma_pag);
$novoAluguel->setStatus_pg($status_pg);
$novoAluguel->setData_in($data_in);
$novoAluguel->setData_f($data_f);
$novoAluguel->setPlaca_v($placa_v);
$novoAluguel->setId_v($id_v);
$novoAluguel->setModelo($modelo);
$novoAluguel->setNome_v($nome_v);
$novoAluguel->setFabricante($fabricante);






$classAlugaDAO = new ClassAlugaDAO();
switch ($acao) {
	case "cadastrarAluguel":
        $aluguel = $classAlugaDAO->cadastrar($novoAluguel);
	    if($aluguel >= 1){
            header('Location:../index.php?&MSG= Cadastro realizado com sucesso!');
        } else {
            header('Location:../index.php?&MSG= NÃ£o foi possivel realizar o cadastro!');
        }
        break;
		
 }
?>


