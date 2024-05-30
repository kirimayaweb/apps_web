
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Tbl_desain_detail Read</h3>
        <table class="table table-bordered">
	    <tr><td>Uuid</td><td><?php echo $uuid; ?></td></tr>
	    <tr><td>Id Tbl Desain</td><td><?php echo $id_tbl_desain; ?></td></tr>
	    <tr><td>Uuid Tbl Desain</td><td><?php echo $uuid_tbl_desain; ?></td></tr>
	    <tr><td>Posisi</td><td><?php echo $posisi; ?></td></tr>
	    <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
	    <tr><td>Poto</td><td><?php echo $poto; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_desain_detail') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->