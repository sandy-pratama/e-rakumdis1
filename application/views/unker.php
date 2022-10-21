<div class="card" >
    <div class="card-header">
        <h3 class="card-title">Data Referensi Unit Kerja</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <!-- <th>NO</th> -->
                    <th>Kode</th>
                    <th>Unit Kerja</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php $no =1;
            foreach ($unker as $unk) : ?>
            <tbody>
                <tr class="text-center">
                    <!-- <td><?= $no++ ?></td> -->
                    <td><?= $unk->kode ?></td>
                    <td><?= $unk->unker ?></td>
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