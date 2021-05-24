<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta http-equiv="X-UA-Compatible" content="id=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL; ?>Assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <script src="https://kit.fontawesome.com/1b57b0ac4d.js" crossorigin="anonymous"></script>

    <script type="text/javascript">
    document.write([
      "\<script src='",
      ("https:" == document.location.protocol) ? "https://" : "http://",
      "ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' type='text/javascript'>\<\/script>"
    ].join(''));
    </script>

    <title><?php echo RUTA_SITIO; ?></title>
  </head>
  <body class="bg-light">

  <nav class="navbar navbar-dark bg-dark menu fixed-top d-flex">
  <div class="container-fluid">
    <a href="<?php echo RUTA_URL; ?>" class="navbar-brand text-uppercase fw-bold">DOCTORES - CRUD PHP and MYSQL</a>
    <form class="d-flex" action="<?php echo RUTA_URL; ?>Home/salir">
      <button class="btn btn-outline-danger" type="submit"> Salir</button>
    </form>
  </div>
</nav>

<?php require RUTA_MAIN . '/Views/Layouts/siderbar.php'; ?>