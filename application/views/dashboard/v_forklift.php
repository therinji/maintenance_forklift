<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Forklift</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'dashboard/forklift_tambah';?>" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Forklift Baru</a>
            <br>
            <br>

            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-datatable">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Tgl Pembelian</th>
                            <th>KM</th>
                            <th>Kondisi</th>
                            <th>Maintenance Terakhir</th>
                            <th>Keterangan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($forklift as $f){
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $f->nama; ?></td>
                            <td><?= $f->jenis; ?></td>
                            <td><?= $f->tgl_pembelian; ?></td>
                            <td><?= $f->km . 'KM'; ?></td>
                            <td>
                                <?php
                                if($f->kondisi == '1'){
                                    echo "<span class='badge badge-success'>Ok</span>";
                                }else if($f->kondisi == '2'){
                                    echo "<span class='badge badge-warning'>Bermasalah</span>";
                                }
                                ?>
                            </td>
                            <td><?= $f->tgl_maintenance;?></td>
                            <td><?= $f->keterangan;?></td>
                            <td>
                                <a href="<?php echo base_url() . 'dashboard/forklift_edit/' . $f->id; ?>" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
                                <a href="<?php echo base_url() . 'dashboard/forklift_hapus/' . $f->id; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau menghapus data?')"><i class="fa fa-trash"></i> Hapus</a>
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