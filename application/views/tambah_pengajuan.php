<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Surat Bebas Hukuman Disiplin</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action= "<?= base_url('pengajuan/tambah_aksi')?>" method="POST">
                <div class="card-body">
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">No.Tiket</label>
                    <input type="email" name="no_tiket" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIP</label>
                    <input type="text" name="nip" class="form-control" id="" placeholder="Masukkan NIP">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NAMA</label>
                    <input type="text" name="nama" class="form-control" id="" placeholder="Masukkan Nama">
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">SKPD</label>
                    <input type="text" name="skpd" class="form-control" id="" placeholder="Masukkan Nama">
                  </div> -->
                  <div class="form-group">
                        <label>SKPD</label>
                        <select class="form-control">
                          <option name="skpd">BADAN KEPEGAWAIAN DAERAH</option>
                          <option name="skpd">DINAS PERPUSTAKAAN DAN KEARSIPAN</option>
                          <option name="skpd">DINAS PEKERJAAN UMUM DAN PENATAAN RUANG</option>
                        </select>
                      </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputFile">UPLOAD DOKUMEN</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  <div class="form-check">
                    <label class="form-check-label" for="exampleCheck1">*Surat Pengantar SKPD & Surat Bebas Hukuman Disiplin Dari SKPD</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </form>
            </div>
            <!-- /.card -->