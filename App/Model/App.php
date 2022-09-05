<?php
require_once 'Conexao.php';
function Insert($nome,$filiacao,$cpf,$nascimento,$endereco,$bairro,$cep,$municipio,$email,$tel){
    try {
        $sql = 'INSERT INTO cadastro(nome,filiacao,cpf,nascimento,endereco,bairro,cep,municipio,email,tel) VALUES (?,?,?,?,?,?,?,?,?,?);';
        $enviar = Conexao()->prepare($sql);
        $enviar->bindValue(1,$nome);
        $enviar->bindValue(2,$filiacao);
        $enviar->bindValue(3,$cpf);
        $enviar->bindValue(4,$nascimento);
        $enviar->bindValue(5,$endereco);
        $enviar->bindValue(6,$bairro);
        $enviar->bindValue(7,$cep);
        $enviar->bindValue(8,$municipio);
        $enviar->bindValue(9,$email);
        $enviar->bindValue(10,$tel);
        $enviar->execute();
    } catch (PDOException $ex){
        echo 'Erro '.$ex->getMessage();
    }
};

function Select(){
    $sql = "SELECT * FROM cadastro";
    $enviar = Conexao()->prepare($sql);
    $enviar->execute();
    $result = $enviar->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
};

function SelectUpdate($id){
    $sql = "SELECT * FROM cadastro WHERE id = ?;";
    $enviar = Conexao()->prepare($sql);
    $enviar->bindValue(1,$id);
    $enviar->execute();
    $result = $enviar->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
};

function Update($id,$nome,$filiacao,$cpf,$nascimento,$endereco,$bairro,$cep,$municipio,$email,$tel){
//  nome,filiacao,cpf,nascimento,endereco,bairro,cep,municipio,email,tel
    $sql = 'UPDATE cadastro SET nome = ?,filiacao = ?,cpf = ?,nascimento = ?,endereco = ?,bairro = ?,cep = ?,municipio = ?,email = ?,tel = ? WHERE id = ?'; 
    $enviar = Conexao()->prepare($sql);
    $enviar->bindValue(1, $nome);
    $enviar->bindValue(2, $filiacao);
    $enviar->bindValue(3, $cpf);
    $enviar->bindValue(4, $nascimento);
    $enviar->bindValue(5, $endereco);
    $enviar->bindValue(6, $bairro);
    $enviar->bindValue(7, $cep);
    $enviar->bindValue(8, $municipio);
    $enviar->bindValue(9, $email);
    $enviar->bindValue(10,$tel);
    $enviar->bindValue(11,$id);
    $enviar->execute();
};

function Delete($id){
    $sql = 'DELETE FROM cadastro WHERE id = ? ';
    $enviar = Conexao()->prepare($sql);
    $enviar->bindValue(1, $id);
    $enviar->execute();
};