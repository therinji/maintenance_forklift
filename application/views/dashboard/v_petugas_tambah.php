<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Tambah Petugas Baru</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'dashboard/petugas';?>" class="btn btn-sm btn-light btn-outline-dark pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
            <br>
            <br>
        
            <form action="<?php echo base_url() . 'dashboard/petugas_tambah_aksi'; ?>" method="post">
                <div class="form-group">
                    <label for="nama" class="font-weight-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required="required">
                </div>
                <div class="form-group">
                    <label for="username" class="font-weight-bold">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan username login" required="required">
                </div>
                <div class="form-group">
                    <label for="password" class="font-weight-bold">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan password login" required="required">
                </div>
                <div class="form-group">
                    <label for="jabatan" class="font-weight-bold">Jabatan</label>
                    <select name="jabatan" class="form-control" required="required">
                        <option value="">-- Pilih Jabatan Petugas --</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </div>
                
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>   
        </div>
    </div>
</div>