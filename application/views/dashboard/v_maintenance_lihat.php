<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Maintenance</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'dashboard/maintenance';?>" class="btn btn-sm btn-light btn-outline-dark pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
            <br>
            <br>

            <?php foreach($maintenance as $m){ ?>
            <form action="<?php echo base_url() . 'dashboard/maintenance_simpan'; ?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="pengajuan" value="<?php echo $m->id_pengajuan; ?>">
                    <label for="tgl_pengajuan" class="font-weight-bold">Tgl_pengajuan</label>
                    <input type="text" class="form-control" name="tgl_pengajuan" placeholder="Masukkan tgl_pengajuan lengkap" required="required" value="<?php echo $m->tgl_pengajuan; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="forklift" class="font-weight-bold">Forklift</label>
                    <input type="text" class="form-control" name="forklift" placeholder="Masukkan forklift lengkap" required="required" value="<?php echo $m->nama_forklift; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="operator" class="font-weight-bold">Operator</label>
                    <input type="text" class="form-control" name="operator" placeholder="Masukkan operator lengkap" required="required" value="<?php echo $m->nama_operator; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="keluhan" class="font-weight-bold">Keluhan</label>
                    <input type="text" class="form-control" name="keluhan" placeholder="Masukkan keluhan lengkap" required="required" value="<?php echo $m->keluhan; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="tgl_maintenance" class="font-weight-bold">Tgl Maintenance</label>
                    <input type="date" class="form-control" name="tgl_maintenance" placeholder="Masukkan tgl maintenance" required="required" value="<?= $m->tgl_maintenance; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="durasi" class="font-weight-bold">Durasi Pengerjaan</label>
                    <input type="text" class="form-control" name="durasi" required="required" value="<?= $m->durasi; ?>" readonly>
                    
                </div>
                <div class="form-group">
                    <label for="maintenance" class="font-weight-bold">Maintenance</label>
                    <textarea name="maintenance" class="form-control" rows="3" required readonly><?= $m->maintenance; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="keterangan" class="font-weight-bold">Keterangan</label>
                    <textarea name="keterangan" class="form-control" rows="3" required readonly><?= $m->keterangan; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="kondisi" class="font-weight-bold">Kondisi Setelah Maintenance</label>
                    <input type="text" class="form-control" name="kondisi" required="required" value="<?= $m->kondisi == 1 ? 'Ok' : 'Bermasalah'; ?>" readonly>
                </div>
            </form>   
            <?php }; ?>

            
        </div>
    </div>
</div>