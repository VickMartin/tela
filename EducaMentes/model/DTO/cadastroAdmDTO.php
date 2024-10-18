<?php
class CadastroAdmDTO{
    private $id_Adm;
    private $nome;
    private $email;
    private $senha;
    



public function setId_Adm($id_Adm){
   $this->id_Adm = $id_Adm;
}
public function getId_Adm(){
  return  $this->id_Adm;
}
public function setNome($nome){
    $this->nome = $nome;
}
public function getNome(){
  return  $this->nome;
}
public function setEmail($email){
    $this->email = $email;
}
public function getEmail(){
  return  $this->email;
}
public function setSenha($senha){
    $this->senha = $senha;
}
public function getSenha(){
  return  $this->senha;
}






}


?>