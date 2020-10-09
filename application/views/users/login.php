<!DOCTYPE html>
<html lang="en">
<!-- START: Head-->

<head>
  <meta charset="UTF-8">
  <title>Pick Admin</title>
  <link rel="shortcut icon" href="<?= base_url() ?>dist/images/favicon.ico" />
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- START: Template CSS-->
  <link rel="stylesheet" href="<?= base_url() ?>dist/vendors/bootstrap/css/bootstrap.min.css">
  ">
  <link rel="stylesheet" href="<?= base_url() ?>dist/vendors/flags-icon/css/flag-icon.min.css">

  <!-- END Template CSS-->

  <!-- START: Custom CSS-->
  <link rel="stylesheet" href="<?= base_url() ?>dist/css/main.css">
  <!-- END: Custom CSS-->
</head>
<!-- END Head-->

<!-- START: Body-->

<body id="main-container" class="default">
  <!-- START: Main Content-->
  <div class="container">
    <div class="row vh-100 justify-content-between align-items-center">
      <div class="col-12">
        <form action="#" class="row row-eq-height lockscreen  mt-5 mb-5">
          <div class="lock-image col-12 col-sm-5"></div>
          <div class="login-form col-12 col-sm-7">
            <div class="form-group mb-3">
              <label for="emailaddress">Correo institucional</label>
              <input class="form-control" type="email" id="emailaddress" required="" placeholder="Ingresa tu email">
            </div>

            <div class="form-group mb-3">
              <label for="password">Contraseña</label>
              <input class="form-control" type="password" required="" id="password" placeholder="Ingresa tu contraseña">
            </div>

            <div class="form-group mb-0">
              <button class="btn btn-success" type="submit"> Entrar </button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
  <!-- END: Content-->

  <!-- START: Template JS-->
  <script src="<?= base_url() ?>dist/vendors/jquery/jquery-3.3.1.min.js"></script>

  <!-- END: Template JS-->
</body>
<!-- END: Body-->

</html>