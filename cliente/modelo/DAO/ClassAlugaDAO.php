<?php
require_once 'Conexao.php';
class ClassAlugaDAO
{
    public function cadastrar(ClassAluga $cadastrarAluguel)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "INSERT INTO `aluguel`(`id_f`, `nome_f`, `nome`, `telefone`, `cpf`, `rg`, `data_nascimento`, `email`, `sexo`, `cnh`, `cep`, `endereço`, `cidade`, `bairro`, `numero`, `complemento`, `forma_pag`, `status_pg`, `data_in`, `data_f`, `placa_v`, `id_v`, `modelo`, `nome_v`, `fabricante`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);

            
            $stmt->bindValue(1, $cadastrarAluguel->getId_f());
            $stmt->bindValue(2, $cadastrarAluguel->getNome_f());
            
            $stmt->bindValue(3, $cadastrarAluguel->getNome());
            $stmt->bindValue(4, $cadastrarAluguel->getTelefone());
            $stmt->bindValue(5, $cadastrarAluguel->getCpf());
            $stmt->bindValue(6, $cadastrarAluguel->getRg());
            $stmt->bindValue(7, $cadastrarAluguel->getData_nascimento());
            $stmt->bindValue(8, $cadastrarAluguel->getEmail());
            $stmt->bindValue(9, $cadastrarAluguel->getSexo());
            $stmt->bindValue(10, $cadastrarAluguel->getCnh());
            $stmt->bindValue(11, $cadastrarAluguel->getCep());
            $stmt->bindValue(12, $cadastrarAluguel->getEndereco());
            $stmt->bindValue(13, $cadastrarAluguel->getCidade());
            $stmt->bindValue(14, $cadastrarAluguel->getBairro());
            $stmt->bindValue(15, $cadastrarAluguel->getNumero());
            $stmt->bindValue(16, $cadastrarAluguel->getComplemento());
            $stmt->bindValue(17, $cadastrarAluguel->getForma_pag());
            $stmt->bindValue(18, $cadastrarAluguel->getStatus_pg());
            $stmt->bindValue(19, $cadastrarAluguel->getData_in());
            $stmt->bindValue(20, $cadastrarAluguel->getData_f());
            $stmt->bindValue(21, $cadastrarAluguel->getPlaca_v());
            $stmt->bindValue(22, $cadastrarAluguel->getId_v());
            $stmt->bindValue(23, $cadastrarAluguel->getModelo());
            $stmt->bindValue(24, $cadastrarAluguel->getNome_v());
            $stmt->bindValue(25, $cadastrarAluguel->getFabricante());

            
            

            
           
            
            

            $stmt->execute();
            return TRUE;
        } catch (PDOException $exc) {
            echo $exc->getMessage();
        }
    }

    
    
}