<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zene</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>
<body>
<section class="container mt-4">
 <div class="container mt-5">

<div class="row d-flex justify-content-center">
   <div class="col-md-5">
      <p class="text-center fs-3">Zene</p>
      <div class="card mb-4 rounded-3 shadow-sm ">
         <div class="card-header bg-secondary py-3">
            <h4 class="my-0 fw-normal text-white">Cadastro</h4>
         </div>
         <div class="card-body p-4">

        

            <p><small>Cadastre-se</small></p>

            <form id="form1" name="form1" method="post" action="<?= $baseUrl ?>/perfil/atualizar">
               <div class="form-floating mb-3">
                  <input type="text" name="nome" id="nome" class="form-control"  >
                  <label for="nome">Nome:</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="usuario" name="usuario" id="usuario" class="form-control" >
                  <label for="usuario">Usuário:</label>
               </div>
               <div class="form-floating mb-3">
                  <input type="password" name="senha" id="senha" class="form-control">
                  <label for="senha">Senha:</label>
               </div>
              
               
               <button type="submit" id="btnAcessar" name="btnAcessar" class="w-100 btn btn-lg btn-primary">Criar</button>
               <input type="hidden" name="acao" value="<?= $acao?>">
               
            </form>

         </div>
      </div>
   </div>
</div>
</div>
  </section>


</body>
</html>