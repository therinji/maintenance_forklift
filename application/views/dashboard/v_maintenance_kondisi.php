<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Maintenance</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'dashboard/maintenance';?>" class="btn btn-sm btn-light btn-outline-dark pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
            <br>
            <br>

            <?php foreach($pengajuan as $p){ ?>
            <form action="<?php echo base_url() . 'dashboard/maintenance_simpan'; ?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="pengajuan" value="<?php echo $p->id_pengajuan; ?>">
                    <label for="tgl_pengajuan" class="font-weight-bold">Tgl_pengajuan</label>
                    <input type="text" class="form-control" name="tgl_pengajuan" placeholder="Masukkan tgl_pengajuan lengkap" required="required" value="<?php echo $p->tgl_pengajuan; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="forklift" class="font-weight-bold">Forklift</label>
                    <input type="text" class="form-control" name="forklift" placeholder="Masukkan forklift lengkap" required="required" value="<?php echo $p->nama_forklift; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="operator" class="font-weight-bold">Operator</label>
                    <input type="text" class="form-control" name="operator" placeholder="Masukkan operator lengkap" required="required" value="<?php echo $p->nama_operator; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="keluhan" class="font-weight-bold">keluhan</label>
                    <input type="text" class="form-control" name="keluhan" placeholder="Masukkan keluhan lengkap" required="required" value="<?php echo $p->keluhan; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="tgl_maintenance" class="font-weight-bold">Tgl Maintenance</label>
                    <input type="date" class="form-control" name="tgl_maintenance" placeholder="Masukkan tgl maintenance" required="required">
                </div>
                <div class="form-group">
                    <label for="durasi" class="font-weight-bold">Durasi Pengerjaan</label>
                    <select name="durasi" class="form-control" required="required">
                        <option value="">-- Pilih Lama Durasi --</option>
                        <option value="Kurang dari 1 Jam">Kurang dari 1 Jam</option>
                        <option value="1 - 3 Jam">1 - 3 Jam</option>
                        <option value="3 - 6 Jam">3 - 6 Jam</option>
                        <option value="6 Jam - 1 Hari">6 Jam - 1 Hari</option>
                        <option value="Lebih dari 1 Hari">Lebih dari 1 Hari</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="maintenance" class="font-weight-bold">Maintenance</label>
                    <textarea name="maintenance" class="form-control" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="keterangan" class="font-weight-bold">Keterangan</label>
                    <textarea name="keterangan" class="form-control" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="kondisi" class="font-weight-bold">Kondisi Setelah Maintenance</label>
                    <select name="kondisi" class="form-control" required="required">
                        <option value="">-- Pilih Kondisi --</option>
                        <option value="1">Ok</option>
                        <option value="2">Bermasalah</option>
                    </select>
                </div>
                
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>   
            <?php }; ?>

            
        </div>
    </div>
</div>