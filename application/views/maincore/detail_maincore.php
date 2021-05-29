<div class="container-fluid">
  <section class="section-dashboard">
    <div class="dashboard-header mt-3 mb-3">
      <h2>Detail Maincore Data</h2>
    </div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('maincore') ?>">Maincore</a></li>
        <li class="breadcrumb-item active" aria-current="page">Details Maincore</li>
      </ol>
    </nav>
    <div class="dashboard-content">
      <div class="card col-lg-4">
        <div class="card-body">
          <h5 class="card-title badge bg-danger text-white">Detail Maincore</h5>
          <table class="table table-responsive">
            <tbody>
            <?php foreach ($detail_maincore as $m) : ?>
              <tr>
                <td>Tanggal</td>
                <th><?= $m['tanggal'] ?></th>
              </tr>
              <tr>
                <td>STO</td>
                <th><?= $m['sto'] ?></th>
              </tr>
              <tr>
                <td>GPON IP</td>
                <th><?= $m['gpon_ip'] ?></th>
              </tr>
              <tr>
                <td>GPON SLOT</td>
                <th><?= $m['gpon_slot'] ?></th>
              </tr>
              <tr>
                <td>SLOT EA</td>
                <th><?= $m['eakses'] ?></th>
              </tr>
              <tr>
                <td>SLOT OA</td>
                <th><?= $m['oakses'] ?></th>
              </tr>
              <tr>
                <td>DATEK ODC</td>
                <th><?= $m['odc'] ?></th>
              </tr>
              <tr>
                <td>Teknisi</td>
                <th><?= $m['teknisi'] ?></th>
              </tr>
              <tr>
                <td>Keterangan</td>
                <th><?= $m['keterangan'] ?></th>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
          <a href="#" class="btn btn-success">Edit Data</a>
          <a href="#" class="btn btn-danger">Hapus Data</a>
      </div>
    </div>
    </div>
  </section>
</div>
<!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->
