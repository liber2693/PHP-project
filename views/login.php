<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="../images/unnamed.png">
  <meta charset="utf-8">
  <!-- <link rel="shortcut icon" href="theme/img/icono1.png"> -->
  <title>Fortaleza y Constancia</title>
  <!-- Bootstrap CSS -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../assets/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../assets/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../css/estilos.css" rel="stylesheet" />
</head>
<body background="../images/1.jpg">
  <br><br>
  <div>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="../index.php"><i class="fa fa-rotate-left"><b>&nbsp;&nbsp; Volver</b></i></a>
  </div>
  <div class="container">
    <!-- <center><img src="#" width="160" height="90"></center><br><br> --><br><br><br><br><br>
<form class="login-form" name="login" id="login">
<!--  <form class="login-form" method="post" action="../controllers/sesionController.php"> -->
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <label><b>USUARIO</b></label>
      <div class="alert danger ocultar" id="error2"><strong>Usuario Incorrecto</strong></div>
      <div class="alert success ocultar" id="error"><strong>Por favor, logueate</strong></div>
      <div class="input-group">
        <span class="input-group-addon"><i class="icon_profile"></i></span>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nombre de Usuario" autofocus>
      </div>
    </div>
  </div>
<br>
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <label><b>CONTRASEÑA</b></label>
      <div class="alert success ocultar" id="error1"><strong>Por favor, Introduzca su Contraseña</strong></div>
      <div class="alert danger ocultar" id="error3"><strong>Contraseña Incorrecta</strong></div>
      <div class="input-group">
        <span class="input-group-addon"><i class="icon_key_alt"></i></span>
        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" autocomplete="off">
      </div>
    </div>
  </div>
<br><br>
<div class="row">
  <div class="col-sm-6 col-sm-offset-4">
    <div class="col-sm-4">
      <!--<button class="btn btn-success btn-md btn-block" type="submit" id="enviar"><b>Entrar</b></button>-->
      <button class="btn btn-success btn-md btn-block" type="submit"><b>Entrar</b></button>
    </div>
    <div class="col-sm-4">
      <button class="btn btn-danger btn-md btn-block" type="reset"><b>Limpiar</b></button>
  </div>
</div>
</div>
</form>

  </div>
</body>
  <!-- javascritp -->
  <script src="../assets/js/jquery-2.1.1.min.js"></script>
  <script src="../js/usuario.js"></script>
</html>
