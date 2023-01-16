<?php
define ("SEPARATEUR", "-");

$joueur1 = [
    "nom"=> "Mathieu", 
    "age"=> 20, 
    "estUnHomme"=> true
];
$joueur2 = [
    "nom"=>"Tata",
    "age"=> 18,
    "estUnHomme"=> false
];
$joueur3 = [
    "nom"=> [
        "Nom"=> "Toto",
        "Prenom"=> "Titi"
    ],
    "age"=> 22,
    "estUnHomme"=> true
];

echo $joueur3["nom"]["Prenom"];

genererSeparateur(SEPARATEUR);

// showGamer($joueur1[0], $joueur1[1], $joueur1[2]);
showArray($joueur1);

genererSeparateur(SEPARATEUR);

// showGamer($joueur2[0], $joueur2[1], $joueur2[2]);
showArray($joueur2);
genererSeparateur(SEPARATEUR);

showArray($joueur3);
genererSeparateur(SEPARATEUR);

$differenceAge = calculDifferenceAge($joueur1["age"], $joueur2["age"]);
echo "La différence d'age est de " . $differenceAge;
genererSeparateur(SEPARATEUR);

afficherLeJoueurLePlusAge($joueur1["age"], $joueur2["age"]);
genererSeparateur(SEPARATEUR);

afficherMajeur($joueur1["age"]);
genererSeparateur(SEPARATEUR);

afficherMajeur($joueur2["age"]);

function showGamer($nom, $age, $homme) {
    echo "Nom du joueur:" . $nom;
    echo "<br />";
    echo "Age du joueur:" . $age;
    echo "<br />";

    
    if($homme === true){
        echo "C'est un homme";
        } else { echo "C'est une femme";
        }
}

function afficherLeJoueurLePlusAge($ageJoueur1, $ageJoueur2) {
    if ($ageJoueur1 > $ageJoueur2) {
        echo "Joueur 1 est le plus agé";
    } else {
        echo "Joueur 2 est le plus agé";
    }
}

function calculDifferenceAge($ageJoueur1, $ageJoueur2) {
    $resultat = $ageJoueur1 - $ageJoueur2;
    if ($resultat < 0) {
        $resultat = -$resultat;
    }
    return $resultat;
}

function genererSeparateur($separateur) {
    echo "<br />";
    // for($i = 0; $i < 20; $i++){
    //     echo $separateur;
    // }
    $i = 0;
    while($i < 25) {
        $i++;
        echo $separateur;
    }
    echo "<br />";
}

function afficherMajeur($age) {
    
    switch($age) {
        case 20:
        case 19: echo "Il est majeur";
        break;
        case 18: echo "Il est tout juste majeur";
        break;
        case 17: echo "Il est encore mineur";
        break;
        case 16: echo "Il est mineur";
        break;
        default: echo "??";
        break;
    }
}

function showArray($array) {
    // $nombreCaseTableau = count($array);
    // for($i = 0; $i < $nombreCaseTableau; $i++){
    //     echo $array[$i]. "<br />";
    // }
    foreach($array as $indice => $values){
        if(!is_array($values)){
            echo $indice . ":" . $values . "<br />";
        } else {
            showArray($values);
        }
    }
}
?>