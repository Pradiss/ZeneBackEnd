<?php 

$user = "";

    $idUsuario = $result_perfil["idUsuario"];
    $nome = $result_perfil["nome"];
    $usuario = $result_perfil["usuario"];
    $idade = $result_perfil["idade"];
    $descricao = $result_perfil["descricao"];
    $foto = $result_perfil["foto"];
    $email = $result_perfil["email"];
    $cidade = $result_perfil["cidade"];
    $uf = $result_perfil["uf"];
    $telefone = $result_perfil["telefone"];
    $idInstrumento = $result_perfil["idInstrumento"];
    $idBanda = $result_perfil["idBanda"];
    $idSocial = $result_perfil["idSocial"];
    $idCategoria = $result_perfil["idCategoria"];



    $botaoEdit = $idUsuario == $_SESSION['idUsuario'] ? "<a class='btn btn-primary btn-lg rounded-5'  href='[[base-url]]/perfil/editar/$idUsuario'>Editar Dados</a>" : "";


    $user="
            <div class='row gutters-sm'>
              <div class='col-sm-12 col-md-4 mb-3'>
                <div class='card rounded-5 '>
                  <div class='card-body rounded '>
                    <div class='d-flex flex-column align-items-center text-center'>
                      <img src='$foto'  class='rounded-5 shadow w-100'>
                      <div class='mt-3 p-4 text-light'>
                        
                        <h3 class='text-black'>$nome</h3>
                        <p class='text-secondary mb-1'>$idInstrumento - </p> 
                        <p class='text-secondary mb-1'>$cidade| $uf</p>
                      
                        </div>
                        
                      </div>
                  </div>
                </div>
              

                <div class='card mt-3 text-light rounded-5 p-3 '>
                    <ul class='list-group list-group-flush rounded-5'>
                      <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                        <h6 class='mb-0'><i class='mx-1 bi bi-whatsapp'></i>whatsapp</h6>
                        <span class='text-secondary'>$telefone</span>
                      </li>
                      <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                        <h6 class='mb-0'><i class='mx-1 bi bi-instagram'></i>Instagram</h6>
                        <span class='text-secondary'>$idSocial</span>
                      </li>
                      <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                        <h6 class='mb-0'><i class='mx-1 bi bi-facebook'></i>Facebook</h6>
                        <span class='text-secondary'>$idSocial</span>
                      </li>
                      <li class='list-group-item d-flex justify-content-between align-items-center flex-wrap'>
                        <h6 class='mb-0'><i class='mx-1 bi bi-tiktok'></i>Tik-Tok</h6>
                        <span class='text-secondary'>$idSocial</span>
                      </li>
                    </ul>
                    </div>
                </div>

                <div class='col-md-8 '>

                    <div class='card rounded-5 p-3 mb-3'>
                        <div class='card-body '>
                          <p class='lead fw-bold mb-1 > Sobre</p>
                          
                          <div class='p-4 bg-body-tertiary rounded-5'>
                            <p class='fonti-italic mb-1'> $descricao </p>
                          </div>
                        </div>
                    </div>   
                  </div>
                  
                
                  <div class='card text-dark  rounded-5 p-3'>
                    <div class='card-body rounded '>
                      <div class='row'>
                        <div class='col-sm-3'>
                          <h6 class='mb-0'>Nome</h6>
                        </div>
                        <div class='  col-sm-9 text-secondary'>
                          $nome
                        </div>
                      </div>
                      <hr>
                      <div class='row'>
                        <div class='col-sm-3'>
                          <h6 class='mb-0'>Usuario</h6>
                        </div>
                        <div class='col-sm-9 text-secondary'>
                          $usuario
                        </div>
                      </div>
                      <hr>
                      <div class='row'>
                        <div class='col-sm-3'>
                          <h6 class='mb-0'>Banda</h6>
                        </div>
                        <div class='col-sm-9 text-secondary'>
                          $idBanda
                        </div>
                      </div>
                      <hr>
                      <div class='row'>
                        <div class='col-sm-3'>
                          <h6 class='mb-0'>Email</h6>
                        </div>
                        <div class='col-sm-9 text-secondary'>
                          $email
                        </div>
                      </div>
                      <hr>
                      <div class='row'>
                        <div class='col-sm-3'>
                          <h6 class='mb-0'>Idade</h6>
                        </div>
                        <div class='col-sm-9 text-secondary'>
                          $idade
                        </div>
                      </div>
                      <hr>
                      <div class='row'>
                        <div class='col-sm-3'>
                          <h6 class='mb-0'>WhatsApp</h6>
                        </div>
                        <div class='col-sm-9 text-secondary'>
                          $telefone
                        </div>
                      </div>
                      <hr>
                      <div class='row'>
                        <div class='col-sm-3'>
                          <h6 class='mb-0'>Cidade</h6>
                        </div>
                        <div class='col-sm-9 text-secondary'>
                          $cidade
                        </div>
                      </div>
                      <hr>
                      <div class='row'>
                        <div class='col-sm-3'>
                          <h6 class='mb-0'>Estado</h6>
                        </div>
                        <div class='col-sm-9 text-secondary'>
                          $uf
                        </div>
                      </div>
                      <hr>
                      <div class='row'>
                        <div class='col-sm-3'>
                          <h6 class='mb-0'>Instrumento</i></h6>
                        </div>
                        <div class='col-sm-9 text-secondary'>
                          $idInstrumento
                        </div>
                      </div>
                      <hr>
                      <div class='row'>
                        <div class='col-sm-3'>
                          <h6 class='mb-0'>Categoria</h6>
                          </div>
                          <div class='col-sm-9 text-secondary'>
                          $idCategoria
                          
                        </div>
                      </div>
                      <hr>
                      <div class='row mt-3'>
                    <div class='col-sm-12 '>
                      $botaoEdit
                    </div>
                  </div>
                </div>
              </div>
            </div>";


$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/perfil.html");

$html = str_replace("[[header]]", $header,$html);
$html = str_replace("[[footer]]", $footer,$html);
$html = str_replace("[[perfil]]", $user,$html);
$html = str_replace("[[base-url]]", $baseUrl,$html);

echo $html;