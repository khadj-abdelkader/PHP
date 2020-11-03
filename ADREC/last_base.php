<?php

$adrec = [
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
//Retourne true si le prénom existe dans le tableau
function isInArray(string $search, array $tab):bool
{
    foreach($tab as $value)
    {
        if ($value === $search) {
            return true;
        }
    }
    return false;

}

/*
 * Calcul TVA
 * Faire une fonction prenant en paramètrees le prix HT + le taux de TVA et qui retourne le TTC
 */
/**
 * @param float $priceHT
 * @param float $TVA Taux de TVA exprimé entre 0 et 1
 * @return float
 */
function getTTC(float $priceHT, float $TVA):float
{
    return $priceHT + ($priceHT * $TVA);
}

$rtx3090 = 1000;
$rtx3090TTC = getTTC($rtx3090, 0.20);

echo "Le prix TTC de la carte est de $rtx3090TTC €";



/*
 * Avec deux boucles for, écrire :
 * 1
 * 22
 * 333
 * 4444
 * 555555
 */
?>