<?php
require_once "DataBase.php";

class CategoriaModel{
    
    private $db;

    public function __construct(){
        $this->db = DataBase::getConexao();
    }

    public function getAll(){
        $result = $this->db->prepare("SELECT * FROM categorias");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllPerfil(){
        $result = $this->db->prepare("SELECT * FROM usuarios");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByGenero($genero){
        $result = $this->db->prepare("SELECT * FROM categorias WHERE generoMusical = ?");
        $result->execute([$genero]);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($idCategoria){
        $sql = $this->db->prepare("SELECT * FROM categorias WHERE idCategoria = ?");
        $sql->execute([$idCategoria]);
        return $sql->fetch(PDO::FETCH_ASSOC);

    }
    public function getByIdPerfil($idCatUser){
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE idUsuario = ?");
        $sql->execute([$idCatUser]);
        return $sql->fetchAll(PDO::FETCH_ASSOC);

    }
}