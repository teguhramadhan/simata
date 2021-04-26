<div class="container-fluid">
  <section class="section-dashboard">
    <div class="dashboard-header mt-3 mb-3">
      <h2>Add Maincore Data</h2>
    </div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('maincore') ?>">Maincore</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add maincore data</li>
      </ol>
    </nav>
    <div class="dashboard-content">
      <div class="card mb-4">
        <div class="card-header bg-danger text-white">
          <h4>Form Add Maincore</h4>
        </div>
        <div class="card-body">
          <form action="<?= base_url('maincore/add') ?>" method="post">
            <div class="form-group">
              <label for="email">Tanggal</label>
              <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?= date('d F Y') ?>">
            </div>
            <div class="form-group">
              <label for="teknisi">Technician (in NIK)</label>
              <input type="text" class="form-control" id="teknisi" name="teknisi" value="<?= $users['nama'] ?>">
            </div>
            <div class="form-group">
              <label for="sto">Pilih STO</label>
              <input type="text" class="form-control" id="sto" name="sto">
              <small class="form-text text-muted">(*)masukan 3 digit kode STO</small>
              <?= form_error('sto', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <label for="gpon_slot">GPON SLOT</label>
              <input type="text" class="form-control" id="gpon_slot" name="gpon_slot">
              <small class="form-text text-muted">(*)contoh: GPON 1/1/1</small>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-8">
                  <label for="gpon_ip">GPON IP</label>
                  <input type="text" class="form-control" id="gpon_ip" name="gpon_ip">
                  <small class="form-text text-muted">(*)contoh: EA 1/2/3/4 or OA 1/2/3/4</small>
                  <?= form_error('gpon_ip', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-lg-4">
                  <label for="odc">ODC</label>
                  <input type="text" class="form-control" id="odc" name="odc">
                  <small class="form-text text-muted">(*)masukan 3 digit kode ODC</small>
                  <?= form_error('odc', '<small class="text-danger">', '</small>'); ?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-lg-6">
                  <label for="eakses">E-Akses</label>
                  <input type="text" class="form-control" id="eakses" name="eakses">
                  <?= form_error('eakses', '<small class="text-danger">', '</small>'); ?>
                </div>
                <div class="col-lg-6">
                  <label for="oakses">O-Akses</label>
                  <input type="text" class="form-control" id="oakses" name="oakses">
                  <?= form_error('oakses', '<small class="text-danger">', '</small>'); ?>
                </div>
              </div>
              <small class="form-text text-muted">(*)contoh: EA 1/2/3/4 or OA 1/2/3/4</small>
            </div>
            <div class="form-group">
              <label for="keterangan">Keterangan</label>
              <input type="text" class="form-control" id="keterangan" name="keterangan">
              <small class="form-text text-muted">(*)maximun 20 words</small>
              <?= form_error('keterangan', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary">Add Maincore</button>
            </div>
          </form>
        </div>
      </div>
  </section>
</div>
<!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->