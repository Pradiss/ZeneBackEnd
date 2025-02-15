<?php

require "models/CategoriaModel.php";

class CategoriaController {

    private $url = "http://localhost/integrador/zene";
    private $categoriaModel;

    public function __construct(){
        $this->categoriaModel = new CategoriaModel();
    }

    public function index(){
        $listaPerfil = $this->categoriaModel->getAllPerfil();
        $listaCategoria = $this->categoriaModel->getAll();

        $baseUrl = $this->url;
        require "views/CategoriaView.php";
    }


    public function filtrar(){

    $generos = ["Rock" =>  isset($_POST["rock"]) ? $_POST["rock"] : "" ,
    "Samba" => isset($_POST["samba"]) ? $_POST["samba"] : "" ,
    "Pagode" => isset($_POST["pagode"]) ? $_POST["pagode"] : "", "mpb" => isset($_POST["mpb"]) ? $_POST["mpb"] : "" ,
    "Baile" => isset($_POST["baile"]) ? $_POST["baile"] : ""];
    
    $listaPerfil = [];

    foreach($generos as $genero => $valor){
            if($valor){
            
            $perfisFiltrados = $this->categoriaModel->getByGenero($valor);  

            
            foreach($perfisFiltrados as $perfis){
                $idCatUser = $perfis['idCategoriaUser'];
                $listaPerfil = array_merge($listaPerfil, $this->categoriaModel->getByIdPerfil($idCatUser));
                $genre = $perfis['generoMusical'];
                $listaGenero = $this->categoriaModel->getById($idCatUser);
                var_dump($listaGenero);
            }
            
        }
        
    }
    
    $listaPerfil = array_unique($listaPerfil, SORT_REGULAR);

    $baseUrl = $this->url;
    $teste = 1;
    
        require "views/CategoriaView.php";
    }

}