<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Petugas</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'dashboard/petugas_tambah';?>" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Petugas Baru</a>
            <br>
            <br>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-datatable">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Jabatan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($petugas as $p){
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p->nama; ?></td>
                            <td><?= $p->username; ?></td>
                            <td>
                                <?php
                                if($p->jabatan == 'admin'){
                                    echo "<span class='badge badge-primary'>Admin</span>";
                                }else if($p->jabatan == 'user'){
                                    echo "<span class='badge badge-success'>User</span>";
                                }
                                ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url() . 'dashboard/petugas_edit/' . $p->id; ?>" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
                                <a href="<?php echo base_url() . 'dashboard/petugas_hapus/' . $p->id; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau menghapus data?')"><i class="fa fa-trash"></i> Hapus</a>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>