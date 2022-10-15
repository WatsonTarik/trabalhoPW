<?php
$dir = $_POST['comodo'];
if (is_dir($dir)) {
    // Nada
} else {
    mkdir($dir);
}

$nome1 = $_FILES['userfile1']['name'];
$nome2 = $_FILES['userfile2']['name'];
$nome3 = $_FILES['userfile3']['name'];

$nomeTem1 = $_FILES['userfile1']['tmp_name'];
$nomeTem2 = $_FILES['userfile2']['tmp_name'];
$nomeTem3 = $_FILES['userfile3']['tmp_name'];

$nomeFi1 = $_POST['pasta1'];
$nomeFi2 = $_POST['pasta2'];
$nomeFi3 = $_POST['pasta3'];

$parIn1 = pathinfo("$nome1");
$parIn2 = pathinfo("$nome2");
$parIn3 = pathinfo("$nome3");

$extenc1 = $parIn1['extension'];
$extenc2 = $parIn2['extension'];
$extenc3 = $parIn3['extension'];

if ($extenc1 == "jpg" || $extenc1 == "png" ||  $extenc1 == "jpeg") {

 echo "extenção aceita";
 $ctr1 = move_uploaded_file($nomeTem1, $dir . "/" . $nomeFi1 . ".$extenc1");
} else {

echo "extenção não aceita";

}
echo "<br>";
if ($extenc2 == "jpg" || $extenc2 == "png" || $extenc2 == "jpeg") {

    echo "extenção aceita";

    $ctr2 = move_uploaded_file($nomeTem2, $dir . "/" . $nomeFi2 . ".$extenc2");

} else {

echo "extenção não aceita";

}
echo "<br>";
if ($extenc3 == "jpg" || $extenc3 == "png" || $extenc3 == "jpeg") {

  echo "extenção aceita";

  $ctr3 = move_uploaded_file($nomeTem3, $dir . "/" . $nomeFi3 . ".$extenc3");

} else {

 echo "extensão não aceita";

}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> oi doidin</title>
</head>

<body>
    <form method="post" action="leitura.php">
        <button type="submit"> ler </button>
    </form>
</body>

</html>