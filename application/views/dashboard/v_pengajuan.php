<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Pengajuan Maintenance</h4>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-datatable">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Tgl Pengajuan</th>
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
                            <td><?= $p->nama_forklift; ?></td>
                            <td><?= $p->nama_operator; ?></td>
                            <td><?= $p->keluhan; ?></td>
                            <td>
                                <a href="<?php echo base_url() . 'dashboard/pengajuan_proses/' . $p->id_pengajuan; ?>" class="btn btn-sm btn-primary" onclick="return confirm('Proses pengajuan maintenance?')"><i class="fa fa-gear"></i> Proses</a>
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