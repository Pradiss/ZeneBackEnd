<?php 

require_once "DataBase.php";

class Home {

    private $db;

    public function __construct(){
        $this->db = DataBase::getConexao();
    }

    public function getAll(){
        $result = $this->db->query("SELECT * FROM usuarios");

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCategoria(){
        $result = $this->db->prepare("SELECT * FROM categorias");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

}

