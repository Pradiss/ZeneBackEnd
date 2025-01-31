<?php 



$header = file_get_contents("views/templates/html/header.html");
$footer = file_get_contents("views/templates/html/footer.html");
$html = file_get_contents("views/templates/html/perfil.html");

$header = str_replace("[[base-url]]",$baseUrl,$header);


echo $header ;
?> 



<section>

    <div class='card p-4'>
        <form method='post' id=>



        </form>
    
    </div>
</section>

<?php 

echo $footer;

?>