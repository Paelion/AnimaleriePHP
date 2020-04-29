<?php
/*
    On a besoin d'ouvrir un accès au fichier pour le lire
*/
$file = fopen( "test.csv", "a+" );

$users = [];

/*
    On crée une boucle infinie qui va lire le fichier
    On a besoin de créer cette boucle parce qu'on ne connait
    pas la longueur du fichier.

    C'est la fonction fgetcsv qui va nous signaler la fin du fichier.

    La fonction fgetcsv nous renvoie FALSE quand on arrive à la fin du fichier
*/
while( true ){

    $user = fgetcsv( $file );

    //$users[] = $user;

    //Si $user égale false alors je suis à la fin du fichier
    if( $user == false ){

        /*
            Le mot clef break quand il est utilisé dans une boucle permet d'en sortir.

            Il permet de forcer l'interruption d'une boucle.
        */
        break;
    }

    //On ajoute les user dans le talbeau users après avoir tester la valeur de $user, pour ne pas ajouter la dernière valeur false au tableau
    $users[] = $user;
}

fclose( $file );

var_dump( $users );
?>
