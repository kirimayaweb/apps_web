
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Tbl_user Read</h3>
        <table class="table table-bordered">
	    <tr><td>Full Name</td><td><?php echo $full_name; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Password</td><td><?php echo $password; ?></td></tr>
	    <tr><td>Images</td><td><?php echo $images; ?></td></tr>
	    <tr><td>Id User Level</td><td><?php echo $id_user_level; ?></td></tr>
	    <tr><td>Is Aktif</td><td><?php echo $is_aktif; ?></td></tr>
	    <tr><td>No Hp</td><td><?php echo $no_hp; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_user') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->