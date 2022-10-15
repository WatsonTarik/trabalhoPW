<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title> galeria </title>
</head>

<body>
    <div class="container">
<h2> <b> fotos </b> </h>
<div class="row">
            <form enctype="multipart/form-data" action="index.php">
                <button type="submit">coloca imagens</button>
            </form>
            <div></div>
            <div class="col img1"></div>
<div class="col img2"></div>
<div class="col img3"></div>
<div></div>
     <form enctype="multipart/form-data" action="apcozinha.php" method="POST">
    <button type="submit"> apagar cozinha</button>
            </form>
        </div>
        <div class="row">
            <div></div>
            <div class="col img4"></div>
            <div class="col img5"></div>
            <div class="col img6"></div>
            <div></div>
            <form enctype="multipart/form-data" action="apquarto.php" method="POST">
                <button type="submit">apagar quartos</button>
            </form>
        </div>
        <div class="row">
            <div></div>
            <div class="col img10"></div>
            <div class="col img11"></div>
            <div class="col img12"></div>
            <div></div>
            <form enctype="multipart/form-data" action="apsala.php" method="POST">
                <button type="submit">apagar salas</button>
            </form>
        </div>
    </div>
</body>

</html>
<?php

if (is_dir("Cozinha")) {

    $cozinha = scandir("Cozinha");

    array_shift($cozinha);

    array_shift($cozinha);

    $i = 1;

    foreach ($cozinha as $linha) {

        echo "<style>
        .img$i{
          background-image: url(Cozinha/$linha);
          }
          </style>";
        $i++;
    }

} else {
}
if (is_dir("Quarto")) {
    $quarto = scandir("Quarto");
    array_shift($quarto);
    array_shift($quarto);
    $j = 4;
    foreach ($quarto as $linha) {
        echo "<style>
        .img$j{
          background-image: url(Quarto/$linha);
          }
          </style>";
        $j++;
    }

}

if (is_dir("Sala")) {
    $sala = scandir("Sala");
    array_shift($sala);
    array_shift($sala);
    $l = 10;
    foreach ($sala as $linha) {
        echo "<style>
        .img$l{
          background-image: url(Sala/$linha);
          }
          </style>";
        $l++;
    }
}

echo "<style>
.col{
border: 1px solid blue;
height: 300px;
margin: 5px;
position: relative;
background-size: cover;
}

h1{
font-size: 90px;
}";

?>