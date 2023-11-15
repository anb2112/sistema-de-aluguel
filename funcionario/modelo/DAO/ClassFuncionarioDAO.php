<?php
require_once 'Conexao.php';
class ClassFuncionarioDAO
{
    public function cadastrar(ClassFuncionario $cadastrarFuncionario)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO funcionarios (id,nome,telefone,cpf,rg,data_nascimento,email,sexo,cnh,cep,endereço,cidade,bairro,numero,complemento) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            
            $stmt->bindValue(1, $cadastrarFuncionario->getId());
            $stmt->bindValue(2, $cadastrarFuncionario->getNome());
            $stmt->bindValue(3, $cadastrarFuncionario->getTel());
            $stmt->bindValue(4, $cadastrarFuncionario->getCpf());
            $stmt->bindValue(5, $cadastrarFuncionario->getRg());
            $stmt->bindValue(6, $cadastrarFuncionario->getDtn());
            $stmt->bindValue(7, $cadastrarFuncionario->getEmail());
            $stmt->bindValue(8, $cadastrarFuncionario->getSexo());
            $stmt->bindValue(9, $cadastrarFuncionario->getCnh());
            $stmt->bindValue(10, $cadastrarFuncionario->getCep());
            $stmt->bindValue(11, $cadastrarFuncionario->getEnd());
            $stmt->bindValue(12, $cadastrarFuncionario->getCid());
            $stmt->bindValue(13, $cadastrarFuncionario->getBairro());
            $stmt->bindValue(14, $cadastrarFuncionario->getNum());
            $stmt->bindValue(15, $cadastrarFuncionario->getComp());
            

            
           
            
            

            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    
    
}