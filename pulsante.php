<html>

<head>
    <title>
        Quale pulsante ho premuto?
    </title>
</head>

<body style="text-align:center;">

    <h1 style="color:green">
        esercizio script php integrato
    </h1>

    <h4>
        Quale pulsante ho premuto?
    </h4>

    <?php

    if (isset($_POST['button1'])) {
        echo "Selezionato BOTTONE1";
    }
    if (isset($_POST['button2'])) {
        echo "Selezionato BOTTONE2";
    }
    ?>

    <form method="post">
        <input type="submit" name="button1" value="BOTTONE1" />

        <input type="submit" name="button2" value="BOTTONE2" />
    </form>
    </head>

</html>