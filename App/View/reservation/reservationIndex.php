<?php

function saveData( $datas, $filename ){
    $file = fopen( $filename, "a+" );

    foreach( $datas as $data ){
        fputcsv( $file, $data );
    }

    fclose( $file );
}
/*--------------------------------------*/
function saveOneTask( $task, $filename ){
    $file = fopen( $filename, "a+" );

    fputcsv( $file, $task );

    fclose( $file );
}

/*--------------------------------------*/
function readData( $filename ){
    $file = fopen( $filename, "a+" );

    $datas = [];

    while( true ){
        $data = fgetcsv( $file );
        if( $data == false ){

            break;
        }else{
            $datas[] = $data;
        }
    }

    fclose( $file );

    return $datas;
}


if( isset( $_POST["titre"] )){

    $tacheInfos = [
        $_POST["titre"],
        $_POST["nom"],
        $_POST["jour"]."/".$_POST["mois"]."/".$_POST["annee"]
    ];

    saveOneTask( $tacheInfos, "reservation.csv" );
}

$tasks = [];

$tasks = readData( "reservation.csv" );

include "landingReservationView.php";

?>

