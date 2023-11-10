<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Ejercicio 4</title>
</head>
<body>
<form action="ejercicio4.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="fecha"> Fecha de Nacimiento</label>
      <input type="date" step="any" name="fecha" class="form-control" id="fecha"  required>
    </div>
   
  <button type="submit" name="calcular" class="btn btn-primary">Calcular</button>
 
</form>
    <?php

    if (isset($_POST['calcular'])) {
      $fecha_n = ($_POST['fecha']);
      $fecha = new DateTime($_POST['fecha']);
      $fecha_ac =  date('Y-m-d');
      $fecha_act = new DateTime (date('Y-m-d'));
      $diff = $fecha->diff($fecha_act);
      $año= $diff->y;
      $mes= $diff->m;
      $dia= $diff->d;
   
      echo "fecha de nacimiento = " . $fecha_n. "<br>".  "Fecha actual = " .$fecha_ac. "<br>".
       "Edad = ".$año." año(s) " .$mes. "mese(s) " .$dia. "dia(S)";   
    }
    ?>
</body>
</html>