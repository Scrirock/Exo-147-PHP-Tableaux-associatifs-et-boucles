<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
    array(
        'nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => array(
            'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
        ),
    ),
    array(
        'nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => array(
            'Ethan Hawke', 'Uma Thurman', 'Jude Law',
        ),
    ),
    array(
        'nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => array(
            'Tom Hanks', 'Gary Sinise',
        ),
    ),
    array(
        'nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => array(
            'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
        ),
    ),
);

echo '12.Mes films : <br>';
//ajoutez votre code ici
    foreach ($videotheque as $arr => $value){
        echo "<br><br>";
        foreach ($value as $key => $film){
            if (is_array($film)){
                echo $key.": ";
                foreach ($film as $acteurs){
                    echo $acteurs.", ";
                }
                echo "<br>";
            }
            else echo $key.": ".$film."<br>";

        }
    }

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo "<br><br>";
echo '13.Mes films : <br>';
//ajoutez votre code ici


$videotheque[] = array(
        "nom" => "test",
        "date" => 1578,
        "realisateur" => "truc",
        "acteur" => array("fgxh", "sthtf", "rgztdh"),
        "synopsys" => "c'est un film qui parle de plein de truc",
    );
$videotheque[] = array(
    "nom" => "bidule",
    "date" => 7845,
    "realisateur" => "alain",
    "acteur" => array("lui", "l'autre", "jean"),
    "synopsys" => "c'est l'histoire d'un fou qui prend des medoc",
);

$videotheque[] = array(
    "nom" => "matthias",
    "date" => 1847,
    "realisateur" => "matthias",
    "acteur" => array("matthias", "matthias", "matthias"),
    "synopsys" => "cla vie de... matthias",
);

foreach ($videotheque as $arr => $value){
    echo "<br><br>";
    foreach ($value as $key => $film){
        if (is_array($film)){
            echo $key.": ";
            foreach ($film as $acteurs){
                echo $acteurs.", ";
            }
            echo "<br>";
        }
        else echo $key.": ".$film."<br>";

    }
}
