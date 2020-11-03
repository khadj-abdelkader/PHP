<?php

const PI = 3.1415926535897932;

/**
 * Cette fonction retourne la somme des n premiers entiers et la retourne.
 * @param int $n
 * @return int
 */
function sum(int $n): int
{
    $total = 0;

    for ($i = 1; $i <= $n; $i++) {
        $calc = "$total + $i";
        $total += $i;
        //echo "Je suis à l'itération $i et mon total est de $total ($calc)<br>"; Pour s'aider pendant le dev
    }

    return $total;
}

//echo sum(50);

$heights = [
    180,
    164,
    120,
    205,
    180.3,
    171.25
];


//Cette fonction doit calculer la somme des éléments d'un tableau et la retourner.
function sumTab(array $tab): float
{
    $total = 0;

    //On boucle sur le tableau avec un for
//    for($i = 0; $i < count($tab); $i++) {
//        $total += $tab[$i];
//    }

    //Boucle for
    foreach ($tab as $value) {
        $total += $value;
    }

    return $total;
}

/**
 * Retourne la moyenne des valeurs du tableau
 * @param array $tab
 * @param int $precision
 * @return float
 */
function average(array $tab, int $precision = 2): float
{
    //Calcul de la moyenne
    $avg = sumTab($tab) / count($tab);

    //Arrondi
    return round($avg, $precision);
}

$avgHeight = average($heights);

echo "La taille moyenne est de $avgHeight";
//Cette fonction doit retourner l'élément le plus petit d'un tableau passé en paramètre.

function getMinValueOfArray(array $tab)
{
    $min = $tab[array_key_first($tab)];

    foreach ($tab as $value){
        if ($value < $min){
            $min = $value;
        }
    }
    return $min;
}

echo "Le plus petit fait : " . getMinValueOfArray($heights) . " cm";
echo "<br>";

function getMinValueIndex (array $tab): int{
    $min = $tab [array_key_first($tab)];
    $minIndex = array_key_first($tab);*

    foreach ($tab as $key => $value){
        if (value < $min){
            $min = $value;
            $minIndex = $key;
        }
    }
    return $minIndex;
}

$tab = [5,4,8,2]; // [2,4,5,8]

function sortTab(array $tab):array
{
    $sortedArray = [];
    $count = count($tab);

    for($i = 0; $i < $count; $i++)
    {
        $minIndex = getMinValueOfIndex($tab);
        $sortedArray[] = $tab[$minIndex];
        unset($tab[$minIndex]);
    }
    return $sortedArray;
}

function dump($var): void
{
    echo '<pre>' . var_export($var, true) . '</pre>';
}



 //Exos codingame

function helloWorld()
{
    return "Hello World!";
}


function quiEstLeMeilleurProf()
{
    return "Le prof de programmation Web";
}


function checkPassword(string $passwd): bool
{
    if (strlen($passwd) >= 8) {
        return true;
    }
    return false;

}
var_dump(checkPassword("Coucou hibou"));


function customString (string $s):string{
    return (str_replace(["e", "i", "o"],["3","1","0"], $s));
}
echo customString ("Les cours de programmation sont trop cools");
echo customString ("Bonjour les amis");



function soustraction(int $a, int $b):int{
    return $a - $b;

}
    echo soustraction(8,14);