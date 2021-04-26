      <div class="container-fluid">
        <section class="section-dashboard">
          <div class="dashboard-header mt-3 mb-3">
            <h2>Maincore Data</h2>
          </div>
          <div class="dashboard-content">
            <div class="content-header align-self-end mt-2 mb-3">
              <form class="form-inline my-2 my-lg-0">
                <a href="<?= base_url('maincore/add') ?>" class="btn btn-danger ml-auto">
                  Add new Maincore
                </a>
              </form>
              <?= $this->session->flashdata('message'); ?>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered text-center">
                    <thead class="bg-danger text-white">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">STO</th>
                            <th scope="col">GPON</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; ?>
                      <?php foreach ($maincore as $m) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $m['tanggal'] ?></td>
                            <td><?= $m['sto'] ?></td>
                            <td><?= $m['gpon_slot'] ?></td>
                            <td>
                                <a href="#" class="btn btn-primary">
                                  <i class="fas fa-expand-alt"></i>
                                </a>
                            </td>
                        </tr>
                      <?php $i++ ?>
                      <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </section>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
