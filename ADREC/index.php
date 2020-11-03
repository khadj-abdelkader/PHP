<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> Cours PHP ADREC</title>
</head>
<body>
<h1> Bienvenue sur le site de Karim </h1>
<h2> Commencez-donc par vous inscrire :</h2>
<form name="inscription" method="post" action="index.php">
    Entrez votre nom : <input type="text" name="nom"> <br>
    Entrez votre ville : <input type="text" name="ville"> <br>
    Entrez votre âge : <input type="text" name="age"> <br>
    <input type="submit" name="valider" value="OK">
</form>

<?php

$firstName = "Karim";
echo strlen($firstName) . "<br>";
$site = "adrec-formation.fr";
$siteLength = strlen($site) . "<br>";

echo $siteLength . "<br>";


$height = 1.73;
$weight = 72.5;

$imc = $weight / ($height * $height);
$text = "Je m'appelle " . $firstName . " et j'ai un IMC de " . $imc . ". Franchement, ça passe ";

$text .= ' ! ';

echo $text;
echo "<br>";

$yo = 20;
$year = 2020;

echo $year - $yo;
echo "<br>";

if ($yo < 20) {
    echo "Mineur";
    echo "<br>";
} elseif ($yo == 18) {
    echo "Juste majeur";
    echo "<br>";
} else {
    echo "Majeur";
    echo "<br>";
}

//Fonction isset = vérifie si la variable n'est pas null
if (isset($_POST["valider"])) {
    $nom = $_POST["nom"];
    $ville = $_POST["ville"];
    echo "Salut $nom de $ville <br> Bienvenue sur mon site ! ";
    echo "<br>";
}

$notes = [12, 14, 9]; //Tableau
$sum = array_sum($notes); //Somme du tableau
$count = count($notes); //Nombre de cases dans le tableau
$avg = $sum / $count; // Moyenne


echo round(array_sum($notes) / count($notes), 2); // En une seule ligne
echo "<br>";

$notes[3] = 17;
$notes[] = 13.5;
$notes[1] = 3;

$user = [
    'first_name' => "Karim",
    'last_name' => "HADJ-ABDELKADER",
    'age' => 20,
    'email' => 'karim-hadj@hotmail.fr',
];

$user2 = [
    'first_name' => "Ilias",
    'last_name' => "HADJ-ABDELKADER",
    'age' => 20,
    'email' => 'iliashadj@hotmail.fr',
];

$users = [$user, $user2];

echo '<pre>' . var_export($users, true) . '</pre>';
echo "<br>";

echo $users[1]['age']; // get age of second user
echo "<br>";

// Déclaration d'une fonction
function getImc(float $height, float $weight)
{
    $height /= 100; // Revient à $height = $height/100;
    return round($weight / ($height * $height), 2);
    echo "<br>";
}


echo getImc(1.73, 72.5);
echo "<br>";


$name = "Karim";

{function totoSuffixer(string $text): string
{
    $text .= "toto";
    return $text;
}

echo totoSuffixer($name);
echo "<br>", $name;
echo "<br>";

function stringDetail(string $s): array
{
    $result = [
        'length' => strlen($s),
        'uppercase' => strtoupper($s),
        'lowercase' => strtolower($s)
    ];
}

//Faire une fonction qui permet de connaître l'état de l'eau (gaz/liquide/solide) en fonction de la température

//$state = floatval(0,100)

function getWaterState(float $temperature): string
{

    if ($temperature <= 0)  {
        return "L'eau est solide";

    } elseif($temperature > 0 && $temperature < 100)
    {
        return "L'eau est liquide";
    }

else
    {
        return "L'eau est gazeuse";
    }
}


$names = [
        "Karim",
        "Théau",
        "Benoît",
        "Güngör",
        "Yohan",
        "Philipp",
        "Lydie",
        "Wendy",
        "Damien",
        "Jean-Baptiste",
        "Sonia",
        "Stéphane",
        "Valéry"
            ];

//Retirer une case du tableau
//unset($names[2]);

// Parcours un tableau avec une boucle
for ($i = 0; $i < count($names); $i++) {
    echo "$names[$i] <br>";
}

function dump($var):void
{
    echo '<pre>' . var_export($notes, true). '</pre>';
}

$notes = [];

for ($i = 0; $i < 100; $i++) {
    $notes[] = rand(0,20);
}

dump($notes);

?>


</body>
</html>