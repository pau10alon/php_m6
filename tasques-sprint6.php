<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>PHP 6 nivel 3</title>
</head>
<body>
<?php
    echo '<h1>Ejercicio 1 nivel 1</h1>';
    $a = 315;
    $b = 90;
    function resta($a,$b){
      return ($a-$b);
    }
    echo $a.'-'.$b.'= '.resta($a,$b);
    
    echo '<h1>Ejercicio 2 nivel 1</h1>';
    $edad = 13;
    if ($edad % 2 == 1)
      echo 'Su edad ,'.$edad.', es impar';
    else
      echo 'Su edad ,'.$edad.', es par';
  
    echo '<h1>Ejercicio 3 nivel 1</h1>';
   
    function parell_o_imparell($edad){
      if ($edad % 2 != 1)
        echo 'Su edad ,'.$edad.', es par';
      else
        echo 'Su edad ,'.$edad.', es impar';
    }
    $edad = 34;
    parell_o_imparell($edad);
    
    echo '<h1>Ejercicio 4 nivel 1</h1>';
    $contador = 1;
    do{
      echo '   ->   '.$contador;
      $contador++;
    }while($contador <= 10);


echo '<h1>Ejercicio 1 nivel 2</h1>';
  
  $i = 0;
  while ($i<=10){
    if ($i < 10) echo $i.' - ';
    else echo $i;
    $i+=2;
  }
  
  echo '<h1>Ejercicio 2 nivel 2</h1>';

  $i = 0;
  $end = 51;
  for ($i=0;$i<=$end;$i+=2){    /*$end es el parámetro hasta donde cuenta*/
    if ($i < $end-1) echo $i.' - ';
    else echo $i;
  }
  
  echo '<h1>Ejercicio 3 nivel 2</h1>';

  function joc_amagatall($fin = 10){ /*valor por defecto a $fin a 10*/
    for ($i=0;$i<=$fin;$i++){
      if ($i<$fin) echo $i.' - ';
      else echo $i;
    }
  }
  joc_amagatall(); 


echo '<h1>Ejercicio 1 nivel 3</h1>';
echo '<h2>Años olímpicos</h2>';
  $ini = 1960;
  $fin = 2016;
  for ($ini;$ini<=$fin;$ini+=4){   /*$ini+=4 es lo mismo que Sini=$ini+4*/
    if ($ini<$fin) echo $ini.' - ';/*el if-else es para el formato guión.*/
    else echo $ini;
  }

  echo '<h1>Ejercicio 2 nivel 3</h1>';
  $chocolate=1; // cantidad de chocolate
  $chicle=10;  // cantidad de chicle
  $caramelo=5;  //cantidad de caramelos
  $total=0.0;
  for ($i=1;$i<=$chocolate;$i++){
    $total+=1;  // precio de 1 euro por chocolate
  }
  for ($i=1;$i<=$chicle;$i++){
    $total+=0.5; // 0.5 euros por chicle
  }
  for ($i=1;$i<=$caramelo;$i++){
    $total+=1.5; // 1.5 euros por caramelo
  }
  echo 'Para '.$chocolate.' de chocolate, '.$chicle.' de chicle y '.$caramelo.' de caramelo el total es:<br>'; 
  if ($total<1)
    echo 'Total = '.($total*100).' céntimos';
  else if($total ==1)
    echo 'Total = '.$total.' euro';
  else
    echo 'Total = '.$total.' euros';

  echo '<h1>Criba de Eratóstenes nivel 3</h1>';
  
  
  //Criba de Eratóstenes
  //Obtener las lista de números a evaluar
  
  function criba_eratostenes($limite = 1000){

    for($i=2;$i<$limite;$i++){
      $numeros[$i]=true;
    }

    //Hacer 2 el primer número primo
    $numeros[2]=true;

    //Recorrer los números y para cada uno
    for ($n=2;$n<$limite;$n++){
      //Si es primo recorrer los múltiplos y marcarlos como no primo
      if ($numeros[$n]){
        for ($i=$n*$n;$i<$limite;$i+=$n){
          $numeros[$i] = false;
        }
      }
    }

    //Muestro la lista de los primos 
    echo "Primos: ";
    for ($n = 2; $n < $limite; $n++){
      if ($numeros[$n]){
        echo $n." ";
      }
    }
  }
  criba_eratostenes();

?>
</body>
</html>

