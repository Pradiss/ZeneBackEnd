<?php 

require_once "DataBase.php";

class Perfil {

    private $db;

    public function __construct(){
        $this->db = DataBase::getConexao();
    }


    public function getAll(){
        $result = $this->db->prepare("SELECT * FROM usuarios");
        $result->execute();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }


    public function getById($idUsuario){
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE idUsuario=?");
        $sql->execute([$idUsuario]);
        return $sql->fetch(PDO::FETCH_ASSOC);
    }


    public function insert($nome,$usuario,$senha){
        $senhaCriptografada = password_hash($senha,PASSWORD_BCRYPT);
        $sql = $this->db->prepare("INSERT INTO usuarios (nome,usuario,senha) VALUES (?,?,?) ");
        $sql->execute([$nome,$usuario,$senhaCriptografada]);

        if($usuario){
            $_SESSION["usuarioUser"] = $usuario;
            return true;
        }
        $_SESSION["erro"] = "Não foi possível acessar o perfil";
        return false;
        
    }

    public function getUsuario($usuario){
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $sql->execute([$usuario]);
        return $sql->fetch(PDO::FETCH_ASSOC);

    }

    
    public function update($idUsuario,$nome,$usuario,$idade,$descricao,$foto,$email,$cidade,$uf,$whatsapp,$idInstrumento,$idCategoria,$instagram,$facebook){
        $sql = $this->db->prepare("UPDATE usuarios SET nome=?,usuario=?,idade=?,descricao=?,foto=?,email=?,cidade=?,uf=?,whatsapp=?,idInstrumento=?,idCategoria=?,instagram=?,facebook=? WHERE idUsuario=? ");

        return $sql->execute([$nome,$usuario,$idade,$descricao,$foto,$email,$cidade,$uf,$whatsapp,$idInstrumento,$idCategoria,$instagram,$facebook,$idUsuario]);
    }


    public function insertt($nome,$usuario,$idade,$descricao,$foto,$email,$cidade,$uf,$whatsapp,$idInstrumento,$idCategoria,$instagram,$facebook){
        $sql = $this->db->prepare("INSERT INTO usuarios (nome,usuario,idade,descricao,foto,email,cidade,uf,whatsapp,idInstrumento,idCategoria,instagram,facebook) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
        return $sql->execute([$nome,$usuario,$senhaCriptografada,$idade,$descricao,$foto,$email,$cidade,$uf,$whatsapp,$idInstrumento,$idCategoria,$instagram,$facebook]);
    
    }
   
}