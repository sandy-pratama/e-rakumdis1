<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Pengajuan Surat Bebas Hukuman Disiplin</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>No.Tiket</th>
                    <th>Tanggal</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <!-- <th>Pangkat</th>
                    <th>Jabatan</th>
                    <th>Unit Kerja</th>
                    <th>SKPD</th> -->
                    <th>Status</th>
                    <!-- <th>Keterangan</th> -->
                    <th>Dokumen</th>
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
                    <td><?= $aju->dokumen ?></td>
                    <td>
                        <button data-toggle="modal" data-target="#edit<?= $aju->no_tiket ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
                        <!-- <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a> -->
                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action= "<?= base_url('pengajuan/edit/' . $aju->no_tiket) ?>" method="POST">
                <div class="card-body">
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">No.Tiket</label>
                    <input type="email" name="no_tiket" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIP</label>
                    <input type="text" name="nip" class="form-control" id="" value="<?= $aju->nip ?>" placeholder="Masukkan NIP">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NAMA</label>
                    <input type="text" name="nama" class="form-control" id="" value="<?= $aju->nama ?>" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">SKPD</label>
                    <input type="text" name="skpd" class="form-control" id="" value="<?= $aju->skpd ?>" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-check">
                    <label class="form-check-label" for="exampleCheck1">*Surat Pengantar SKPD & Surat Bebas Hukuman Disiplin Dari SKPD</label>
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
