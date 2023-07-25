<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <main>
    <section>
      <header>
        <h1>Mostrar datos</h1>
      </header>
      <?php
            $nombre = $_POST['nombre'];
            $vacio = $_POST['hidden'];
            $opciones = $_POST['color'];
            $comidas = $_POST['check'];
            $mensaje = $_POST['mensaje'];
            $paises = $_POST['pais'];


            echo "Nombre: " . $nombre . "<br>";
            echo "Vacio: " . $vacio . "<br>";
            echo "Opciones: " . $opciones . "<br>";
            //echo "Comida: " . $comida . "<br>";
            foreach ($comidas as $comida) {
                echo "<p>- $comida</p>";
            }
            echo "Mensaje: " . $mensaje . "<br>";
            echo "Paises: " . $paises;

            ?>
    </section>
  </main>
</body>

</html>