<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zene</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link rel="stylesheet" href="[[base-url]]/views/templates/css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        .bg{
        background: linear-gradient(to right, #d8d8d8, #BEE4ED);
    } 
    </style>



</head>
<body class="bg" >
<section class="vh-100 gradient-custom ">
  <div class="container py-2 h-100 ">
    <div class="row d-flex justify-content-center align-items-center  h-100">
    

      <div class="col-12 col-md-8 col-lg-6 col-xl-5 ">
        
        <div class="card bg-white text-dark rounded-5" style="border-radius: 1rem;">
          
          <div class="card-body p-5 text-center">
            <div class="mb-md-5 mt-md-4 ">

              <h2 class="fw-bold mb-2 text-capitalize">Olá Músico</h2>
              <p class="text-dark-50 mb-4">Bem vindo ao Zene!! </p>
              
                      <?= $erro ?>
                      <form id="form1" name="form1" method="post" action="<?= $baseUrl ?>/login/autenticar"> 
                       
                        <div class='p-3  '>
                          <input type="usuario" id="usuario"  name="usuario" class="form-control p-3 me-3 rounded-5" placeholder="Digite seu Usuario">
               
                        </div>  
                        <div class='p-3 '>
                          <input type="password" id="senha"  name="senha" class="form-control p-3 me-3 rounded-5" placeholder="Digite sua Senha">
               
                          <div class="text-end">
                            <a href="" class="text-dark fw-bold "><small >Esqueceu sua senha ?</small></a>
                          </div>
                        </div>  
                       

                        
                        <div class="m-3">
                          <button type="submit" id="btnAcessar" name="btnAcessar" class=" rounded-5 w-100 fw-bold text-white btn btn-lg btn-dark">Acessar</button>

                        </div>

                     </form>
                    
            </div>

            <div>
              <small class="mb-0">Não tem uma conta na Zene? </small>
              <a href="<?=$baseUrl?>/perfil/criar" class="text-dark fw-bold ">Cadastre-se </a>
              <ul class="list-unstyled mt-5">
                <li class="mb-2">
                  <i class="bi bi-instagram fs-4 me-3"><a href="#!" ></a></i>
              
                  <i class="bi bi-facebook fs-4  me-3"><a href="#!" ></a></i>

                  <i class="bi bi-whatsapp fs-4  me-3"><a href="#!" ></a></i>

                  <i class="bi bi-linkedin fs-4  me-3"><a href="#!" ></a></i>
                </li>
               </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>