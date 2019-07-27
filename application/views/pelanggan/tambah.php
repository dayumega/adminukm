<legend>Form Data Tambah Tamu</legend>


<form class="form-horizontal" action="<?php echo site_url('pelanggan/proses_tambah_pelanggan'); ?>" method="post" enctype="multipart/form-data">
     <div class="form-group">
        <?php echo $this->session->flashdata('notification');?>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama Pelanggan</label>
        <div class="col-lg-5">
            <input type="text" name="nama" class="form-control" required="" pattern="[A-Za-z ]+" title="Hanya huruf dan spasi" placeholder="Hanya huruf dan spasi">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Alamat</label>
        <div class="col-lg-5">
            <input type="text" name="alamat" class="form-control" required="" pattern="[A-Za-z ]+" title="Hanya huruf dan spasi" placeholder="Hanya huruf dan spasi">
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-2 control-label">No telpon</label>
        <div class="col-lg-5">
            <input type="text" name="notlp" class="form-control" required="" pattern="[0-9]+" title="Hanya boleh angka saja" placeholder="Hanya boleh angka saja">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Email</label>
        <div class="col-lg-5">
            <input type="text" name="email" class="form-control" required="" placeholder="Email">
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('pelanggan');?>" class="btn btn-default">Kembali</a>
    </div>
</form>