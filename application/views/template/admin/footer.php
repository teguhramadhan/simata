
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