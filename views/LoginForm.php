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
<section class="vh-100 gradient-custom bg-dark ">
  <div class="container py-2 h-100 ">
    <div class="row d-flex justify-content-center align-items-center h-100 ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5  ">
        <div class="card bg-white text-dark rounded-5 shadow " style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login </h2>
              <p class="text-white-50 mb-5">Porfavor entre com seu email e senha!</p>
              
                      <?= $erro ?>
                      



        <div class="pb-4">
            <h4 class="fw-bold text-center">Login </h4>
        </div>
    
        
      <form  id="form1" name="form1" method="post" action="<?= $baseUrl ?>/login/autenticar">
        
        <div class='p-3 d-flex '>
            <input type="usuario" id="usuario"  name="usuario" class="form-control p-3 me-3 rounded-5" placeholder="Digite seu Nome">
            
        </div>

        <div class='p-3'>
            <input type="password" id="senha"  name="senha" class="form-control p-3 rounded-5" placeholder="Digite seu Email">
        </div>

        <button type="submit" id="btnAcessar" name="btnAcessar" class=" rounded-5 w-100  fw-bold text-white btn btn-lg btn-dark">Entre </button>
        
      </form>
   
      </div>
            <div>
              <p class="mb-0">Não tem uma conta na Zene? </p>
              <a href="<?=$baseUrl?>/perfil/criar" class="text-dark-50 fw-bold">Cadastre-se Aqui</a>
            </div>
                      
              

            </div>

            <div>
              <p class="mb-0">Não tem uma conta na Zene? </p>
              <a href="<?=$baseUrl?>/perfil/criar" class="text-dark-50 fw-bold">Cadastre-se Aqui</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>