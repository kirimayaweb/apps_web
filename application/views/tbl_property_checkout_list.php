
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>CHECKOUT LIST <?php echo anchor('tbl_property_checkout/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		<?php echo anchor(site_url('tbl_property_checkout/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
		<?php echo anchor(site_url('tbl_property_checkout/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Pemesan</th>
		    <th>Nama Property</th>
		    <th>Tipe Property</th>
		    <th>Status</th>
		    <th>Kota</th>
		    <th>Nama Komplek</th>
		    <th>Lokasi</th>
		    <th>Luas Tanah</th>
		    <th>Luas Bangunan</th>
		    <th>Jumlah Kamar</th>
		    <th>Jumlah Kamar Mandi</th>
		    <th>Harga</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($tbl_property_checkout_data as $tbl_property_checkout)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td>
          <?php 
            echo $tbl_property_checkout->nama_pemesan;
            echo "<br/>"; 
            echo $tbl_property_checkout->nmr_wa;
          ?>
        </td>
		    <td><?php echo $tbl_property_checkout->nama_property ?></td>
		    <td><?php echo $tbl_property_checkout->tipe_property ?></td>
		    <td><?php echo $tbl_property_checkout->status ?></td>
		    <td><?php echo $tbl_property_checkout->kota ?></td>
		    <td><?php echo $tbl_property_checkout->nama_komplek ?></td>
		    <td><?php echo $tbl_property_checkout->lokasi ?></td>
		    <td><?php echo $tbl_property_checkout->luas_tanah ?></td>
		    <td><?php echo $tbl_property_checkout->luas_bangunan ?></td>
		    <td><?php echo $tbl_property_checkout->jumlah_kamar ?></td>
		    <td><?php echo $tbl_property_checkout->jumlah_kamar_mandi ?></td>
		    <td><?php echo $tbl_property_checkout->harga ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('tbl_property_checkout/read/'.$tbl_property_checkout->id),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('tbl_property_checkout/update/'.$tbl_property_checkout->id),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('tbl_property_checkout/delete/'.$tbl_property_checkout->id),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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