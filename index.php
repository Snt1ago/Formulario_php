<!DOCTYPE html>
<html lang="es">

<head>
  <link rel="stylesheet" href="css/styles.css" />
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario</title>
</head>

<body>
  <main>
    <h1 class="titulo">→Formulario←</h1>
    <section class="barra">
      <progress role="progressbar" form="form" id="prog" max="100" value="50"></progress>
    </section>
    <section class="formulario">
      <fieldset class="fie fie-1">
        <legend class="leg leg-1">
          Registro de usuario
        </legend>
        <form id="form" action="procesar.php" target="_self" method="post">
          <label class="label label-1" for="nombre">
            Nombre:
          </label>
          <input id="nombre" type="text" name="nombre" required pattern="[A-Za-z]+" title="solo letras, por favor"
            placeholder="">
          <label class="label label-2" for="hidden">
            Vacio:
          </label>
          <input id="hidden" type="hidden" name="hidden" required pattern="[A-Za-z]+" title="solo letras, por favor"
            placeholder="" value="pepe">
          <fieldset>
            <legend>
              Opciones:
            </legend>
            <input type="radio" name="color" id="rojo" value="rojo">
            <label class="label label-3" for="rojo">
              Rojo
            </label>
            <input type="radio" name="color" id="verde" value="verde">
            <label class="label label-4" for="verde">
              Verde
            </label>
            <input type="radio" name="color" id="azul" value="azul">
            <label class="label label-5" for="azul">
              Azul
            </label>
          </fieldset>
          <fieldset>
            <legend>
              Comida favorita:
            </legend>
            <label for="com1">
              <input id="com1" type="checkbox" name="check[]" value="pizza">Pizza
            </label>
            <label for="com2">
              <input id="com2" type="checkbox" name="check[]" value="panchos">Panchos
            </label>
            <label for="com3">
              <input id="com3" type="checkbox" name="check[]" value="torta-frita">Torta frita
            </label>
          </fieldset>
          <label class="label label-6" for="mensaje">
            Mensaje:
          </label>
          <textarea id="mensaje" name="mensaje" rows="4" cols="50" required pattern="[A-Za-z]
+" title="solo letras, por favor" placeholder="">
</textarea>
          <label for="pais">Paises:</label>
          <select name="pais" id="pais">
            <option value="Uruguay" selected>Uruguay</option>
            <option value="brasil">Brasil</option>
            <option value="colombia">Colombia</option>
          </select>
        </form>
        <button id="enviar" type="submit" name="enviar" form="form">Enviar</button>
      </fieldset>
    </section>
  </main>
  <footer>
    <p>Creador del formulario @Santiago Icasuriaga</p>
  </footer>
</body>

</html>