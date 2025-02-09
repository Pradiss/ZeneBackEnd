<?php

$idUsuario = $user["idUsuario"];
$nome = $user["nome"];
$idade = $user["idade"];
$cidade = $user["cidade"];
$foto = $user["foto"];
$uf = $user["uf"];
$idInstrumento = $user["idInstrumento"];
$idBanda = $user["idBanda"];
$idSocial = $user["idSocial"];

$carousel ="";

$carousel = "


       <div id='carouselExampleCaptions' class='carousel slide'>
       <div class='carousel-indicators'>
       <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='0' class='active' aria-current='true' aria-label='Slide 1'></button>
       <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='1' aria-label='Slide 2'></button>
       <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='2' aria-label='Slide 3'></button>
       <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='3' aria-label='Slide 4'></button>
       </div>
       <div class='carousel-inner'>
       <div class='carousel-item active'>
           <img src='[[base-url]]/views/templates/assets/bandateste1.svg' class='d-block w-100' alt='' width='100'>
           <div class='carousel-caption d-none d-md-block'>
           <h1>$nome</h1>
           <a href='[[base-url]]/perfil/verPerfil/$idUsuario'><button class='btn btn-lg  botaoCard'>Perfil</button></a>
           <p>BLAST é uma banda de casamentos, confraternização, eventos.</p>
           </div>
       </div>
       <div class='carousel-item'>
           <img src='[[base-url]]/views/templates/assets/Bandagaby.svg' class='d-block w-100' alt='...'>
           <div class='carousel-caption d-none d-md-block'>
           <h1>Cantora Gaby</h1>
           <a href='perfil2.html'><button class='btn btn-lg  botaoCard'>Perfil</button></a>
           <p>Some representative placeholder content for the second slide.</p>
           </div>
       </div>
       <div class='carousel-item'>
           <img src='[[base-url]]/views/templates/assets/banda2.svg' class='d-block w-100' alt='...'>
           <div class='carousel-caption d-none d-md-block'>
           <h1>the Wailers</h1>
           <a href='perfil3.html'><button class='btn btn-lg  botaoCard'>Perfil</button></a>
           <p>Some representative placeholder content for the third slide.</p>
           </div>
       </div>
       </div>
       <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide='prev'>
       <span class='carousel-control-prev-icon' aria-hidden='true'></span>
       <span class='visually-hidden'>Previous</span>
       </button>
       <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide='next'>
       <span class='carousel-control-next-icon' aria-hidden='true'></span>
       <span class='visually-hidden'>Next</span>
       </button>
       </div>
";

$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/home.html");

$html = str_replace("[[header]]",$header,$html);
$html = str_replace("[[footer]]",$footer,$html);

$html = str_replace("[[carrosel]]",$carousel,$html);
$html = str_replace("[[base-url]]",$baseUrl,$html);

echo $html;

