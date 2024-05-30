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
        <h2>Test List</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Uuid</th>
		<th>Nama Property</th>
		<th>Nama Komplek</th>
		
            </tr><?php
            foreach ($test_data as $test)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $test->uuid ?></td>
		      <td><?php echo $test->nama_property ?></td>
		      <td><?php echo $test->nama_komplek ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>