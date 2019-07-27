<legend>Form Data Tambah Booking</legend>


<form class="form-horizontal" action="<?php echo site_url('booking/proses_tambah_booking'); ?>" method="post" enctype="multipart/form-data">
     <div class="form-group">
        <?php echo $this->session->flashdata('notification');?>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Id Booking</label>
        <div class="col-lg-5">
            <input type="text" name="id_booking" class="form-control" value="<?php echo $id_booking; ?>" required="" readonly>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama Pelanggan</label>
        <div class="col-lg-5">
            <select name="id_pelanggan" class="form-control">
                <?php foreach($daftar_pelanggan as $row) : ?>
                    <option value="<?= $row->id_pelanggan; ?>"><?= $row->nama; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Tujuan</label>
        <div class="col-lg-5">
            <select name="tujuan" class="form-control">
                <?php foreach($daftar_tiket as $row) : ?>
                    <option value="<?= $row->id_tiket; ?>"><?= $row->tujuan; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Nama Karyawan</label>
        <div class="col-lg-5">
            <select name="id_karyawan" class="form-control">
                <?php foreach($daftar_karyawan as $row) : ?>
                    <option value="<?= $row->id_karyawan; ?>"><?= $row->namakaryawan; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-2 control-label">Tanggal Pesan</label>
        <div class="col-lg-5">
            <input type="date" name="tgl_pesan" class="form-control" required="">
        </div>
    </div>
   <div class="form-group">
        <label class="col-lg-2 control-label">Tanggal Bayar</label>
        <div class="col-lg-5">
            <input type="date" name="tgl_bayar" class="form-control" required="">
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('booking');?>" class="btn btn-default">Kembali</a>
    </div>
</form>
    <!-- 
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
            <select name="jenis_kelamin" class="form-control">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Alamat</label>
        <div class="col-lg-5">
           <textarea type="text" name="alamat" ></textarea>
        </div>
    </div>
    
   <div class="form-group">
        <label class="col-lg-2 control-label">No_telpon</label>
        <div class="col-lg-5">
            <input type="text" name="no" class="form-control" required="" pattern="[0-9]+" title="Hanya boleh angka saja" placeholder="Hanya boleh angka saja">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-2 control-label">NIK</label>
        <div class="col-lg-5">
            <div class="form_error">
                <?php echo validation_errors();?>
                <div>    
                <input type="type" name="nik" class="form-control" value="<?php echo set_value('nik');?>" required="">

                </div>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Password</label>
        <div class="col-lg-5">
            <input type="password" name="password" class="form-control" required="">
        </div>
    </div> -->