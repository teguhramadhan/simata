<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="<?= base_url('assets/') ?>images/logo.png">
  <title>SIMATA | <?= $title ?></title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/') ?>libraries/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/') ?>styles/main.css" rel="stylesheet">
  <link href="<?= base_url('assets/') ?>styles/simple-sidebar.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;700&display=swap" rel="stylesheet">

</head>

<body class="bg-danger">

    <div class="d-flex justify-content-center align-items-center mt-5 ml-2 mr-2" id="wrapper">
        <section class="section-form-login">
          <form action="<?= base_url('login') ?>" method="post">
            <div class="form-header text-center">
                <img class="img-fluid pb-4" src="<?= base_url('assets/') ?>images/logo_ta.png" alt="Logo TA">
                <?= $this->session->flashdata('message'); ?>
                </div>
                <hr>
              <div class="form-group mt-3">
                    <label><b>Email address</b></label>
                    <input type="email" class="form-control" name="email" id="email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
              <div class="form-group">
                    <label><b>Password</b></label>
                    <input type="password" class="form-control" name="password" id="password">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
              </div>
                <hr>
                <button type="submit" class="btn btn-danger btn-block py-2 mt-3 text-white">
                    Login Account
                </button>
              <div class="form-footer text-center pt-4">
                <p>
                  belum mempunyai akun?
                  <br>
                  <a href="https://t.me/teguhramadhan" target="_blank">Hubungi admin</a>
                </p>
              </div>
            </form>
        </section>
    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?= base_url('assets/') ?>libraries/jquery/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url('assets/') ?>libraries/bootstrap/js/bootstrap.js"></script>

    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>
