
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                <h3 class='box-title'>Tbl_property_checkout Read</h3>
        <table class="table table-bordered">
	    <tr><td>Uuid</td><td><?php echo $uuid; ?></td></tr>
	    <tr><td>Nama Property</td><td><?php echo $nama_property; ?></td></tr>
	    <tr><td>Tipe Property</td><td><?php echo $tipe_property; ?></td></tr>
	    <tr><td>Status</td><td><?php echo $status; ?></td></tr>
	    <tr><td>Kota</td><td><?php echo $kota; ?></td></tr>
	    <tr><td>Nama Komplek</td><td><?php echo $nama_komplek; ?></td></tr>
	    <tr><td>Lokasi</td><td><?php echo $lokasi; ?></td></tr>
	    <tr><td>Luas Tanah</td><td><?php echo $luas_tanah; ?></td></tr>
	    <tr><td>Luas Bangunan</td><td><?php echo $luas_bangunan; ?></td></tr>
	    <tr><td>Jumlah Kamar</td><td><?php echo $jumlah_kamar; ?></td></tr>
	    <tr><td>Jumlah Kamar Mandi</td><td><?php echo $jumlah_kamar_mandi; ?></td></tr>
	    <tr><td>Harga</td><td><?php echo $harga; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tbl_property_checkout') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->