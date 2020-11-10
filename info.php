<html>

<body>

  <?php

  include("functions.php");
  debug_to_console($_POST);

  $user = "mattia";
  $pass = "mattia";
  if ($_POST["user"] == $user && $_POST["pwd"] == $user) {
    echo "benvenuto" . $_POST["name"] . " " . $_POST["surname"];
  } else {
    echo "lei non è il benvenuto,
        per tornare alla pagina di login:
        <a hfref=\"form.php\">clicchi qui</a>";
  }
  ?>
</body>

</html>