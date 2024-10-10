
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Formulario de subida de archivo</h1>
  <form action="showQr.php" method="post" enctype="">

    <input type="hidden" name="MAX_FILE_SIZE" value="200000">

    <label for="txtUrl">Logo del QR:</label>
    <input type="file" id="file" class="file" name="document" accept=".png">
    </p>
    
    <p>
    <label for="txtUrl">Url del QR:</label>
    <input type="url" name="txtUrl" id="" required>
    </p>

    <p>
    <label for="txtName">Texto del QR:</label>
    <input type="text" name="txtQrLabel" id="" required>
    </p>

    <label for="txtName">Nombre del fichero:</label>
    <input type="text" name="txtFileName" id="" required>
    <p>
      <button class="btn" type="submit">Enviar</button>
    </p>
  </form>
</body>

</html>