<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Edit Data Forklift</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'dashboard/forklift';?>" class="btn btn-sm btn-light btn-outline-dark pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
            <br>
            <br>

            <?php foreach($forklift as $f){ ?>
            <form action="<?php echo base_url() . 'dashboard/forklift_update'; ?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $f->id; ?>">
                    <label for="nama" class="font-weight-bold">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan nama lengkap" required="required" value="<?php echo $f->nama; ?>">
                </div>
                <div class="form-group">
                    <label for="jenis" class="font-weight-bold">Jenis</label>
                    <select name="jenis" class="form-control" required="required">
                        <option value="">-- Pilih Jenis Forklift --</option>
                        <?php
                        for($i=1;$i<=20;$i++){
                        ?>
                        <option value="<?='T' . $i;?>" <?= $f->jenis == 'T' . $i ? 'selected' : '';?>><?='T' . $i;?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tgl_pembelian" class="font-weight-bold">Tgl Pembelian</label>
                    <input type="date" class="form-control" name="tgl_pembelian" value="<?php echo $f->tgl_pembelian; ?>" required="required">
                </div>
                <div class="form-group">
                    <label for="km" class="font-weight-bold">KM</label>
                    <input type="number" class="form-control" name="km" placeholder="Masukkan KM pada forklift" value="<?php echo $f->km; ?>" required="required">
                </div>
                <div class="form-group">
                    <label for="kondisi" class="font-weight-bold">Kondisi</label>
                    <select name="kondisi" class="form-control" required="required">
                        <option value="">-- Pilih Jenis Forklift --</option>
                        <option value="1"<?= $f->kondisi == 1 ? 'selected' : '';?>>Ok</option>
                        <option value="2" <?= $f->kondisi == 2 ? 'selected' : '';?>>Bermasalah</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tgl_maintenance" class="font-weight-bold">Maintenance Terakhir</label>
                    <input type="date" class="form-control" name="tgl_maintenance" value="<?php echo $f->tgl_maintenance; ?>">
                </div>
                <div class="form-group">
                    <label for="keterangan" class="font-weight-bold">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" placeholder="Masukkan keterangan" value="<?php echo $f->keterangan; ?>">
                </div>
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>   
            <?php }; ?>
        </div>
    </div>
</div>