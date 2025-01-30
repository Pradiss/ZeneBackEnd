<?php 
$card = "";

$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/categoria.html");

$html = str_replace("[[base-url]]",$baseUrl,$html);


// $idCatBanda = $listaCategoria["idCategoriaBanda"];
// $idCatUser = $listaCategoria["idCategoriaUser"];
// $genero = $listaCategoria["generoMusical"];


// function caracteristicas($id, $arrayCaracter){
    
//     $marcado = in_array($id, $arrayCaracter) ? "checked" : "";

//     return "<div class=\"form-check form-switch\">
//                 <input class=\"form-check-input\" type=\"checkbox\" name= 'caracteristicas[]' $marcado value='$id' role=\"switch\" id=\"$id\">
//                 <label class=\"form-check-label\" for=\"$id\">$texto</label>
//               </div>"

// }


foreach($listaPerfil as $perfil){
    
    $idUsuario = $perfil["idUsuario"];
    $nome = $perfil["nome"];
    $usuario = $perfil["usuario"];
    $idade = $perfil["idade"];
    $cidade = $perfil["cidade"];
    $foto = $perfil["foto"];
    $uf = $perfil["uf"];
    $idInstrumento = $perfil["idInstrumento"];
    $idBanda = $perfil["idBanda"];
    
        $card.= "
        <div class='col-md-3 my-3 ms-1'>
            <div class='card'>
            <img src='$foto' class='card-img-top' alt='...'>
                <div class='card-body'>
                    <h5 class='card-title'>$nome</h5>
                    <p class='text-secondary mb-1'>$idInstrumento | </p>
                    <p class='card-text'>$cidade | $uf </p>
                    ";
                    
                    foreach($listaGenero as $genero){
                    $idCatUser = $genero['idCategoriaUser'];
                    $card.= $idCatUser == $idUsuario ? "<p class='card-text'>$genero</p>" : "<p class='card-text'></p>";
                    }
                    
                    "
                    <a href='[[base-url]]/perfil/$idUsuario' class='btn btn-primary'>Perfil</a>
                </div>
            </div>
        </div>
        ";
    
}

$check = "";

$tipos = ['pagode' => true, 'rock' => true, 'mpb' => true, 'baile' => true, 'samba' => true];
 

if($teste == 1){
$select = "
    <section class='col-md-3'>
        <h4>Selecione os Filtros</h4>
        <form method='post' id='form1' action='$baseUrl/categoria/filtrar' >
            <div>
                <h5>Categoria</h5>
                <div>";


foreach($generos as $genero => $valor) {
    $check = isset($tipos[$valor]) ? 'checked' : '';
    $select .= "
                    <div class='form-check form-switch'>
                        <input class='form-check-input' type='checkbox' name='$genero' value='$genero' role='switch' id='$genero' $check>
                        <label class='form-check-label' for='$genero'>" . ucfirst($genero) . "</label>
                    </div>";
    
}

$select .= "
                </div>
            </div>
            <button class='btn btn-primary' type='submit'>Filtrar</button>
        </form>
    </section>";

}else{
    $select = "
         <section class='col-md-3'>
        <h4>Selecione os Filtros</h4>
        <form method='post' id='form1' action='$baseUrl/categoria/filtrar' >
            <div>
                <h5>Categoria</h5>
                <div>
                  <div class='form-check form-switch'>
                        <input class='form-check-input' type='checkbox' name='pagode' value='pagode' role='switch' id='pagode' $check>
                        <label class='form-check-label' for='pagode'>Pagode</label>
                    </div>
                  <div class='form-check form-switch'>
                        <input class='form-check-input' type='checkbox' name='baile' value='baile' role='switch' id='baile' $check>
                        <label class='form-check-label' for='baile'>Baile</label>
                    </div>
                  <div class='form-check form-switch'>
                        <input class='form-check-input' type='checkbox' name='rock' value='rock' role='switch' id='rock' $check>
                        <label class='form-check-label' for='rock'>Rock</label>
                    </div>
                  <div class='form-check form-switch'>
                        <input class='form-check-input' type='checkbox' name='samba' value='samba' role='switch' id='samba' $check>
                        <label class='form-check-label' for='samba'>Samba</label>
                    </div>
                  <div class='form-check form-switch'>
                        <input class='form-check-input' type='checkbox' name='mpb' value='mpb' role='switch' id='mpb' $check>
                        <label class='form-check-label' for='mpb'>Mpb</label>
                    </div>
                </div>
            </div>
            <button class='btn btn-primary' type='submit'>Filtrar</button>
        </form>
    </section>
    ";
}

$js = "<script src='views/templates/js/Categoria.js'></script>";

$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[categoria]]",$card,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);
$html = str_replace("[[select]]",$select,$html);
$html = str_replace("[[js]]",$js,$html);

echo $html;


?>