<html>
<head>
<title>Pedir edad por teclado</title>
</head>
<body>

<form method="post">
  Edad: <input type="number" name="edad">
  <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Recoger el valor de la edad del formulario
  $edad = $_POST["edad"];
  
  // Comprobar si se ha introducido una edad válida
  if ($edad <= 0) {
    echo "Por favor, introduce una edad válida";
  } else {
    echo "Tu edad es: " . $edad;
  }
}
?>

</body>
</html>
