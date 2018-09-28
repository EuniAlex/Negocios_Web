<?php
  $intEdad = 21;
  $fltDinero = 1023.23;
  $strNombre = "Hola Mundo";
  $vColores = array('blue', 'red', 'green');

  //Hungaro Camello

  $intEdad2 = "21";

  //Comparaciones

  // == comparacion de valor
  // === comparacion de tipo de dato y valor

  if( $intEdad2 === $intEdad ){
    //expression si condicion == true
  }
  else{
    //expresion si condicion == false
  }

  // != desigualdad de valor
  // !== desigualdad de tipo de dato y valor
  // >
  //<
  //>=
  //<=
  // ! negacion
  // && and
  // || or

  switch($intEdad){
    case 21:
      $esMayorDeEdad = true;
      break;
    default:
      $esMayorDeEdad = false;
  }

  $esMayorDeEdad = ( $intEdad >= 21) ? true : false;

  //Operadores Aritmetico
  //+ - * /

  $intNumero1 = 100;
  $intNumero2= 5;
  $intResultado = 0;
  $intResultado = $intNumero1 + $intNumero2;
  //105
  $intResultado = $intNumero1 - $intNumero2;
  $intResultado = $intNumero1 * $intNumero2;
  $intResultado = $intNumero1 / $intNumero2;

  //Operadores Aritmeticos medio avanzado

  $intResultado = 10;
  $intResultado += 4;
  //14+= acumulador
    $intResultado -= 4;
  //10 -= decrementa
  $intResultado *=2;
  //20
  $intResultado /=2;
  //10
  $intResultado ++;
  //11
  $intResultado --;
  //10
  $intResultado = $intResultado ** 3 //Pocencia
  //1000
$fltReisduo = $intResultado%3
  //.33333333

//Estructura de Ciclo

for( $i = 0; $i < 100; $i++){
  //Iteraciones 100
}

while( $i < 100){

  $i++;

}

do{

  $i++;

} while ($i < 100);

//Reglas de los arreglos en php
//Arreglos Asociativos === Listas dinamicamente ligadas
//$vColores

print_r($vColores);
echo '</br>';
$vColores[] = "purple"; //php agrega el valor con el siguiente
//ordinal disponible al final del arreglo

print_r($vColores);

 ?>
