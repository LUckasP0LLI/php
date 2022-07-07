<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Formulario</title>
</head>
<body>
        <form method="post">
          <label>Nota 1</label><br>
          <input type="number" name="Nota1"><br>
          <label>Nota 2 </label><br>
          <input type="Number" name="Nota2"><br>
          <input type="submit" value="Enviar" name="send">
          <input type="reset" value="Limpar">
      </form>
     <?php
     require('cadastrar.php');
     $obj = new Media;
     $obj->calculaMedia();
     ?>
</body>
</html>