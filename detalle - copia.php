<!DOCTYPE html>
<html>

<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-139696319-1"></script>
  <script> window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139696319-1');
</script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <title>Cultural Phone - Iglesia de Guadalupe</title>
  <meta name="description" content="Vive experiencias nuevas escuchando las historias de los lugares">
  <meta name="keywords" content="turismo,cartago,valle del cauca,colombia,turismo en cartago,ruta del bordado,">
  <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="img/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
  <link rel="manifest" href="manifest.json">
  <meta name="msapplication-TileColor" content="#e95420">
  <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
  <meta name="theme-color" content="#e95420">
</head>

<body class="pt-5">
<?php
$id = $_REQUEST['id'];
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "culturalphone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM pagina";
$result = $conn->query($sql);

?>

  <div>
    <div class="container-fluid pt-4">
      <div class="row">
        <div class="col-md-12"><img class="img-fluid d-block mx-auto" src="img/20190427181719_IMG_1851-01-min.jpg" width="100%"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <iframe src="audios/silence.mp3" allow="autoplay" id="audio" style="display:none"></iframe>
          <audio autoplay="" class="w-100" controls="">
            <source src="audios/iglesia-guadalupe.mp3" type="audio/mpeg"> Your browser does not support the audio element. </audio>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="mb-3">Iglesia de Guadalupe</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row pb-3">
            <div class="col-md-1"><img class="img-fluid d-block rounded-circle mx-auto" src="img/obando.jpg" alt="Card image cap" width="50"></div>
            <div class="col-md-11">
              <div class="col-9 col-md-12">
                <h6>Contenido generado por:<br><b>Alejandra Obando</b>&nbsp;- CEO de Searchsite</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p>Cuenta la historia que, en 1810 Mariano Hormaza Matute un acaudalado Cartagüeño hizo una promesa a la virgen de Guadalupe para que salvara a su hijo; Ambrosio José quien padecía una penosa enfermedad, en cambio de esto él construiría una capilla en honor a ella, después de que su hijo sanó,Hormaza de Agua México trajo una réplica exacta de la virgen de Guadalupe que se venera en ese país y construyó la capilla,hoy orgullo de los Cartagüeños; esta iglesia a sufrido grandes daños a causa de un incendio en 1960 que destruyó parcialmente la iglesia en donde la imagen de la virgen fue lo poco que se salvó de las llamas.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5 text-light bg-info">
    <div class="container">
      <div class="row">
        <div class="ml-auto col-lg-7 text-center text-lg-left">
          <h1 contenteditable="true">¿Eres generador de contenido?</h1>
          <p class="mb-0">Ingresa tu email y nos pondremos en contacto contigo</p>
        </div>
        <div class="col-lg-4 d-flex justify-content-center align-items-center p-3">
          <form action="https://formspree.io/jsdaza@iegabo.edu.co" method="post" class="form-inline mb-0">
            <div class="input-group"> <input type="email" class="form-control form-control-lg" placeholder="Correo electrónico" id="form2" name="email">
              <div class="input-group-append"> <input type="submit" class="btn btn-secondary btn-lg"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar bg-primary navbar-dark fixed-top">
    <div class="container d-flex justify-content-center">
      <div class="row">
        <div class="col-md-12"><a class="navbar-brand" href="#"><img src="img/logo.png" class="d-inline-block align-top" alt="" height="60" width="223"></a></div>
      </div>
    </div>
  </nav>
  <nav class="navbar bg-primary navbar-dark fixed-top">
    <div class="container d-flex justify-content-center">
      <div class="row">
        <div class="col-md-12"><a class="navbar-brand" href="#"><img src="img/logo.png" class="d-inline-block align-top" alt="" height="60" width="223"></a></div>
      </div>
    </div>
  </nav>
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12"><img class="d-block img-fluid mx-auto pb-3" src="img/logo-iegabo-horizontal.png" width="15%"></div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0">© 2019 Cultural Phone. Todos los derechos reservados</p>
        </div>
      </div>
    </div>
  </div>
  <script src="js/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="js/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>

</html>