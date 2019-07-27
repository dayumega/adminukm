<div class="nav navbar-nav navbar-right">
   
</div>
  
<div class="form-group">
    <h3>
        <?php echo $title;?>
    </h3>
</div>
<div class="form-group" style="">
    <?php echo $this->session->flashdata('notification');?>

</div>
<Table class="table table-bordered">
    <thead>
        <tr>
            <td>No.</td>
            <td>Faktur Penjualan</td>
            <td colspan="2" style="text-align: center;">Aksi</td>
        </tr>
    </thead>
     <?php 
            $i = 1; 
                foreach($invoice as $data) {   
                ?>
    <tr>
        <td>
            <?php echo $i;?>
        </td>
        <td>
            <?php echo $data->kode_fakturpenj;?>
        </td>
       
        
        <td>
            <a href="<?php echo site_url('invoice/cetak/'.$data->kode_fakturpenj);?>">Cetak
            </a>
        </td>
    
    </tr>
    <?php $i++; } ?>
</Table>