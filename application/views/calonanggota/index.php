<div class="nav navbar-nav navbar-right">
  <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('calonanggota/proses_cari_calonanggota');?>" method="post">
        <div class="form-group">
            <label>Cari Calon Anggota</label>
            <input type="text" class="form-control" placeholder="Search" name="nim" required="">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
        </form>
</div>
<a href="<?php echo site_url('calonanggota/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
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
            <td><b>No.</td>
            <td><b>NIM</td>
            <td><b>Nama Anggota</td>
            <td><b>Divisi</td>
            <td><b>Jurusan</td>
            <td><b>Prodi</td>
            <td><b>No Telepon</td>
            <td colspan="2" style="text-align: center;"><b>Aksi</td>
        </tr>
    </thead>
   <?php $no=0; foreach($daftar_calonanggota as $calonanggota ): $no++;?>
    <tr>

        
        <td><?php echo $no;?></td>
        <td><?php echo $calonanggota->nim;?></td>
        <td><?php echo $calonanggota->nama_anggota;?></td>
        <td><?php echo $calonanggota->divisi;?></td>
        <td><?php echo $calonanggota->jurusan;?></td>
        <td><?php echo $calonanggota->prodi;?></td>
        <td><?php echo $calonanggota->notlp;?></td>
        <td><a href="<?php echo site_url('calonanggota/edit/'.$calonanggota->nim);?>">Edit</a></td>
        <td><a href="<?php echo site_url('calonanggota/delete_calonanggota/'.$calonanggota->nim);?>" >Delete</a></td>

    </tr>
    <?php endforeach;?>
</Table>
