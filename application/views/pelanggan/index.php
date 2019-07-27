<div class="nav navbar-nav navbar-right">
  <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('pelanggan/proses_cari_pelanggan');?>" method="post">
        <div class="form-group">
            <label>Cari Pelanggan</label>
            <input type="text" class="form-control" placeholder="Search" name="id_pelanggan" required="">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
        </form>
</div>
<a href="<?php echo site_url('pelanggan/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
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
            <td>Id Pelanggan.</td>
            <td>Nama Pelanggan</td>
            <td>Alamat</td>
            <td>No Telepon</td>
            <td>Email</td>
            <td colspan="2" style="text-align: center;">Aksi</td>
        </tr>
    </thead>
    <?php $no=0; foreach($daftar_pelanggan as $pelanggan ): $no++;?>
    <tr>

        
        <td><?php echo $no;?></td>
        <td><?php echo $pelanggan->id_pelanggan;?></td>
        <td><?php echo $pelanggan->nama;?></td>
        <td><?php echo $pelanggan->alamat;?></td>
        <td><?php echo $pelanggan->notlp;?></td>
        <td><?php echo $pelanggan->email;?></td>
        <td><a href="<?php echo site_url('pelanggan/edit/'.$pelanggan->id_pelanggan);?>">Edit</a></td>
        <td><a href="<?php echo site_url('pelanggan/delete_pelanggan/'.$pelanggan->id_pelanggan);?>" >Delete</a></td>
        

    </tr>
    <?php endforeach;?>
</Table>
