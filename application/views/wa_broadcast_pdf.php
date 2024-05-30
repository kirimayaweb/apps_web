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
        <h2>Wa_broadcast List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Uuid</th>
		<th>Proses</th>
		<th>Nomor Pengirim</th>
		<th>Pesan</th>
		<th>Nomor Tujuan</th>
		
            </tr><?php
            foreach ($wa_broadcast_data as $wa_broadcast)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $wa_broadcast->uuid ?></td>
		      <td><?php echo $wa_broadcast->proses ?></td>
		      <td><?php echo $wa_broadcast->nomor_pengirim ?></td>
		      <td><?php echo $wa_broadcast->pesan ?></td>
		      <td><?php echo $wa_broadcast->nomor_tujuan ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>