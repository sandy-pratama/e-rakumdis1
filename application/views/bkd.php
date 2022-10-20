<div class="card" >
    <div class="card-header">
        <h3 class="card-title">Data Pengajuan Surat Bebas Hukuman Disiplin-BKD</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>NO</th>
                    <th>Tanggal</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <!-- <th>Pangkat</th>
                    <th>Jabatan</th>
                    <th>Unit Kerja</th> -->
                    <th>SKPD</th>
                    <th>Status</th>
                    <!-- <th>Keterangan</th> -->
                    <th>Dokumen</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no =1;
            foreach ($bkd as $aju) : ?>
            <tbody>
                <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $aju->tanggal ?></td>
                    <td><?= $aju->nip ?></td>
                    <td><?= $aju->nama ?></td>
                    <!-- <td><?= $aju->pangkat ?></td>
                    <td><?= $aju->jabatan ?></td>
                    <td><?= $aju->unker ?></td> -->
                    <td><?= $aju->skpd ?></td>
                    <td><?= $aju->status ?></td>
                    <!-- <td><?= $aju->keterangan ?></td> -->
                    <td><?= $aju->dokumen ?></td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>