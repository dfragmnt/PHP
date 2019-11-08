<?php
// 1.
  $tab2 = [];
  for ($i=1; $i < 11; $i++) {
    $tab2[] = 2 * $i;
  }
  var_dump($tab2);
    //=====================================
// 2.
  $resta = 100;
  //echo $resta . "<br>";
  while ($resta>84){

    echo $resta . " ";
    $resta--;
  }
  echo "<br>";
  //=====================================
// 3.
$contador = 1;
  while($contador<6){
    echo $contador * 2 . " ";
    $contador++;
  }
  echo "<br>";
  //=====================================
// 4.
    $cont = 0;
    $tiros = 0;
  while($cont<6){
    $rand = rand(0,1);
    if($rand == 1){$cont++;}
    $tiros++;
  }
  echo $tiros . "<br>";
  //=====================================
// 5.
  $nombres = ["claudio","cristina","cristian","gustavo","micaela"];
  //a. bucle for
    for ($i=0; $i < count($nombres); $i++) {
      echo $nombres[$i] . " ";
    }
    echo "<br>";
  // b. bucle while
  $aux=0;
    while ($aux<count($nombres)){
      echo $nombres[$aux] . " ";
      $aux++;
    }
    echo "<br>";
  // c. bucle do while
  $i=0;
    do{
      echo $nombres[$i] . " ";
      $i++;
    } while ($i<count($nombres));
    echo "<br>";
  // d. bucle foreach
  foreach($nombres as $value){
    echo $value . " ";
  }
  echo "<br>";
  //=====================================
// 6.
  $arrayRand = [];
  for ($i=0; $i < 10; $i++) {
    $arrayRand[] = rand(0,10);
  }
  foreach ($arrayRand as $val){
    if ($val!=5){
      
    }
  }
?>
