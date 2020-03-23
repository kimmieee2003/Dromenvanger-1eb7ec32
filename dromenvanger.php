<?php
echo("hoeveel mensen zijn er?");
$AantalMensen = readline();

if(is_numeric($AantalMensen)){

    for($i=0 ;$i < $AantalMensen; $i++){
        echo("wat is uw naam?");
        $persoon = readline();

        echo("Hoeveel dromen heeft u?");
        $hoeveelDroom = readline();

        $tempDroom = array();

        for( $y=0; $y < $hoeveelDroom; $y++){
            echo("wat is uw droom?");
            $droom = readline();
            
            array_push($tempDroom,$droom);

        }
        $personen[$persoon]=$tempDroom;
    }
}else{
    echo($AantalMensen." is geen getal");
}


foreach($personen as $key=>$val){
    foreach($val as $droom){
        echo("De droom van ".$key." is: ".$droom).PHP_EOL;
    }
}