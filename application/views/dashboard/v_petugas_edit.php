<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Edit Data Petugas</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'dashboard/petugas';?>" class="btn btn-sm btn-light btn-outline-dark pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
            <br>
            <br>

            <?php foreach($petugas as $p){ ?>
            <form action="<?php echo base_url() . 'dashboard/petugas_update'; ?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $p->id; ?>">
                    <label for="nama" class="font-weight-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required="required" value="<?= $p->nama; ?>">
                </div>
                <div class="form-group">
                    <label for="username" class="font-weight-bold">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan username login" required="required" value="<?= $p->username; ?>">
                </div>
                <div class="form-group">
                    <label for="password" class="font-weight-bold">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan password login">
                    <p class="text-muted">Kosongi apabila tidak ingin mengganti password</p>
                </div>
                <div class="form-group">
                    <label for="jabatan" class="font-weight-bold">Jabatan</label>
                    <select name="jabatan" class="form-control" required="required">
                        <option value="">-- Pilih Jabatan Petugas --</option>
                        <option value="admin" <?= $p->jabatan == 'admin' ? 'selected' : ''; ?>>Admin</option>
                        <option value="user" <?= $p->jabatan == 'user' ? 'selected' : ''; ?>>User</option>
                    </select>
                </div>
                
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>   
            <?php }; ?>
        </div>
    </div>
</div>