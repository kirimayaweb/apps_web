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
        <h2>Tbl_mp3 List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Kode Mp3</th>
		<th>Judul</th>
		<th>Keterangan</th>
		
            </tr><?php
            foreach ($tbl_mp3_data as $tbl_mp3)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $tbl_mp3->kode_mp3 ?></td>
		      <td><?php echo $tbl_mp3->judul ?></td>
		      <td><?php echo $tbl_mp3->keterangan ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>