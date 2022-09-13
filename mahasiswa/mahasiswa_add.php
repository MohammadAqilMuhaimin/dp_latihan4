<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1> Tambah Mahasiswa</h1>
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
                  <?php echo form_open_multipart("mahasiswa/add_save"); ?>
                  <div class="card-body">

                  <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>NIM</label>
                    <input type="text" class="form-control">
                  </div>

                  <div class="form-group">
                    <label>No.Hp</label>
                    <input type="text" class="form-control" >
                  </div>

                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" >
                  </div>

                  <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" class="form-control" >
                  </div>

                  <div class="form-group">
                    <label>Upload Foto</label>
                    <input type="file" class="form-control" >
                  </div>

                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" >
                  </div>

                  </div>

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>

                  </div>
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>
           
          </div>
        </section>
      </div>
<?php $this->load->view('dist/_partials/footer'); ?>