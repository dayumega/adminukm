<legend>Form Edit Pelanggan</legend>
<div class="form-group">
    <?php echo $this->session->flashdata('notification');?>

</div>
<form class="form-horizontal" action="<?php echo site_url('pelanggan/proses_edit_pelanggan'); ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-lg-2 control-label">Id Pelanggan</label>
        <div class="col-lg-5">
            <input type="text" name="id_pelanggan" class="form-control" value="<?php echo $pelanggan->id_pelanggan;?>" readonly="readonly">
            <!-- <input type="hidden" name="id_karyawan" class="form-control" value="<?php echo $karyawan->id_karyawan;?>"> -->
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama Pelanggan</label>
        <div class="col-lg-5">
            <input type="text" name="nama" class="form-control" value="<?php echo $pelanggan->nama;?>">
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-2 control-label">Alamat</label>
        <div class="col-lg-5">
            <input type="text" name="alamat" class="form-control" value="<?php echo $pelanggan->alamat;?>">
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-2 control-label">No telpon</label>
        <div class="col-lg-5">
            <input type="text" name="notlp" class="form-control" value="<?php echo $pelanggan->notlp;?>">
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-2 control-label">Email</label>
        <div class="col-lg-5">
            <input type="text" name="email" class="form-control" value="<?php echo $pelanggan->email;?>">
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button>
        <a href="<?php echo site_url('pelanggan');?>" class="btn btn-default">Kembali</a>
    </div>
</form>