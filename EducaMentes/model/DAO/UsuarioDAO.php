<?php

include_once'Conexao.php';
require_once'../model/DTO/UsuarioDTO.php';
class UsuarioDAO{
    //estabelecer conexão com o banco de dados
    public $pdo = null;
    //construtor da classe que estabelece a canexão com o banco de dados no momentoda criação do objeto DAO
    public function __construct(){
        $this->pdo = Conexao::getInstance();
    }
    public function salvarUsuario(UsuarioDTO $usuarioDTO){
        try{
            //escrever a operação que o software vai realizar no banco de dados

            $sql = "INSERT INTO usuario (nome, idade) VALUES (?,?)" ;
            $stmt = $this->pdo->prepare($sql);

            $nome = $usuarioDTO->getNome();
            $idade = $usuarioDTO->getIdade();

            $stmt->bindValue(param: 1,value: $nome);
            $stmt->bindValue(param: 2,value: $idade);
            
            $retorno = $stmt->execute();

            return $retorno;

        }catch(PDOException $exe){

            echo $exe->getMessage();

        }
       
    }public function listarUsuarios(){
        try{
            $sql= "SELECT * FROM usuario";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();

            $retorno = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $retorno;
        }
    catch(PDOException $exe){

            echo $exe->getMessage();

        }

    }

    public function excluirUsuario($id_usuario){
        try{
            $sql= "DELETE FROM usuario WHERE id_usuario = ?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindValue(1,$id_usuario);
           

            $retorno = $stmt->execute();
            return $retorno;

        }catch(PDOException $exe){
            echo $exe->getMessage();
        }
    }
    public function pesquisarUsuarioPorId($id_usuario){
        try{
            $sql= "SELECT * FROM usuario WHERE id_usuario = {$id_usuario}";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            $retorno = $stmt->fetch(PDO::FETCH_ASSOC);
            return $retorno;

        }catch(PDOException $exe){
            echo $exe->getMessage();
        }
    }

    public function alterarUsuario(UsuarioDTO $usuarioDTO){
        try{
            $sql= "UPDATE usuario SET nome=?, idade=? WHERE id_usuario=?";
            $stmt = $this->pdo->prepare($sql);
            $nome = $usuarioDTO->getNome();
            $idade = $usuarioDTO->getIdade();
            $id_usuario = $usuarioDTO->getIdUsuario();
           
            $stmt->bindValue(1,$nome);
            $stmt->bindValue(2,$idade);
            $stmt->bindValue(3,$id_usuario);

            $retorno = $stmt->execute();
            return $retorno;

        }catch(PDOException $exe){
            echo $exe->getMessage();
        } 
    }


}



?>