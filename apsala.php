<?php
   $salas = scandir("Sala");
   array_shift($salas);
  array_shift($salas);
 foreach($salas as $linha){
     fopen("Sala/$linha",'a');
      unlink("Sala/$linha");
}
   rmdir("Sala"); 
  echo 'fotos da sala feia apagadas
   <form enctype="multipart/form-data" action="leitura.php" method="POST">
    <button type="submit">volta</button>
  </form>
 <form enctype="multipart/form-data" action="index.php">
    <button type="submit">coloca imagens feias</button>
               </form>';
