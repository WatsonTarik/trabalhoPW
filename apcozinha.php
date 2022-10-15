<?php
$cozinha = scandir("Cozinha");

array_shift($cozinha);

array_shift($cozinha);

foreach($cozinha as $linha){
    fopen("Cozinha/$linha",'a');
    unlink("Cozinha/$linha");
}

 rmdir("Cozinha");

 echo 'Imagens da cozinha feia apagadas

<form enctype="multipart/form-data" action="leitura.php" method="POST">

<button type="submit">volta</button>

</form>
<form enctype="multipart/form-data" action="index.php">

<button type="submit">coloca imagens feias</button>

</form>';