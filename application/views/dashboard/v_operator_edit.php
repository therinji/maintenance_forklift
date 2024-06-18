<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Edit Data Operator</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'dashboard/operator';?>" class="btn btn-sm btn-light btn-outline-dark pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
            <br>
            <br>

            <?php foreach($operator as $o){ ?>
            <form action="<?php echo base_url() . 'dashboard/operator_update'; ?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $o->id_operator; ?>">
                    <label for="nama" class="font-weight-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required="required" value="<?php echo $o->nama; ?>">
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>   
            <?php }; ?>
        </div>
    </div>
</div>