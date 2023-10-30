<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <?php require '../funciones/conexion_peliculas.php' ?>

</head>

<body>

  <div class="container">
    <h1>Listado de peliculas</h1>
  </div>

    <table class="table table-striped table-hover">
      <thead class="table table-dark">
        <tr>
          <th>ID Pelicula</th>
          <th>Titulo</th>
          <th>Fecha de estreno</th>
          <th>Edad recomendada</th>
        </tr>
      </thead>
      <tbody>

      <?php
    $sql = "SELECT * FROM peliculas";
    $resultado = $conexion->query($sql);

    while ($fila = $resultado->fetch_assoc()) { // regresar una representación asociativa de la siguiente fila en el resultado,
      echo "<tr>";
      echo "<td>" . $fila['id_pelicula'] . "</td>";
      echo "<td>" . $fila['titulo'] . "</td>";
      echo "<td>" . $fila['fecha_estreno'] . "</td>";
      echo "<td>" . $fila['edad_recomendada'] . "</td>";
      echo "</tr>";
    }
    ?>
      </tbody>
    </table>;

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>