<html>

<head>
  <title>
    Leggi file
  </title>
</head>


<body style="text-align:center;">

  <h1 style="color:green">
    esercizio lettura file
  </h1>

  <h4>
    leggo da file ciao.txt
  </h4>
  <br />
  <br />

  <?php

  $myFile = "ciao.txt";

  if (!file_exists($myFile)) {

    echo "File non trovato<br/><br/>";
  } else if (!$file = fopen($myFile, 'r')) {

    echo "Non riesco ad aprire il file<br/><br/>";
  } else {

    echo "Ho aperto il file<br/><br/>";
    while (!feof($file)) {
      echo fgets($file) . "<br/>";
    }
  }

  ?>
</body>

</html>