<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $tab20 = array();
    for ($i = 0; $i < 20; $i++) {
        $tab20[$i] = 2**$i;
    }
    print_r($tab20);







    /*
     $tab20 = array(1,1);
    for ($i = 2; $i < 20; $i++) {
        $tab20[] = $tab20[$i - 1] + $tab20[$i - 2];
    }
    print_r($tab20);
    */


    /*
    $tablica = array(100);
    $tab2 = array();
    $ilewprzedziale =0;
    for ($i = 0; $i < 10; $i++) {
        $tablica[$i] = rand(3, 20);
       };
    for($i = 0;$i <10; $i++){
        if($tablica[$i] >= 5 &&  $tablica[$i]< 15){
            $ilewprzedziale = $ilewprzedziale +1;
        }
    };
    echo "ile w przedziale<5,15)".$ilewprzedziale;
    

    for ($i = 0; $i < 10; $i++) {
        $tablica[$i] = rand(3, 20);
    }
    for($i = 0;$i <10; $i++){
        if($tablica[$i] > 10){
            $Tab2[] = $tablica[$i];
        }
    }
    rsort($tablica);
    print_r($Tab2);
    print_r($tablica);
    */



    /*
     $tablica = array(10);
     for ($i = 0; $i < 10; $i++) {
     $tablica[$i] = rand(3, 20);
    };
    $minwartosc = min($tablica);
    $maxwartosc = max($tablica);
    $suma = array_sum($tablica);
    $elementy = count($tablica);
    $srednia = $suma / $elementy;
    $nieparzyste=0;
    $parzyste=0;
    $podziel3=0;
    for($i = 0;$i <10; $i++){
        if($tablica[$i]%2 != 0){
            $nieparzyste = $nieparzyste +1;
        }
        else{
            $parzyste = $parzyste +1;
        }
    };
    for($i = 0;$i <10; $i++){
        if($tablica[$i]%3 == 0){
            $podziel3 = $podziel3 +1;
        }
    }
    echo "Parzystych-".$parzyste;
    echo "Nieparzystych-".$nieparzyste;
    echo "podzielnych przez 3-".$podziel3;
    echo " ".$srednia." ";
    echo $minwartosc ,   $maxwartosc;
    print_r($tablica);
    */









    /*
    //wyświetl elementy tablicy które są parzyste, tw elementy które mają nie parzysty index.
    $tablica = array(10);
    for ($i = 0; $i < 10; $i++) {
    $tablica[$i] = rand(0, 10);
}
    for($i = 0;$i <10; $i++){
        if($i%2 != 0){
            echo $tablica[$i]."nie_parzysta-";
        }
        if($tablica[$i] % 2 == 0){
            echo $i."parzysta-";
        }
    }


    print_r($tablica)
    */


    
    
    ?> 
</body>
</html>


