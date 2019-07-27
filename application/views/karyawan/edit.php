<legend>Form Edit karyawan</legend>
<div class="form-group">
    <?php echo $this->session->flashdata('notification');?>

</div>
<form class="form-horizontal" action="<?php echo site_url('karyawan/proses_edit_karyawan'); ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-lg-2 control-label">NIP</label>
        <div class="col-lg-5">
            <input type="text" name="nip" class="form-control" value="<?php echo $karyawan->nip;?>" readonly="readonly">
            <input type="hidden" name="id_karyawan" class="form-control" value="<?php echo $karyawan->id_karyawan;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama karyawan</label>
        <div class="col-lg-5">
            <input type="text" name="namakaryawan" class="form-control" value="<?php echo $karyawan->namakaryawan;?>">
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
            <input type="text" name="notlp" class="form-control" value="<?php echo $karyawan->notlp;?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Password</label>
        <div class="col-lg-5">
            <input type="password" name="password" class="form-control" required="">
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button>
        <a href="<?php echo site_url('karyawan');?>" class="btn btn-default">Kembali</a>
    </div>
</form>