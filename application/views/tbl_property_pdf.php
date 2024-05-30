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
        <h2>Tbl_property List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Uuid</th>
		<th>Nama Property</th>
		<th>Tipe Property</th>
		<th>Status</th>
		<th>Nama Komplek</th>
		<th>Lokasi</th>
		<th>Luas Tanah</th>
		<th>Luas Bangunan</th>
		<th>Jumlah Kamar</th>
		<th>Jumlah Kamar Mandi</th>
		<th>Harga</th>
		
            </tr><?php
            foreach ($tbl_property_data as $tbl_property)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tbl_property->uuid ?></td>
		      <td><?php echo $tbl_property->nama_property ?></td>
		      <td><?php echo $tbl_property->tipe_property ?></td>
		      <td><?php echo $tbl_property->status ?></td>
		      <td><?php echo $tbl_property->nama_komplek ?></td>
		      <td><?php echo $tbl_property->lokasi ?></td>
		      <td><?php echo $tbl_property->luas_tanah ?></td>
		      <td><?php echo $tbl_property->luas_bangunan ?></td>
		      <td><?php echo $tbl_property->jumlah_kamar ?></td>
		      <td><?php echo $tbl_property->jumlah_kamar_mandi ?></td>
		      <td><?php echo $tbl_property->harga ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>