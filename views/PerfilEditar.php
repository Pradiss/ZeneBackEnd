<?php 

$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/perfil.html");

$header = str_replace("[[base-url]]",$baseUrl,$header);


echo $header ;

?>
<section class="vh-100 bg-dark perfil">
 <div class="container ">
    

<div class="row d-flex justify-content-center">
   <div class="col-md-5">
      <div class="card rounded-5 mb-4 rounded-3 shadow-sm ">
         <div class="card-header   py-3">
            <h4 class="my-0 fw-bold text-dark text-center">Edite sua conta</h4>
         </div>
         <div class="card-body p-4">


            <form id="form" name="form" method="post" action="<?= $baseUrl ?>/perfil/atualizarPerfil/<?= $idUsuario ?>">
                
            <div class='p-3 '>
                <input type="usuario" id="usuario"  name="usuario" class="form-control p-3  rounded-5" placeholder="Digite seu Usuario" value="<?=$usuario?>" required >
               
            </div>
            

            <div class='p-3 d-flex '>
                <input type="text" id="nome"  name="nome" class="form-control p-3 me-3 rounded-5" placeholder="Digite seu Nome" value="<?=$nome?>"  required>
                <div>
                    <input type="number" id="idade"  name="idade" class="form-control p-3 rounded-5"  placeholder=" Idade" value="<?=$idade?>"  required>

                </div>
            </div>

            <div class='p-3 '>
                <input type="text" id="telefone"  name="telefone" class="form-control p-3  rounded-5" placeholder="Ex:(dd) 98080-9000" value="<?=$telefone?>" >
               
            </div>
            

            <div class='p-3'>
                <input type="email" id="email"  name="email" class="form-control p-3 rounded-5" placeholder="Digite seu Email"  value="<?=$email?>" required >
            </div>
            
            <div class='p-3 d-flex'>
                <input type="text" id="cidade"  name="cidade" class="form-control p-3 me-3 rounded-5" placeholder="Digite sua Cidade" value="<?=$cidade?>" >
                
                <div>
                    <input type="text" id="uf"  name="uf" class="form-control p-3 rounded-5 " placeholder="Estado" value="<?=$uf?>" >

                </div>
            </div>

            <div class='p-3'>
                <input type="text" id="foto"  name="foto" class="form-control p-3 rounded-5" placeholder="Coloque o Link da imagem"  value="<?=$foto?>" required >
            </div>

            <div class='p-3'>
                <textarea type="text" id="descricao"  name="descricao" class="form-control p-3 rounded-5 " rows="6" cols="70" placeholder="Deixe sua Descrição" value="<?=$edscricao?>"></textarea>
            </div> 
            
               
               <button type="submit" id="btnAcessar" name="btnAcessar" class="w-100 btn btn-lg btn-primary rounded-5">Editar</button>
               <input type="hidden" name="acao" value="<?= $acao?>">
               <input type="hidden" name="idUsuario" value="<?= $idUsuario?>">
               
            </form>


            </div>
      </div>
   </div>
</div>
</div>
  </section>

<?php

echo $footer;


?>