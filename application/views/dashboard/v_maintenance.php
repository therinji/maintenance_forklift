<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Proses Maintenance</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-datatable">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Tgl Pengajuan</th>
                            <th>Status</th>
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
                                if($p->status == 1){
                                ?>
                                
                                <a href="<?php echo base_url() . 'dashboard/maintenance_kondisi/' . $p->id_pengajuan; ?>" class="btn btn-sm btn-success"><i class="fa fa-check"></i> Selesai</a>

                                <?php
                                }else if($p->status == 2){
                                ?>
                                <a href="<?php echo base_url() . 'dashboard/maintenance_lihat/' . $p->id_pengajuan; ?>" class="btn btn-sm btn-primary"><i class="fa fa-file"></i> Lihat</a>
                                <?php
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