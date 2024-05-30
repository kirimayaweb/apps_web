<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Tbl_desain_checkout List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Uuid Checkout</th>
		<th>Group Desain</th>
		<th>Nama Desain</th>
		<th>Model</th>
		<th>Paket</th>
		<th>Jumlah Lantai</th>
		<th>Uuid Property</th>
		<th>Nama Property</th>
		<th>Tipe Property</th>
		<th>Status</th>
		<th>Kota</th>
		<th>Nama Komplek</th>
		<th>Lokasi</th>
		<th>Luas Tanah</th>
		<th>Luas Bangunan</th>
		<th>Jumlah Kamar</th>
		<th>Jumlah Kamar Mandi</th>
		<th>Harga</th>
		<th>Nama Pemesan</th>
		<th>Nmr Wa</th>
		
            </tr><?php
            foreach ($tbl_desain_checkout_data as $tbl_desain_checkout)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tbl_desain_checkout->uuid_checkout ?></td>
		      <td><?php echo $tbl_desain_checkout->group_desain ?></td>
		      <td><?php echo $tbl_desain_checkout->nama_desain ?></td>
		      <td><?php echo $tbl_desain_checkout->model ?></td>
		      <td><?php echo $tbl_desain_checkout->paket ?></td>
		      <td><?php echo $tbl_desain_checkout->jumlah_lantai ?></td>
		      <td><?php echo $tbl_desain_checkout->uuid_property ?></td>
		      <td><?php echo $tbl_desain_checkout->nama_property ?></td>
		      <td><?php echo $tbl_desain_checkout->tipe_property ?></td>
		      <td><?php echo $tbl_desain_checkout->status ?></td>
		      <td><?php echo $tbl_desain_checkout->kota ?></td>
		      <td><?php echo $tbl_desain_checkout->nama_komplek ?></td>
		      <td><?php echo $tbl_desain_checkout->lokasi ?></td>
		      <td><?php echo $tbl_desain_checkout->luas_tanah ?></td>
		      <td><?php echo $tbl_desain_checkout->luas_bangunan ?></td>
		      <td><?php echo $tbl_desain_checkout->jumlah_kamar ?></td>
		      <td><?php echo $tbl_desain_checkout->jumlah_kamar_mandi ?></td>
		      <td><?php echo $tbl_desain_checkout->harga ?></td>
		      <td><?php echo $tbl_desain_checkout->nama_pemesan ?></td>
		      <td><?php echo $tbl_desain_checkout->nmr_wa ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>