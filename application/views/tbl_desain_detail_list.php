<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Tbl_desain_detail List</h2>
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('tbl_desain_detail/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('tbl_desain_detail/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('tbl_desain_detail'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Uuid</th>
		<th>Id Tbl Desain</th>
		<th>Uuid Tbl Desain</th>
		<th>Posisi</th>
		<th>Deskripsi</th>
		<th>Poto</th>
		<th>Action</th>
            </tr><?php
            foreach ($tbl_desain_detail_data as $tbl_desain_detail)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $tbl_desain_detail->uuid ?></td>
			<td><?php echo $tbl_desain_detail->id_tbl_desain ?></td>
			<td><?php echo $tbl_desain_detail->uuid_tbl_desain ?></td>
			<td><?php echo $tbl_desain_detail->posisi ?></td>
			<td><?php echo $tbl_desain_detail->deskripsi ?></td>
			<td><?php echo $tbl_desain_detail->poto ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('tbl_desain_detail/read/'.$tbl_desain_detail->id),'Read'); 
				echo ' | '; 
				echo anchor(site_url('tbl_desain_detail/update/'.$tbl_desain_detail->id),'Update'); 
				echo ' | '; 
				echo anchor(site_url('tbl_desain_detail/delete/'.$tbl_desain_detail->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('tbl_desain_detail/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('tbl_desain_detail/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
    </body>
</html>