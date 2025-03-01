<?php 
$card ="";


foreach($result_user as $user){

    $idUsuario = $user["idUsuario"];
    $nome = $user["nome"];
    $idade = $user["idade"];
    $cidade = $user["cidade"];
    $foto = $user["foto"];
    $uf = $user["uf"];
    $idInstrumento = $user["idInstrumento"];
    $idBanda = $user["idBanda"];
    $idSocial = $user["idSocial"];
    $preco = $user["preco"];


    $card.= "

    <div class='col-10 col-sm-6 col-md-6 col-lg-3 p-2 '>
        <div class='card rounded-5 p-3 shadow ' >
        <img src='$foto' class='card-img-top rounded-5' alt='...'>
            <div class='card-body text-center'>
                <h4 class='card-title text-blak'>$nome</h4>
                <p class='text-secondary mb-1 text-dark '>$idInstrumento | </p>
                
                <p class='card-text text-secondary'>$cidade | $preco</p>
                <a href='[[base-url]]/perfil/verPerfil/$idUsuario' class='btn btn-warning btn-lg rounded-4'>Perfil</a>
            </div>
        </div>
    </div>


    
    ";
}

$cardCategoria = "";

foreach($listaCategoria as $categorias){
    $idCategoria = $categorias["idCategoria"];
    $generoMusical = $categorias["generoMusical"];
    $foto = $categorias["foto"];  // Corrigido com o ponto e vírgula

    $cardCategoria .= "
        <div class='col-6 col-sm-6 col-md-6 col-lg-3 '>
        <div class='card rounded-5  shadow border border-end-2 overlay' >
        <a href='[[base-url]]/categoria' >
        <img src='$foto' class='card-img rounded-5' alt='...'>
            <div class='card-img-overlay d-flex justify-content-center align-items-center'>
                <h3 class='card-title  text-white '>$generoMusical</h3>
            </div>
            </a>
        </div>
    </div>";
}


$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/home.html");

$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[card]]",$card,$html);
$html = str_replace("[[categorias]]", $cardCategoria, $html);
$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;


?>