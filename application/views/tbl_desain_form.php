<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>TBL_DESAIN</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Uuid <?php echo form_error('uuid') ?></td>
            <td><input type="text" class="form-control" name="uuid" id="uuid" placeholder="Uuid" value="<?php echo $uuid; ?>" />
        </td>
	    <tr><td>Id Users Pemilik <?php echo form_error('id_users_pemilik') ?></td>
            <td><input type="text" class="form-control" name="id_users_pemilik" id="id_users_pemilik" placeholder="Id Users Pemilik" value="<?php echo $id_users_pemilik; ?>" />
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
	    <tr><td>Harga <?php echo form_error('harga') ?></td>
            <td><input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo $harga; ?>" />
        </td>
	    <tr><td>Deskripsi <?php echo form_error('deskripsi') ?></td>
            <td><textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
        </td></tr>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tbl_desain') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->