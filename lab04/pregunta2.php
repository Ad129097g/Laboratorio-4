<?php 

$usuario = $_POST['usuario'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$edad = $_POST['edad'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pregunta 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
        <div class="container" id="p2">
            <div>
                <div id="tittle">
                    <label class="pagina2-text">Bienvenido</label>
                </div><hr>
                <form>
                    <div id="item">
                        <label class="pagina2-text">¡Hola <?php echo $usuario ?> !</label>
                    </div>
                    <div id="item">
                        <label class="pagina2-text"> Tu direccion es <?php echo $direccion ?> </label>
                    </div>
                    <div id="item">
                        <label class="pagina2-text"> Tienes <?php echo $edad ?> y tu correo es <?php echo $email ?></label>
                    </div>
                </form>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="validacion.js"></script>
  </body>
</html>