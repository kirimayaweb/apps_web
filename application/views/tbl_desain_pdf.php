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
        <h2>Tbl_desain List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Uuid</th>
		<th>Id Users Pemilik</th>
		<th>Group Desain</th>
		<th>Nama Desain</th>
		<th>Model</th>
		<th>Paket</th>
		<th>Harga</th>
		<th>Deskripsi</th>
		
            </tr><?php
            foreach ($tbl_desain_data as $tbl_desain)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tbl_desain->uuid ?></td>
		      <td><?php echo $tbl_desain->id_users_pemilik ?></td>
		      <td><?php echo $tbl_desain->group_desain ?></td>
		      <td><?php echo $tbl_desain->nama_desain ?></td>
		      <td><?php echo $tbl_desain->model ?></td>
		      <td><?php echo $tbl_desain->paket ?></td>
		      <td><?php echo $tbl_desain->harga ?></td>
		      <td><?php echo $tbl_desain->deskripsi ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>