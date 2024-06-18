<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Operator</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'dashboard/operator_tambah';?>" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i> Operator Baru</a>
            <br>
            <br>
            
            <div class="table-responsive">
                <table class="table table-bordered table-striped table-hover table-datatable">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama</th>
                            <th width="16%">Opsi</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <?php
                        $no = 1;
                        foreach($operator as $o){
                        ?>    
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $o->nama;?></td>
                            <td>
                                <a href="<?php echo base_url() . 'dashboard/operator_edit/' . $o->id_operator; ?>" class="btn btn-sm btn-warning"><i class="fa fa-wrench"></i> Edit</a>
                                <a href="<?php echo base_url() . 'dashboard/operator_hapus/' . $o->id_operator; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin mau menghapus data?')"><i class="fa fa-trash"></i> Hapus</a>
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