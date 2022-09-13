<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1> Tambah mahasiswa</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">Tambah Mahasiswa</div>
            </div>
          </div>

          <div class="section-body">
           

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Penambahan Mahasiswa</h4>
                  </div>
                  <?= form_open("mahasiswa/edit_save") ?>
                  <div class="card-body">

                    <input type="hidden" id="id_mhs" name="id_mhs" value="<?= $mahasiswa->id_mhs ?>">

                  <div class="form-group">
                      <label>Nama Mahasiwa</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="<?= $mahasiswa->nama ?>">
                    </div>

                    <div class="form-group">
                      <label>NIM</label>
                      <input type="text" class="form-control" id="nim" name="nim"value="<?= $mahasiswa->nim ?>">
                    </div>

                    <div class="form-group">
                      <label>No.Hp</label>
                      <input type="text" class="form-control" id="No.Hp" name="No.Hp"value="<?= $mahasiswa->no_hp ?>">
                    </div>

                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control" id="Email" name="Email"value="<?= $mahasiswa->email ?>">
                    </div>

                    <div class="form-group">
                      <label>Jurusan</label>
                      <input type="text" class="form-control" id="Jurusan" name="Jurusan" value="<?= $mahasiswa->jurusan ?>">
                    </div>

                    <div class="form-group">
                      <label>Foto Diri</label>
                      <input type="text" class="form-control" id="foto" name="foto"value="<?= $mahasiswa->foto_profil ?>">
                    </div>

                    <div class="form-group">
                      <label>Alamat</label>
                      <input type="text" class="form-control" id="alamat" name="alamat"value="<?= $mahasiswa->alamat ?>">
                    </div>

                  </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>

                  </div>
                  <?= form_close(); ?>
                </div>
              </div>
            </div>
           
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>