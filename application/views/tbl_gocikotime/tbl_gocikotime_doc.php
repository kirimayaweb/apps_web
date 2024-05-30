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
        <h2>Tbl_gocikotime List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Idtoko</th>
		<th>Namatoko</th>
		<th>Waktugociko</th>
		<th>Tahun</th>
		<th>Bulan</th>
		<th>Hari</th>
		<th>Jam</th>
		<th>Menit</th>
		<th>Detik</th>
		
            </tr><?php
            foreach ($tbl_gocikotime_data as $tbl_gocikotime)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tbl_gocikotime->idtoko ?></td>
		      <td><?php echo $tbl_gocikotime->namatoko ?></td>
		      <td><?php echo $tbl_gocikotime->waktugociko ?></td>
		      <td><?php echo $tbl_gocikotime->tahun ?></td>
		      <td><?php echo $tbl_gocikotime->bulan ?></td>
		      <td><?php echo $tbl_gocikotime->hari ?></td>
		      <td><?php echo $tbl_gocikotime->jam ?></td>
		      <td><?php echo $tbl_gocikotime->menit ?></td>
		      <td><?php echo $tbl_gocikotime->detik ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>