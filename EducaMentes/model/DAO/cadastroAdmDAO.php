<?php

require_once'Conexao.php';
require_once'../model/DTO/CadastroAdmDTO.php';
class CadastroAdmDAO{
    //estabelecer conexão com o banco de dados
    public $pdo = null;
    //construtor da classe que estabelece a canexão com o banco de dados no momentoda criação do objeto DAO
    public function __construct(){
        $this->pdo = Conexao::getInstance();
    }
    public function cadastroAdm(CadastroAdmDTO $CadastroAdmDTO){
        try{
            //escrever a operação que o software vai realizar no banco de dados

            $sql = "INSERT INTO cadastroadm (nome, email, senha) VALUES (?,?,?)" ;
            $stmt = $this->pdo->prepare($sql);

            $nome = $CadastroAdmDTO->getNome();
            $email = $CadastroAdmDTO->getEmail();
            $senha = $CadastroAdmDTO->getSenha();
            

            $stmt->bindValue(param: 1,value: $nome);
            $stmt->bindValue(param: 2,value: $email);
            $stmt->bindValue(param: 3,value: $senha);
           
            
            $retorno = $stmt->execute();

            return $retorno;

        }catch(PDOException $exe){

            echo $exe->getMessage();

        }
       
    }


}



?>