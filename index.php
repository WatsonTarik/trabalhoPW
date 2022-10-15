<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema: Controle de Upload de Imagens </title>
</head>

<body>
    <form enctype="multipart/form-data" method="post" action="valida.php">
        <h4>Sistema: Controle de Upload de Imagens  </h4>
        <br>
 <input type="radio" name="comodo" value="sala"> Sala 
 <br>
        <input type="radio" name="comodo" value="cozi"> Cozinha 
        <br>
        <input type="radio" name="comodo" value="quar"> Quarto 
        <br>
         nome da pasta 1: <input type="text" name="pasta1"> 
         imagem1: <input type="file" name="userfile1"> 
         <br>
         nome da pasta 2: <input type="text" name="pasta2"> 
        imagem2: <input type="file" name="userfile2"> 
        <br>
         nome da pasta 3: <input type="text" name="pasta3"> 
         imagem3 <input type="file" name="userfile3"> 
          <br>
        <button type="submit"> enviar </button> 
    </form>
</body>

</html>