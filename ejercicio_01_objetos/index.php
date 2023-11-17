<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
 
<?php

  include_once("coche.php");
  include_once("bicicleta.php");
  include_once("vehiculo.php");

  $bicicleta = new Bicicleta("1234ABC", "ECO");
  echo "<p>" . $bicicleta->hacercaballito() . "</p>";

  $coche = new Coche("2414CJ");
  echo "<p>" . $coche->quemarRueda(15) . "</p>";

  echo "<p>" . $coche->mover(5) . "</p>";
  echo "<p>" . $coche->getKilometrajeTotal() . "</p>";

?>


</body>

</html>