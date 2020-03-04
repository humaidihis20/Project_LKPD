<div class="container-fluid">

<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Soal</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?= $this->session->flashdata('message'); ?>
                <?php
                if ($this->session->flashdata('message') !=null) {
                  echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                  <strong>Berhasil!</strong> Anda Berhasil Mengubah Data Soal.
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                  <span aria-hidden='true'>&times;</span>
                  </button>
                  </div>";
                }
                ?>
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead class="text-center">
                    <tr>
                      <th scope="" width="6%">No</th>
                      <th scope="">Soal</th>
                      <th scope="" width="20%">Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody>
                    <?php 
                    $i = 1;
                    foreach ($ambil as $p) : ?>
                    <tr>
                      <td class="text-center"><?= $i ?></td>
                      <td><?= $p['soal'] ?></td>
                      <td class="text-center">
                      <a href="<?= base_url()?>soal/edit/<?=$p['id'] ?>" class="btn btn-info">Edit</a>
                      <a href="<?= base_url()?>soal/hapus/<?=$p['id'] ?>" class="btn btn-danger" onclick="javascript:return confirm('Are you sure you want to delete this comment?')">Delete</a>
                      </td>
                    </tr>
                    <?php $i++; 
                  endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          </div>
        </div>
