<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Edit Data Pengajuan</h4>
        </div>
        <div class="card-body">
            <a href="<?php echo base_url() . 'user/pengajuan';?>" class="btn btn-sm btn-light btn-outline-dark pull-right"><i class="fa fa-arrow-left"></i> Kembali</a>
            <br>
            <br>

            <?php foreach($pengajuan as $p){ ?>
            <form action="<?php echo base_url() . 'user/pengajuan_update'; ?>" method="post">
                <div class="form-group">
                    <input type="hidden" name="id_pengajuan" value="<?php echo $p->id_pengajuan; ?>">
                    <label for="tgl_pengajuan" class="font-weight-bold">Tgl Pengajuan</label>
                    <input type="date" class="form-control" name="tgl_pengajuan" required="required" value="<?php echo $p->tgl_pengajuan; ?>">
                </div>
                <div class="form-group">
                    <label for="forklift" class="font-weight-bold">Forklift</label>
                    <select name="forklift" class="form-control" required="required">
                        <option value="">-- Pilih Forklift --</option>
                        <?php 
                        foreach($forklift as $f){
                        ?>
                        <option value="<?= $f->id; ?>" <?= $f->id == $p->forklift ? 'selected' : ''?>><?= $f->jenis; ?> - <?= $f->nama; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="operator" class="font-weight-bold">Operator</label>
                    <select name="operator" class="form-control" required="required">
                        <option value="">-- Pilih Operator --</option>
                        <?php 
                        foreach($operator as $o){
                        ?>
                        <option value="<?= $o->id_operator; ?>" <?= $o->id_operator == $p->operator ? 'selected' : ''?>><?= $o->nama; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="keluhan" class="font-weight-bold">Keluhan</label>
                    <textarea name="keluhan" id="" class="form-control" rows='3'><?= $p->keluhan;?></textarea>
                </div>
                
                <input type="submit" class="btn btn-primary" value="Simpan">
            </form>   
            <?php }; ?>
        </div>
    </div>
</div>