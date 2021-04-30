<!-- Sidebar -->
<div class="bg-danger border-right" id="sidebar-wrapper">
    <div class="sidebar-heading ">
        <img src="<?= base_url('assets/') ?>images/logo_ta_white.png" class="img-fluid" alt="logo TA">
      </div>
      <div class="list-group list-group-flush mt-4">
        <a href="<?= base_url('admin') ?>" class="list-group-item list-group-item-action bg-danger text-white py-3">
          <i class="fa fw fa-tachometer-alt"></i>
          Dashboard
        </a>
        <a href="<?= base_url('maincore'); ?>" class="list-group-item list-group-item-action bg-danger text-white py-3">
          <i class="fa fw  fa-table"></i>
          Data Maincore
        </a>
        <a href="data-teknisi.html" class="list-group-item list-group-item-action bg-danger text-white py-3">
          <i class="fa fw fa-user-friends"></i>
          Management Account
        </a>
        <a href="<?= base_url('login/logout') ?>" class="list-group-item list-group-item-action bg-danger text-white py-3">
          <i class="fa fw fa-sign-out"></i>
          Logout Account
        </a>
    </div>
</div>
<!-- /#sidebar-wrapper -->