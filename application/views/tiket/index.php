<div class="nav navbar-nav navbar-right">
  <form class="navbar-form navbar-left" role="search" action="<?php echo site_url('tiket/proses_cari_tiket');?>" method="post">
        <div class="form-group">
            <label>Cari Tiket</label>
            <input type="text" class="form-control" placeholder="Search" name="id_tiket" required="">
        </div>
        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Cari</button>
        </form>
</div>
<a href="<?php echo site_url('tiket/tambah');?>" class="btn btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>
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
            <td>Id Tiket</td>
            <td>Tujuan</td>
            <td>Harga</td>
            <td colspan="2" style="text-align: center;">Aksi</td>
        </tr>
    </thead>
    <?php $no=0; foreach($daftar_tiket as $tiket ): $no++;?>
    <tr>

        
        <td><?php echo $no;?></td>
        <td><?php echo $tiket->id_tiket;?></td>
        <td><?php echo $tiket->tujuan;?></td>
        <td><?php echo $tiket->harga;?></td>
        <td><a href="<?php echo site_url('tiket/edit/'.$tiket->id_tiket);?>">Edit</a></td>
        <td><a href="<?php echo site_url('tiket/delete_tiket/'.$tiket->id_tiket);?>" >Delete</a></td>
        

    </tr>
    <?php endforeach;?>
</Table>
