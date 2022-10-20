<div class="card">
    <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.Tiket</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>SKPDs</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <?php $no =1;
            foreach ($pengajuan as $aju) ; 
            ?>
            <tbody>
                <tr>
                    <td><?= $aju->no_tiket ?></td>
                    <td><?= $aju->nip ?></td>
                    <td><?= $aju->nama ?></td>
                    <td><?= $aju->skpd ?></td>
                    <td>
                        <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>