<?php
class UsuarioDTO{
    private $id_usuario;
    private $nome;
    private $idade;



public function setIdUsuario($id_usuario){
    $this->id_usuario = $id_usuario;
}
public function getIdUsuario(){
  return  $this->id_usuario;
}
public function setNome($nome){
    $this->nome = $nome;
}
public function getNome(){
  return  $this->nome;
}
public function setIdade($idade){
    $this->idade = $idade;
}
public function getIdade(){
  return  $this->idade;
}






}


?>