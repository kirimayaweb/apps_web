
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>TBL_DESAIN LIST <?php echo anchor('tbl_desain/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		<?php echo anchor(site_url('tbl_desain/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
		<?php echo anchor(site_url('tbl_desain/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-primary btn-sm"'); ?>
		<?php echo anchor(site_url('tbl_desain/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Uuid</th>
		    <th>Id Users Pemilik</th>
		    <th>Group Desain</th>
		    <th>Nama Desain</th>
		    <th>Model</th>
		    <th>Paket</th>
		    <th>Harga</th>
		    <th>Deskripsi</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
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
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('tbl_desain/read/'.$tbl_desain->id),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('tbl_desain/update/'.$tbl_desain->id),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('tbl_desain/delete/'.$tbl_desain->id),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->