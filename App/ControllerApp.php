<?php
require_once 'Model/App.php';
if(isset($_POST['login'])){
  $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
  $senha = filter_var($_POST['senha'], FILTER_SANITIZE_ADD_SLASHES);
  Login($email,$senha);
}
if(isset($_POST['cadastrar'])){
  $nome = filter_var($_POST['nome'], FILTER_SANITIZE_ADD_SLASHES);
  $filiacao = filter_var($_POST['filiacao'], FILTER_SANITIZE_ADD_SLASHES);
  $cpf = filter_var($_POST['cpf'], FILTER_SANITIZE_ADD_SLASHES);
  $nascimento = filter_var($_POST['nascimento'], FILTER_SANITIZE_ADD_SLASHES);
  $endereco = filter_var($_POST['endereco'], FILTER_SANITIZE_ADD_SLASHES);
  $bairro = filter_var($_POST['bairro'], FILTER_SANITIZE_ADD_SLASHES);
  $cep = filter_var($_POST['cep'], FILTER_SANITIZE_ADD_SLASHES);
  $municipio = filter_var($_POST['municipio'], FILTER_SANITIZE_ADD_SLASHES);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_ADD_SLASHES); 
  $tel = filter_var($_POST['tel'], FILTER_SANITIZE_ADD_SLASHES);
  Insert($nome,$filiacao,$cpf,$nascimento,$endereco,$bairro,$cep,$municipio,$email,$tel);
  header("Location: ../");

}if(isset($_POST['editar'])){
  $id = filter_var($_POST['id'], FILTER_SANITIZE_ADD_SLASHES);
  $nome = filter_var($_POST['nome'], FILTER_SANITIZE_ADD_SLASHES);
  $filiacao = filter_var($_POST['filiacao'], FILTER_SANITIZE_ADD_SLASHES);
  $cpf = filter_var($_POST['cpf'], FILTER_SANITIZE_ADD_SLASHES);
  $nascimento = filter_var($_POST['nascimento'], FILTER_SANITIZE_ADD_SLASHES);
  $endereco = filter_var($_POST['endereco'], FILTER_SANITIZE_ADD_SLASHES);
  $bairro = filter_var($_POST['bairro'], FILTER_SANITIZE_ADD_SLASHES);
  $cep = filter_var($_POST['cep'], FILTER_SANITIZE_ADD_SLASHES);
  $municipio = filter_var($_POST['municipio'], FILTER_SANITIZE_ADD_SLASHES);
  $email = filter_var($_POST['email'], FILTER_SANITIZE_ADD_SLASHES); 
  $tel = filter_var($_POST['tel'], FILTER_SANITIZE_ADD_SLASHES);
  Update($id,$nome,$filiacao,$cpf,$nascimento,$endereco,$bairro,$cep,$municipio,$email,$tel);
  header("Location: ../");
}if(isset($_GET['excluir'])){
  Delete($_GET['excluir']);
  header("Location: ../");
}else{
  header("location: ../");
};