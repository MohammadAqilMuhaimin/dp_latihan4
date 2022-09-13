<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Mahasiswa</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">Mahasiswa</div>
            </div>
          </div>

          <div class="section-body">
           

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>List Daftar Mahasiswa</h4>
                  </div>
                  <div class="card-body">
                  <a href="mahasiswa/add" class="btn btn-primary">Tambah Data</a>
                  </div>
                  
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped" id="table-1">
                        <thead>                                 
                          <tr>

                            <th>Nama Mahasiswa</th>
                            <th>NIM</th>
                            <th>Nomer Hp</th>
                            <th>Email</th>
                            <th>Jurusan</th>
                            <th>Foto Profil</th>
                            <th>Alamat</th>
                            <th></th>

                          </tr>
                        </thead>
                        <tbody>                                 
                        <?php foreach ($mahasiswa as $row): ?>
                            <tr>
                                <td><?= $row->nama; ?></td>
                                <td><?= $row->nim; ?></td>
                                <td><?= $row->no_hp; ?></td>
                                <td><?= $row->email; ?></td>
                                <td><?= $row->jurusan; ?></td>
                                <td><?= $row->foto_profil; ?></td>
                                <td><?= $row->alamat; ?></td>
                                <td>
                                    <a href="mahasiswa/edit/<?php echo($row->id_mhs); ?>" class="btn btn-warning">Edit</a>
                                    <a href="mahasiswa/hapus/<?= $row->id_mhs; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>