<legend>Form Data Tambah Tiket</legend>


<form class="form-horizontal" action="<?php echo site_url('tiket/proses_tambah_tiket'); ?>" method="post" enctype="multipart/form-data">
     <div class="form-group">
        <?php echo $this->session->flashdata('notification');?>
    </div>
   <div class="form-group">
        <label class="col-lg-2 control-label">Id Tiket</label>
        <div class="col-lg-5">
            <input type="text" name="id_tiket" class="form-control" required="" pattern="[0-9]+" title="Hanya boleh angka saja" placeholder="Hanya boleh angka saja">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Tujuan</label>
        <div class="col-lg-5">
            <input type="text" name="tujuan" class="form-control" required="" pattern="[A-Za-z ]+" title="Hanya huruf dan spasi" placeholder="Hanya huruf dan spasi">
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-2 control-label">Harga</label>
        <div class="col-lg-5">
            <input type="text" name="harga" class="form-control" required="" pattern="[0-9]+" title="Hanya boleh angka saja" placeholder="Hanya boleh angka saja">
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('harga');?>" class="btn btn-default">Kembali</a>
    </div>
</form>