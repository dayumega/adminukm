<div class="container">
    <div class="row">
        <table class="table">
        <tr>
            <td colspan="3"><h3 class="text-center">INVOICE</h3></td>
        </tr>
    </table>
    </div>
    <div class="row">
        <div class="col-md-4">
            <p>Yth. Pelanggan a.n:</p>
            <p><?php echo $data->nama_pelanggan; ?></p>
            <p><?php echo $data->alamat_pelanggan; ?></p>
            <p><?php echo $data->no_telpon_pelanggan; ?></p>
            <p><?php echo $data->email; ?></p>
        </div>
        <div class="col-md-4 text-center">
            <p>Faktur dan Tanggal:</p>
            <p><?php echo $data->kode_fakturpenj; ?></p>
            <p><?php echo $data->tanggal_pesan; ?></p>
            <p><?php echo $data->tanggal_bayar; ?></p>
        </div>
        <div class="col-md-4">
            <p>Hormat Kami a.n karyawan:</p>
            <p><?php echo $data->nama_karyawan; ?></p>
            <p><?php echo $data->nik; ?></p>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <th>No.</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Sub Total Rp.</th>
            </thead>
            <tbody>
                <?php 
                    $no = 1; 
                    $total = 0;

                    foreach($invoice as $daftar) : 

                    $total = $total + ($daftar->hargajual * $daftar->jumlah);
                ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $daftar->kode_produk; ?></td>
                        <td><?php echo $daftar->nama_produk; ?></td>
                        <td><?php echo $daftar->hargajual; ?></td>
                        <td><?php echo $daftar->jumlah; ?></td>
                        <td><?php echo ($daftar->hargajual * $daftar->jumlah); ?></td>
                    </tr>

                 <?php $no++; endforeach;?>
            </tbody>
            <tfoot>
                <tr class="text-right">
                    <td colspan="6">Total <?php echo $total; ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>