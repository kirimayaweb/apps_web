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
        <h2>Tbl_property_detail List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Id Tbl Property</th>
		<th>Posisi</th>
		<th>Deskripsi</th>
		<th>Poto</th>
		
            </tr><?php
            foreach ($tbl_property_detail_data as $tbl_property_detail)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tbl_property_detail->id_tbl_property ?></td>
		      <td><?php echo $tbl_property_detail->posisi ?></td>
		      <td><?php echo $tbl_property_detail->deskripsi ?></td>
		      <td><?php echo $tbl_property_detail->poto ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>