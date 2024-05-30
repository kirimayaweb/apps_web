<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>TBL_DESAIN_CHECKOUT</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Uuid Checkout <?php echo form_error('uuid_checkout') ?></td>
            <td><input type="text" class="form-control" name="uuid_checkout" id="uuid_checkout" placeholder="Uuid Checkout" value="<?php echo $uuid_checkout; ?>" />
        </td>
	    <tr><td>Group Desain <?php echo form_error('group_desain') ?></td>
            <td><textarea class="form-control" rows="3" name="group_desain" id="group_desain" placeholder="Group Desain"><?php echo $group_desain; ?></textarea>
        </td></tr>
	    <tr><td>Nama Desain <?php echo form_error('nama_desain') ?></td>
            <td><textarea class="form-control" rows="3" name="nama_desain" id="nama_desain" placeholder="Nama Desain"><?php echo $nama_desain; ?></textarea>
        </td></tr>
	    <tr><td>Model <?php echo form_error('model') ?></td>
            <td><textarea class="form-control" rows="3" name="model" id="model" placeholder="Model"><?php echo $model; ?></textarea>
        </td></tr>
	    <tr><td>Paket <?php echo form_error('paket') ?></td>
            <td><textarea class="form-control" rows="3" name="paket" id="paket" placeholder="Paket"><?php echo $paket; ?></textarea>
        </td></tr>
	    <tr><td>Jumlah Lantai <?php echo form_error('jumlah_lantai') ?></td>
            <td><input type="text" class="form-control" name="jumlah_lantai" id="jumlah_lantai" placeholder="Jumlah Lantai" value="<?php echo $jumlah_lantai; ?>" />
        </td>
	    <tr><td>Uuid Property <?php echo form_error('uuid_property') ?></td>
            <td><input type="text" class="form-control" name="uuid_property" id="uuid_property" placeholder="Uuid Property" value="<?php echo $uuid_property; ?>" />
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
	    <tr><td>Nama Pemesan <?php echo form_error('nama_pemesan') ?></td>
            <td><textarea class="form-control" rows="3" name="nama_pemesan" id="nama_pemesan" placeholder="Nama Pemesan"><?php echo $nama_pemesan; ?></textarea>
        </td></tr>
	    <tr><td>Nmr Wa <?php echo form_error('nmr_wa') ?></td>
            <td><input type="text" class="form-control" name="nmr_wa" id="nmr_wa" placeholder="Nmr Wa" value="<?php echo $nmr_wa; ?>" />
        </td>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tbl_desain_checkout') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->