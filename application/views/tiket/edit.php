<legend>Form Edit kamar</legend>
<div class="form-group">
    <?php echo $this->session->flashdata('notification');?>

</div>
<form class="form-horizontal" action="<?php echo site_url('tiket/proses_edit_tiket'); ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="col-lg-2 control-label">Id Tiket</label>
        <div class="col-lg-5">
            <input type="text" name="id_tiket" class="form-control" value="<?php echo $tiket->id_tiket;?>" readonly="readonly">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Tujuan</label>
        <div class="col-lg-5">
            <input type="text" name="tujuan" class="form-control" value="<?php echo $tiket->tujuan;?>">
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-2 control-label">Harga</label>
        <div class="col-lg-5">
            <input type="text" name="harga" class="form-control" value="<?php echo $tiket->harga;?>">
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button>
        <a href="<?php echo site_url('tiket');?>" class="btn btn-default">Kembali</a>
    </div>
</form>