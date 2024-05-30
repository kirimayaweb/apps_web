
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Tbl_desain Read</h3>
        <table class="table table-bordered">
	    <tr><td>Uuid</td><td><?php echo $uuid; ?></td></tr>
	    <tr><td>Id Users Pemilik</td><td><?php echo $id_users_pemilik; ?></td></tr>
	    <tr><td>Group Desain</td><td><?php echo $group_desain; ?></td></tr>
	    <tr><td>Nama Desain</td><td><?php echo $nama_desain; ?></td></tr>
	    <tr><td>Model</td><td><?php echo $model; ?></td></tr>
	    <tr><td>Paket</td><td><?php echo $paket; ?></td></tr>
	    <tr><td>Harga</td><td><?php echo $harga; ?></td></tr>
	    <tr><td>Deskripsi</td><td><?php echo $deskripsi; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_desain') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->