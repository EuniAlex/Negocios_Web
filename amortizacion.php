<?php
  $intCapital = 10000;
  $intInteres=10;
  $intPlazo=10;

  $tablaAmortizacion = array();
 //couta =Capital * interes / (1 - (1+ interes)^plaza)
 //interesPagar saldo capital * interesPagar
 //



 $fltCouta = $intCapital
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Tabla de Amortizacion</title>
     <style media="screen">

     </style>
   </head>
   <body>
     <h1>Calculadora de Tabla de Amortizacion</h1>
     <form class="" action="amortizacion.php" method="post">
       <label for="intCaptial">Capital</label>
       <input type="number" name="intCaptial" id="intCaptial"
       value="<?php  echo $intCapital; ?>" placeholder="Capital Incial"/>
       <br>
       <label for="intInteres">Interés Anual</label>
       <input type="number" name="intInteres" id="intInteres"
       min="1" max="50" step="1"
       value="<?php echo $intInteres; ?>">
       <br>
       <label for="intPlazo">Plazo de Pago</label>
       <select id="intPlazo" name="intPlazo">
         <option value="6" <?php  echo($intPlazo == 6)? "select" : ""; ?>>6 Meses</option>
         <option value="12" <?php  echo($intPlazo == 12)? "select" : ""; ?>>12 Meses</option>
         <option value="24" <?php  echo($intPlazo == 24)? "select" : ""; ?>>24 Meses</option>
         <option value="36" <?php  echo($intPlazo == 36)? "select" : ""; ?>>36 Meses</option>
       </select>
       <br>
       <input type="submit" name="btnProcesar" value="Calcular Tablar" id="btnProcesar">
     </form>
     <hr>
     <table>
       <thead>
         <tr>
           <th>Periodo</th>
           <th>Cuota</th>
           <th>Interes</th>
           <th>Pago a Capital</th>
           <th>Amortizacion Acumulada</th>
           <th>Saldo Calculado</th>
         </tr>
       </thead>
     </table>
   </body>
 </html>
