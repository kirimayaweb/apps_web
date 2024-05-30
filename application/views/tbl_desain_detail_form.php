<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>TBL_DESAIN_DETAIL</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Uuid <?php echo form_error('uuid') ?></td>
            <td><input type="text" class="form-control" name="uuid" id="uuid" placeholder="Uuid" value="<?php echo $uuid; ?>" />
        </td>
	    <tr><td>Id Tbl Desain <?php echo form_error('id_tbl_desain') ?></td>
            <td><input type="text" class="form-control" name="id_tbl_desain" id="id_tbl_desain" placeholder="Id Tbl Desain" value="<?php echo $id_tbl_desain; ?>" />
        </td>
	    <tr><td>Uuid Tbl Desain <?php echo form_error('uuid_tbl_desain') ?></td>
            <td><input type="text" class="form-control" name="uuid_tbl_desain" id="uuid_tbl_desain" placeholder="Uuid Tbl Desain" value="<?php echo $uuid_tbl_desain; ?>" />
        </td>
	    <tr><td>Posisi <?php echo form_error('posisi') ?></td>
            <td><textarea class="form-control" rows="3" name="posisi" id="posisi" placeholder="Posisi"><?php echo $posisi; ?></textarea>
        </td></tr>
	    <tr><td>Deskripsi <?php echo form_error('deskripsi') ?></td>
            <td><textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
        </td></tr>
	    <tr><td>Poto <?php echo form_error('poto') ?></td>
            <td><textarea class="form-control" rows="3" name="poto" id="poto" placeholder="Poto"><?php echo $poto; ?></textarea>
        </td></tr>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tbl_desain_detail') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->