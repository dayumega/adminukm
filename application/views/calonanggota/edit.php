<legend>Form Edit Calon Anggota</legend>
<div class="form-group">
    <?php echo $this->session->flashdata('notification');?>

</div>
<form class="form-horizontal" action="<?php echo site_url('calonanggota/proses_edit_calonanggota'); ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-lg-2 control-label">NIM</label>
        <div class="col-lg-5">
            <input type="text" name="nim" class="form-control" value="<?php echo $calonanggota->nim;?>" readonly>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama Anggota</label>
        <div class="col-lg-5">
            <select name="nama_anggota" class="form-control">
                <?php foreach($daftar_calonanggota as $row) : ?>
                    <option <?php if($row->nim==$calonanggota->nim) echo "selected";?> value="<?= $row->nim; ?>"><?= $row->nama_anggota; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Divisi</label>
        <div class="col-lg-5">
            <select name="divisi" class="form-control">
                <?php foreach($daftar_calonanggota as $row) : ?>
                    <option <?php if($row->nim==$calonanggota->nim) echo "selected";?> value="<?= $row->nim; ?>"><?= $row->divisi; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Prodi</label>
        <div class="col-lg-5">
            <select name="prodi" class="form-control">
                <?php foreach($daftar_calonanggota as $row) : ?>
                    <option <?php if($row->nim==$calonanggota->nim) echo "selected";?> value="<?= $row->nim; ?>"><?= $row->prodi; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-2 control-label">No Telepon</label>
        <div class="col-lg-5">
            <input type="" name="notlp" class="form-control" value="<?php echo $calonanggota->notlp;?>">
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button>
        <a href="<?php echo site_url('booking');?>" class="btn btn-default">Kembali</a>
    </div>
</form>