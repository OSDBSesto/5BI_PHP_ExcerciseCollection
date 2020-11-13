<html>
<?php
// COMMENTO DI UNA LINEA

echo "ciaone!";

/* COMMENTO
			   MULTILINEA
			*/

$str = "Gabriele";
echo $str; // Gabriele
$str2 = "Pizzi";
echo $str . " " . $str2; // Gabriele Pizzi
echo strlen($str2); // 5
echo strpos($str . " " . $str2, "Pizzi"); // 9
$x = 10;

// deve iniziare con una lettera o un underscore
// contiene solo lettere, numeri, underscore
// NO spazi

if ($str == "Gabriele") {
	echo "sì! Lui è Pizzi!";
} elseif ($str == "Mirko") {
	echo "e lui no";
} else {
	echo "maybe Pogliani";
}

switch ($n) {
	case 1:
		echo "1";
		break;

	case "1":
		echo "stringa 1";
		break;
	case 2:
		echo "2";
		break;

	case "3":
		echo "stringa 3";
		break;

	default:
		echo "def";
}

// ARRAY 
$nomi = array("Andrea", "Mirko", "Gabriele", "Martin");
// 3 array: numerici, associativi, multidimensionali

$numerico = array("Andrea", "Mirko", "Gabriele", "Martin");
$numerico2[0] = "Andrea";
$numerico2[1] = "Mirko";

echo $numerico[2] . " è il più bello";

$associativo = array("Mirko" => 6, "Andrea" => 3);
$nome = "Mirko";
echo $nome . "è il numero " . $associativo[$nome] . " nel registro";

$multidimensionale = array(
	"Pizzi" =>      array("Lasagna", "Pizza", "Sushi"),
	"Gullà" =>      array("Carbonara", "Bunda", "Pasta al sugo"),
	"Zacchello" =>  array("Amatriciana", "Cannelloni", "Tagliatelle al ragù")
);
echo "A Pizzi piace la " . $multidimensionale["Pizzi"][1];
echo "A " . key($multidimensionale) . " piace la " . $multidimensionale["Pizzi"][1];

$arr = array(
	1 =>      array("riga 1, colonna 1", "riga 1, colonna 2", "riga 1, colonna 3"),
	2 =>      array("riga 2, colonna 1", "riga 2, colonna 2", "riga 2, colonna 3"),
	3 =>  	array("riga 3, colonna 1", "riga 3, colonna 2", "riga 3, colonna 3")
);

$arr[4] = array("riga 4, colonna 1", "riga 4, colonna 2", "riga 4, colonna 3");
$arr[4][] = "riga 4, colonna 4";
array_push($arr[4][], "riga 4, colonna 5");

foreach ($arr as $riga) {
	foreach ($riga as $cella) {
		echo $cella . "\n";
	}
}
$i = 0;
while ($i <= 5) {
	echo "weee";
	$i++;
}

do {
	echo "weeee";
	$i++;
} while ($i <= 5);

for ($m = 0; $m <= 5; $m++) {
	echo "ciao<br />";
}

$colori = array("rosso", "giallo", "verde", "blu");
foreach ($colori as $colore_singolo) {
	echo "colore: " . $colore_singolo . "\n";
}

function scriviNome($nome, $cognome)
{
	echo $nome . " " . $cognome;
}

echo "Mi chiamo ";
$pogliani = "Pogliani";
scriviNome("Mattia", $pogliani);

function returnSomma($n, $m)
{
	$somma = $n + $m;
	return $somma;
}

$n = 4;
$m = 7;
echo "La somma di " . $n . " e " . $m . " fa " . returnSomma($n, $m);

// date(format, timestamp);
echo date("d M Y h:m A");

// mktime(ore, minuti, secondi, mese, giornoi, anno)
$bertelli = mktime(04, 32, 00, 04, 23, 2002);
echo date("D d M Y H:i", $bertelli); //Tue 23 Apr 2002 04:32

// Domani è sat 26 sep 2020
echo "Domani è " . date("D d M Y", mktime(
	date("h"),
	date("i"),
	date("s"),
	date("m"),
	date("d") + 1,
	date("Y")
));


?>

<?php echo "ciaone!"; ?>

</html>