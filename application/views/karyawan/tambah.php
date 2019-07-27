<legend>Form Data Tambah karyawan</legend>


<form class="form-horizontal" action="<?php echo site_url('karyawan/proses_tambah_karyawan'); ?>" method="post" enctype="multipart/form-data">
     <div class="form-group">
        <?php echo $this->session->flashdata('notification');?>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama karyawan</label>
        <div class="col-lg-5">
            <input type="text" name="namakaryawan" class="form-control" required="" pattern="[A-Za-z ]+" title="Hanya huruf dan spasi" placeholder="Hanya huruf dan spasi">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Golongan</label>
        <div class="col-lg-5">
            <select name="id_golongan" class="form-control">
                <?php foreach($golongan as $row) : ?>
                    <option value="<?= $row->id_golongan; ?>"><?= $row->golongan; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Jenis Kelamin</label>
        <div class="col-lg-5">
            <select name="jeniskelamin" class="form-control">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
    </div>
    
   <div class="form-group">
        <label class="col-lg-2 control-label">No Telepon</label>
        <div class="col-lg-5">
            <input type="text" name="notlp" class="form-control" required="" pattern="[0-9]+" title="Hanya boleh angka saja" placeholder="Hanya boleh angka saja">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-2 control-label">NIP</label>
        <div class="col-lg-5">
            <input type="text" name="nip" class="form-control" required="" placeholder="Awali dengan K">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Password</label>
        <div class="col-lg-5">
            <input type="password" name="password" class="form-control" required="">
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('karyawan');?>" class="btn btn-default">Kembali</a>
    </div>
</form>