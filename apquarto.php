<?php
  $quartos = scandir("Quarto");

   array_shift($quartos);

 array_shift($quartos);
  foreach($quartos as $linha){

 fopen("Quarto/$linha",'a');
   unlink("Quarto/$linha");
}
  rmdir("Quarto");
 echo 'Imagens do quarto feio apagdas
    <form enctype="multipart/form-data" action="leitura.php" method="POST">
  <button type="submit">volta</button>
     </form>
 <form enctype="multipart/form-data" action="index.php">
     <button type="submit">coloca imagens feias</button>
              </form>';