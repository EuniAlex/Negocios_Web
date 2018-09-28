<?php
  $intNumero1 = 0;
  $intNumero2 = 0;
  $strOperador = "ADD";
  $strResultado = "";
  $intI = 0;
  $intFact = 1;
  $intX=0;
  $intY= 1;
  $intZ;
  $intI2=0;

  $isGet = "Esta fue una petición no de formulario";
  /*
  GET // localhost/nw/p1/formulario.php
  POST // localhost/nw/p1/formulario.php  --- body las variables
  */
  if(isset($_POST["btnProcesar"])){
    $intNumero1 = floatval($_POST["txtNum1"]);
    $intNumero2 = floatval($_POST["txtNum2"]);
    $strOperador = $_POST["cmbOperator"];
    switch ($strOperador) {
      case 'ADD':
        $strResultado = "La Suma de " . $intNumero1 . " y " . $intNumero2 . " es igual a " . ($intNumero1 + $intNumero2);
        break;
      case 'SUB':
        $strResultado = "La Resta de " . $intNumero1 . " y " . $intNumero2 . " es igual a " . ($intNumero1 - $intNumero2);
          break;
      case 'MUL':
        $strResultado = "La Multiplicación de " . $intNumero1 . " y " . $intNumero2 . " es igual a " . ($intNumero1 * $intNumero2);
        break;
      case 'DIV':
        $strResultado = "La División de " . $intNumero1 . " y " . $intNumero2 . " es igual a " . ($intNumero1 / $intNumero2);
      case 'FACT':
      {
          if($intNumero1<0){
            $strResultado = " El factorial de " . $intNumero1 . " es igual a " . 0;
          }

          else if($intNumero1==0){
            $strResultado = " El factorial de " . $intNumero1 . " es igual a " . 1;
          }

          else if ($intNumero1 > 0 && $intNumero1 <= 100)
          {
              for ($intI = 1; $intI <= $intNumero1; $intI++)
              {
                $intFact = $intFact*$intI;
                $strResultado = "El factorial de " . $intNumero1 . " Es " . $intFact;
              }
          }
            break;
      }
      case 'FIBO':
      {
        for($intI2=0;$intI2<=$intNumero1; $intI2++){
          $intZ=$intY;
          $intY+=$intX;
          $intX=$intZ;

          if($intNumero1 == 1){
              $strResultado= $intNumero1 . " Es un número de la serie de Fibonacci";
          }
          else if ($intNumero1 == $intY){
              $strResultado= $intNumero1 . " Es un número de la serie de Fibonacci";
          }

        }
          break;
      }
      default:
        $intResultado = "Operación no valida!";
        break;
    }

      $isGet = "Esta fue una petición de formulario POST " . $intNumero1 . " | " . $intNumero2;
    }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculadora Simple</title>
  </head>
  <body>
    <h1>Calculadora Simple</h1>
    <form action="formulario.php" method="post">
      <label for="txtNum1">Número 1</label>
      <input id="txtNum1" name="txtNum1"
        type="number" value="<?php echo $intNumero1; ?>"/>
      <br />
      <label for="txtNum2">Número 2</label>
      <input id="txtNum2" name="txtNum2"
        type="number"
        value="<?php echo $intNumero2; ?>"
        />
      <br />
      <label for="cmbOperator">Operación</label>
      <select name="cmbOperator" id="cmbOperator">
        <option value="ADD">Sumar</option>
        <option value="SUB">Restar</option>
        <option value="MUL">Multiplicar</option>
        <option value="DIV">Dividir</option>
        <option value="FACT">Factorial</option>
        <option value="FIBO">Fibonacci</option>
      </select>
      <input type="submit"
        name="btnProcesar" value="Procesar" />
    </form>
    <div style="background-color:#000;color:#0F0;font-family:monospace;">
      <?php echo $isGet; ?>
    </div>
    <div style="background-color:#000;color:#FFF;font-family:monospace;">
      <?php echo $strResultado; ?>
    </div>
  </body>
</html>
