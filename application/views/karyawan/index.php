<div class="nav navbar-nav navbar-right">
  <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('karyawan/proses_cari_karyawan');?>" method="post">
        <div class="form-group">
            <label>Cari NIP</label>
            <input type="text" class="form-control" placeholder="Search" name="nip" required="">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
        </form>
</div>
<a href="<?php echo site_url('karyawan/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
<hr>
<div class="form-group">
    <h3><?php echo $title;?></h3>
</div>
<div class="form-group" style="">
    <?php echo $this->session->flashdata('notification');?>

</div>
<Table class="table table-bordered">
    <thead>
        <tr>
            <td>No.</td>
            <td>NIP</td>
            <td>Nama</td>
            <td>Tipe Golongan</td>
            <td>Jenis Kelamin</td>
            <td>No Telpon</td>
            <td colspan="2" style="text-align: center;">Aksi</td>
        </tr>
    </thead>
    <?php $no=0; foreach($daftar_karyawan as $karyawan ): $no++;?>
    <tr>

        
        <td><?php echo $no;?></td>
        <td><?php echo $karyawan->nip;?></td>
        <td><?php echo $karyawan->namakaryawan;?></td>
        <td><?php echo $karyawan->golongan;?></td>
        <td><?php echo $karyawan->jeniskelamin;?></td>
        <td><?php echo $karyawan->notlp;?></td>
         <?php if ($karyawan->id_golongan == "2") { ?>
        <td><a href="<?php echo site_url('karyawan/edit/'.$karyawan->id_karyawan);?>">Edit</a></td>
        <td><a href="<?php echo site_url('karyawan/delete_karyawan/'.$karyawan->id_karyawan);?>" >Delete</a></td>
        
        <?php } else { ?>
            <td>-</td>
            <td>-</td>
        <?php }  ?>

    </tr>
    <?php endforeach;?>
</Table>
