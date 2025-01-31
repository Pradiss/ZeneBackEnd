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
<section class="container mt-4  ">


    <div class="card col-md-6 p-4 rounded-5 shadow ">
            <div class="pb-4">
                <h4 class="fw-bold text-center">Cadastre-se </h4>
            </div>
        
            
        <form method='post' name='form1' id='form1' action='[[base-url]]/usuario/atualizarPerfil/<?=$idUsuario?>' >
            
            <div class='p-3 d-flex '>
                <input type="text" id="nome"  name="nome" class="form-control p-3 me-3 rounded-5" placeholder="Digite seu Nome">
                <div>
                    <input type="number" id="idade"  name="idade" class="form-control p-3 rounded-5"  placeholder=" Idade">

                </div>
            </div>


            <div class='p-3'>
                <input type="email" id="email"  name="email" class="form-control p-3 rounded-5" placeholder="Digite seu Email">
            </div>
            
            <div class='p-3 d-flex'>
                <input type="text" id="cidade"  name="cidade" class="form-control p-3 me-3 rounded-5" placeholder="Digite seu Cidade">
                
                <div>
                    <input type="text" id="uf"  name="uf" class="form-control p-3 rounded-5 " placeholder="Estado">

                </div>
            </div>

            <div class='p-3'>
                <textarea type="text" id="descricao"  name="descricao" class="form-control p-3 rounded-5 " rows="6" cols="70" placeholder="Deixe sua Descrição"></textarea>
            </div>
            

            <button type="submit" id="btnAcessar" name="btnAcessar" class=" rounded-5 w-100  fw-bold text-white btn btn-lg btn-dark">Cadastrar-se</button>
               <input type="hidden" name="acao" value="<?= $acao?>">
               <input type="hidden" name="idUsuario" value="<?= $idUsuario?>">


        </form>
       
    </div>


</section>

</body>
</html>