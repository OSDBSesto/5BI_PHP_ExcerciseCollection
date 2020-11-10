<?php
if (isset($_POST['submit']) === true) // Controllo che il form sia stato inviato
{
    $file = fopen('file.txt', 'w'); //  w o w+ che cancella il contenuto precedente
    fwrite($file, $_POST['commento']);
    fclose($file);
}
?>

<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <textarea name="commento" cols="35" rows="8"><?php
echo file_get_contents('file.txt'); // Stampo il contenuto del file txt nella textarea
?></textarea>
    <input type="submit" name="submit" value="Invia">
</form>

<h1>Il contenuto del file txt è</h1>
<p><?php
echo file_get_contents('file.txt');
?></p>