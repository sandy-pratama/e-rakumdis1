<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pengajuan Surat Bebas Hukuman Disiplin</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Tanggal</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <!-- <th>Pangkat</th>
                    <th>Jabatan</th>
                    <th>Unit Kerja</th>
                    <th>SKPD</th> -->
                    <th>Status</th>
                    <!-- <th>Keterangan</th> -->
                    <!-- <th>Dokumen</th> -->
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no =1;
            foreach ($pengajuan as $aju) : ?>
            <tbody>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $aju->tanggal ?></td>
                    <td><?= $aju->nip ?></td>
                    <td><?= $aju->nama ?></td>
                    <!-- <td><?= $aju->pangkat ?></td>
                    <td><?= $aju->jabatan ?></td>
                    <td><?= $aju->unker ?></td>
                    <td><?= $aju->skpd ?></td> -->
                    <td><?= $aju->status ?></td>
                    <!-- <td><?= $aju->keterangan ?></td> -->
                    <!-- <td><?= $aju->dokumen ?></td> -->
                    <td>
                        <button data-toggle="modal" data-target="#edit<?= $aju->no_tiket ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <!-- <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a> -->
                        <!-- <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a> -->
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal Edit-->
<?php foreach ($pengajuan as $aju) { ?>
    
<div class="modal fade" id="edit<?= $aju->no_tiket ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Pengajuan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
      <form action= "<?= base_url('pengajuan/edit/' . $aju->no_tiket) ?>" method="POST">

      <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Data Pengajuan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-5">
                    <input type="text" name="nip" class="form-control" value="<?= $aju->nip ?>">
                  </div>
                  <div class="col-7">
                    <input type="text" name="nama" class="form-control" value="<?= $aju->nama ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-12">
                    <input type="text" name="pangkat" class="form-control" value="<?= $aju->pangkat ?>" placeholder="Masukkan Pangkat/Golongan">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-12">
                    <input type="text" name="jabatan" class="form-control" value="<?= $aju->jabatan ?>" placeholder="Masukkan Jabatan">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-12">
                    <input type="text" name="satker" class="form-control" value="<?= $aju->satker ?>" placeholder="Masukkan Satuan Kerja">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-12">
                    <input type="text" name="skpd" class="form-control" value="<?= $aju->skpd ?>">
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                    <select name="status" class="form-control">
                          <option>DITERIMA SKPD</option>
                          <option>DITOLAK SKPD</option>
                        </select>
                    </div>
                  </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                    <label class="form-check-label" for="exampleCheck1">*Surat Pengantar & Surat Bebas Hukuman Disiplin Dari SKPD</label>
                </div>
              </div>

                <!-- /.card-body -->
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-danger">Reset</button>
                </div>
              </form>
      </div>
    </div>
  </div>
</div>
<?php } ?> 
