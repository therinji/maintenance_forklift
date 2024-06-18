<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Pengajuan Maintenance</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'user/pengajuan_tambah';?>" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Pengajuan Baru</a>
            <br>
            <br>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-datatable">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Tgl Pengajuan</th>
                            <th>Status Pengajuan</th>
                            <th>Forklift</th>
                            <th>Operator</th>
                            <th>Keluhan yang dirasakan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($pengajuan as $p){
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p->tgl_pengajuan; ?></td>
                            <td>
                            <?php
                                if($p->status == 0){
                                    echo "<span class='badge badge-secondary'>Diajukan</span>";
                                }else if($p->status == 1){
                                    echo "<span class='badge badge-warning'>Diproses</span>";
                                }else if($p->status == 2){
                                    echo "<span class='badge badge-success'>Selesai</span>";
                                }
                            ?>
                            </td>
                            <td><?= $p->nama_forklift; ?></td>
                            <td><?= $p->nama_operator; ?></td>
                            <td><?= $p->keluhan; ?></td>
                            <td>
                                <?php 
                                if($p->status == 0){
                                ?>
                                <a href="<?php echo base_url() . 'user/pengajuan_edit/' . $p->id_pengajuan; ?>" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
                                <a href="<?php echo base_url() . 'user/pengajuan_hapus/' . $p->id_pengajuan; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau menghapus data?')"><i class="fa fa-trash"></i> Hapus</a>
                                <?php
                                }else{
                                    echo "-";
                                }
                                ?>
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