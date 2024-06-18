<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Tambah Operator Baru</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'dashboard/operator';?>" class="btn btn-sm btn-light btn-outline-dark pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
            <br>
            <br>
        
            <form action="<?php echo base_url() . 'dashboard/operator_tambah_aksi'; ?>" method="post">
                <div class="form-group">
                    <label for="nama" class="font-weight-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required="required">
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>   
        </div>
    </div>
</div>