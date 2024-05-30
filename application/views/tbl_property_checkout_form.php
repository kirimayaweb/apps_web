<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>TBL_PROPERTY_CHECKOUT</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Uuid <?php echo form_error('uuid') ?></td>
            <td><input type="text" class="form-control" name="uuid" id="uuid" placeholder="Uuid" value="<?php echo $uuid; ?>" />
        </td>
	    <tr><td>Nama Property <?php echo form_error('nama_property') ?></td>
            <td><textarea class="form-control" rows="3" name="nama_property" id="nama_property" placeholder="Nama Property"><?php echo $nama_property; ?></textarea>
        </td></tr>
	    <tr><td>Tipe Property <?php echo form_error('tipe_property') ?></td>
            <td><textarea class="form-control" rows="3" name="tipe_property" id="tipe_property" placeholder="Tipe Property"><?php echo $tipe_property; ?></textarea>
        </td></tr>
	    <tr><td>Status <?php echo form_error('status') ?></td>
            <td><textarea class="form-control" rows="3" name="status" id="status" placeholder="Status"><?php echo $status; ?></textarea>
        </td></tr>
	    <tr><td>Kota <?php echo form_error('kota') ?></td>
            <td><textarea class="form-control" rows="3" name="kota" id="kota" placeholder="Kota"><?php echo $kota; ?></textarea>
        </td></tr>
	    <tr><td>Nama Komplek <?php echo form_error('nama_komplek') ?></td>
            <td><textarea class="form-control" rows="3" name="nama_komplek" id="nama_komplek" placeholder="Nama Komplek"><?php echo $nama_komplek; ?></textarea>
        </td></tr>
	    <tr><td>Lokasi <?php echo form_error('lokasi') ?></td>
            <td><textarea class="form-control" rows="3" name="lokasi" id="lokasi" placeholder="Lokasi"><?php echo $lokasi; ?></textarea>
        </td></tr>
	    <tr><td>Luas Tanah <?php echo form_error('luas_tanah') ?></td>
            <td><input type="text" class="form-control" name="luas_tanah" id="luas_tanah" placeholder="Luas Tanah" value="<?php echo $luas_tanah; ?>" />
        </td>
	    <tr><td>Luas Bangunan <?php echo form_error('luas_bangunan') ?></td>
            <td><input type="text" class="form-control" name="luas_bangunan" id="luas_bangunan" placeholder="Luas Bangunan" value="<?php echo $luas_bangunan; ?>" />
        </td>
	    <tr><td>Jumlah Kamar <?php echo form_error('jumlah_kamar') ?></td>
            <td><input type="text" class="form-control" name="jumlah_kamar" id="jumlah_kamar" placeholder="Jumlah Kamar" value="<?php echo $jumlah_kamar; ?>" />
        </td>
	    <tr><td>Jumlah Kamar Mandi <?php echo form_error('jumlah_kamar_mandi') ?></td>
            <td><input type="text" class="form-control" name="jumlah_kamar_mandi" id="jumlah_kamar_mandi" placeholder="Jumlah Kamar Mandi" value="<?php echo $jumlah_kamar_mandi; ?>" />
        </td>
	    <tr><td>Harga <?php echo form_error('harga') ?></td>
            <td><input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo $harga; ?>" />
        </td>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tbl_property_checkout') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->