

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <title>Home Rosa</title>
  <meta name="description" content=""/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="">

  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  
 <!--bootstrap-->
 <link rel="stylesheet" href="/libs/bootstrap.min.css">

<!-- estilos propios -->
  <link rel="stylesheet" href="/styles/estilos_login.css">
  <link rel="stylesheet" href="/styles/colores.css">

</head>



<body class="teal-50">
  <div class="card position-absolute start-50 translate-middle rounded shadow p-3 sigin">

    <div class="card-header mb-5 light-green-500 text-center text-white rounded">
        <h4>Introduzca sus datos de acceso</h4>
    </div>

    <form name="form" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" require>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control"  name="password" id="exampleInputPassword1" require>
      </div>

      <button type="submit" class="btn btn-primary btn-lg btn-en w-100 mt-5">Enviar</button>
    </form>
      <div class=" text-center fs-2 text-color danger">
      <?php echo $msg ?>
      </div>
  </div>
   




    <!--Bottstrap -->
    <script src="/libs/bootstrap.min.js"></script>
</body>
</html>
