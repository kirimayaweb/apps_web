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
        <h2>Tbl_property_checkout List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Uuid</th>
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
		
            </tr><?php
            foreach ($tbl_property_checkout_data as $tbl_property_checkout)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tbl_property_checkout->uuid ?></td>
		      <td><?php echo $tbl_property_checkout->nama_property ?></td>
		      <td><?php echo $tbl_property_checkout->tipe_property ?></td>
		      <td><?php echo $tbl_property_checkout->status ?></td>
		      <td><?php echo $tbl_property_checkout->kota ?></td>
		      <td><?php echo $tbl_property_checkout->nama_komplek ?></td>
		      <td><?php echo $tbl_property_checkout->lokasi ?></td>
		      <td><?php echo $tbl_property_checkout->luas_tanah ?></td>
		      <td><?php echo $tbl_property_checkout->luas_bangunan ?></td>
		      <td><?php echo $tbl_property_checkout->jumlah_kamar ?></td>
		      <td><?php echo $tbl_property_checkout->jumlah_kamar_mandi ?></td>
		      <td><?php echo $tbl_property_checkout->harga ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>