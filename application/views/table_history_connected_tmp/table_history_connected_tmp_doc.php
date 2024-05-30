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
        <h2>Table_history_connected_tmp List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Uuid Summary</th>
		<th>Idtoko</th>
		<th>Namatoko</th>
		<th>Jam Play</th>
		<th>Menit Play</th>
		<th>Date Input</th>
		
            </tr><?php
            foreach ($table_history_connected_tmp_data as $table_history_connected_tmp)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $table_history_connected_tmp->uuid_summary ?></td>
		      <td><?php echo $table_history_connected_tmp->idtoko ?></td>
		      <td><?php echo $table_history_connected_tmp->namatoko ?></td>
		      <td><?php echo $table_history_connected_tmp->jam_play ?></td>
		      <td><?php echo $table_history_connected_tmp->menit_play ?></td>
		      <td><?php echo $table_history_connected_tmp->date_input ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>