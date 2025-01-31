<?php 


require "models/PerfilModel.php";


class PerfilController{

    private $url = "http://localhost/integrador/zene";

    private $usuarioModel;

    public function __construct(){
        $this->usuarioModel = new Perfil();
    }

    public function index(){
        $sessao = isset($_SESSION['idUsuario']) ? $_SESSION["idUsuario"] : 0;
           
        if($sessao > 0){
            $result_perfil = $this->usuarioModel->getById($sessao);
        }else{
            $sessao = $_SESSION["usuarioUser"];
            $result_perfil = $this->usuarioModel->getUsuario($sessao);
        }
    
        // echo $_SESSION["usuarioNome"];
        $baseUrl = $this->url;
        require "views/PerfilView.php";
    }

    public function verPerfil($idUsuario){
        $baseUrl =$this->url;

        $result_perfil = $this->usuarioModel->getById($idUsuario);


        require "views/PerfilView.php";
    }
    public function criar(){

        $baseUrl = $this->url;
        $acao = "criar";

        require "views/CadastroForm.php";
        
    }
    public function atualizar(){
        $nome = $_POST["nome"];
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        $idUsuario = $_POST["idUsuario"];


        $acao = $_POST["acao"];

        if($acao == "editar"){
            $this->usuarioModel->update($idUsuario,$senha,$usuario);
        }else{
            $this->usuarioModel->insert($nome,$usuario,$senha, $idUsuario);
            // $this->usuarioModel->getUsuario($usuario);
        }
        

        header("location: " . $this->url. "/home");
    }

    public function editar($idUsuario){
        $result_perfil = $this->usuarioModel->getById($idUsuario);
        $nome = $result_perfil["nome"];
        $descricao = $result_perfil["descricao"];
        $usuario = $result_perfil["usuario"];
        $idBanda = $result_perfil["idBanda"];
        $uf = $result_perfil["uf"];
        $idSocial = $result_perfil["idSocial"];
        
        $email =$result_perfil["email"];
        $telefone = $result_perfil["telefone"];
        $cidade =$result_perfil["cidade"];
        $idInstrumento = $result_perfil["idInstrumento"];
        $idCategoria = $result_perfil["idCategoria"];
        $foto = $result_perfil["foto"];
        $idade = $result_perfil["idade"];

        
        
        $baseUrl = $this->url;
        $acao = "editar";
        require "views/PerfilEditar.php";
    }

    public function atualizarPerfil(){
        
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $usuario = $_POST["usuario"];
        $idBanda = $_POST["idBanda"];
        $email =$_POST["email"];
        $uf =$_POST["uf"];
        $idSocial =$_POST["idSocial"];
        
        $telefone = $_POST["telefone"];
        $cidade =$_POST["cidade"];
        $idInstrumento = $_POST["idInstrumento"];
        $idCategoria = $_POST["idCategoria"];
        $foto = $_POST["foto"];
        $idade = $_POST["idade"];
        
        $idUsuario = $_POST["idUsuario"];
        
        $acao = $_POST["acao"];
        
        if($acao == "editar"){
            
            $this->usuarioModel->update($idUsuario,$nome,$usuario,$idade,$descricao,$foto,$email,$cidade,$uf,$telefone,$idInstrumento,$idCategoria,$idBanda,$idSocial);
        }else{
            $this->usuarioModel->insertt($nome,$usuario,$idade,$descricao,$foto,$email,$cidade,$uf,$telefone,$idInstrumento,$idCategoria,$idBanda,$idSocial);
            // $this->usuarioModel->getUsuario($usuario);
        }
        
        
         header("location: " . $this->url. "/perfil");
    }

    public function sair(){
        unset($_SESSION["usuarioUser"]);
        unset($_SESSION["idUsuario"]);
        unset($_SESSION["nome_usuario"]);
        $_SESSION = [];
        header("location: " . $this->url . "login");
    }

   
}