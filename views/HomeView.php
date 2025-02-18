<?php 
$card ="";

// $carousel = "
// <div id='carouselExampleCaptions' class='carousel slide'>
// <div class='carousel-indicators'>
// <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
// <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='1' aria-label='Slide 2'></button>
// <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='2' aria-label='Slide 3'></button>
// <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='3' aria-label='Slide 4'></button>
// </div>

// ";


// foreach($result_user as $user){

//     $idUsuario = $user["idUsuario"];
//     $nome = $user["nome"];
//     $idade = $user["idade"];
//     $cidade = $user["cidade"];
//     $foto = $user["foto"];
//     $uf = $user["uf"];
//     $idInstrumento = $user["idInstrumento"];
//     $idBanda = $user["idBanda"];
//     $idSocial = $user["idSocial"];


//  $carousel.="
//     <div class='carousel-inner'>
//         <div class='carousel-item active'>
//             <img src='$foto' class='d-block w-100' alt='' >
//                 <div class='carousel-caption d-none d-md-block'>
//                 <h1>$nome</h1>
//                 <a href='[[base-url]]/perfil/verPerfil/$idUsuario'><button class='btn btn-lg  btn-outline-light  botaoCard'>Perfil</button></a>
//                 <p>$cidade | $uf </p>
//         </div>
//     </div>
// ";
// }

// $carousel.="    
// </div>
// <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide='prev'>
// <span class='carousel-control-prev-icon' aria-hidden='true'></span>
// <span class='visually-hidden'>Previous</span>
// </button>
// <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide='next'>
// <span class='carousel-control-next-icon' aria-hidden='true'></span>
// <span class='visually-hidden'>Next</span>
// </button>
// </div>
// ";

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
    



    $card.= "
    
    <div class='col col-sm-3 p-3'>
        <div class='card rounded-5 p-3 shadow ' style='width: 18rem;'>
        <img src='$foto' class='card-img-top rounded-4' alt='...'>
            <div class='card-body text-center'>
                <h4 class='card-title'>$nome</h4>
                <p class='text-secondary mb-1'>$idInstrumento | </p>
                <p class='card-text'>$cidade | $uf </p>
                <a href='[[base-url]]/perfil/verPerfil/$idUsuario' class='btn btn-primary'>Perfil</a>
            </div>
        </div>
    </div>

    
    ";
}

$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/home.html");

$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);
$html = str_replace("[[card]]",$card,$html);
// $html = str_replace("[[carrosel]]",$carousel,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;


?>