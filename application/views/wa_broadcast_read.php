
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Wa_broadcast Read</h3>
        <table class="table table-bordered">
	    <tr><td>Uuid</td><td><?php echo $uuid; ?></td></tr>
	    <tr><td>Proses</td><td><?php echo $proses; ?></td></tr>
	    <tr><td>Nomor Pengirim</td><td><?php echo $nomor_pengirim; ?></td></tr>
	    <tr><td>Pesan</td><td><?php echo $pesan; ?></td></tr>
	    <tr><td>Nomor Tujuan</td><td><?php echo $nomor_tujuan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('wa_broadcast') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->