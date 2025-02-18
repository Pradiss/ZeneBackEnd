<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zene</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>
<body class='bg-dark'>

<section class="container bg-dark">

    
    <div class="row d-flex justify-content-center py-5  ">

        <div class="card col-11 col-md-7 col-lg-5 col-xl-5 py-5 rounded-5 shadow ">
            <div class=" text-center">
                <h4 class="fw-bold text-center  text-uppercase ">Faça seu cadastro  </h4>
                <p>Cadastre-se</p>
            </div>
            
            <form id="form1" name="form1" method="post" action="<?= $baseUrl ?>/perfil/atualizar">
            
            
            <div class='p-3 d-flex '>
                <input type="text" id="nome"  name="nome" class="form-control p-3  rounded-5" placeholder="Digite seu Nome" required>
                <!-- <div>
                        <input type="number" id="idade"  name="idade" class="form-control p-3 rounded-5"  placeholder=" Idade" required>
    
                   </div> -->
            </div>
            
            <div class='p-3 '>
                <input type="usuario" id="usuario"  name="usuario" class="form-control p-3  rounded-5" placeholder="Crie seu Usuario" required>
               
            </div>
            <div class='p-3  '>
                <input type="password" id="senha"  name="senha" class="form-control p-3  rounded-5" placeholder="Crie sua senha" required>
               
            </div>

            <div class='p-3'>
                <input type="email" id="email"  name="email" class="form-control p-3 rounded-5" placeholder="Digite seu Email" required >
            </div>
            
            <div class='p-3 d-flex'>
                <input type="text" id="cidade"  name="cidade" class="form-control p-3 me-3 rounded-5" placeholder="Digite sua Cidade">
                
                <div>
                    <input type="text" id="uf"  name="uf" class="form-control p-3 rounded-5 " placeholder="Estado">

                </div>
            </div>

            <!-- <div class='p-3'>
                <textarea type="text" id="descricao"  name="descricao" class="form-control p-3 rounded-5 " rows="6" cols="70" placeholder="Deixe sua Descrição"></textarea>
            </div> -->
            
            <div class="d-flex py-3 justify-content-center">

                <button type="submit" id="btnAcessar" name="btnAcessar" class=" rounded-5 w-75 fw-bold text-white btn btn-lg btn-dark">Cadastrar-se</button>
            </div>
               <input type="hidden" name="acao" value="<?= $acao?>">
               
            </form>
            
            <div class="text-center mt-4">
              <p class="mb-0">já tem uma conta na Zene? </p>
              <a href="<?=$baseUrl?>/login" class="fw-bold text-dark">Faça seu login</a>
            </div>
       
        </div>

    </div>

    <section>
        <div class="row d-flex justify-content-center">
            
    </section>

</section>

</body>
</html>