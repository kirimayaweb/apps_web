<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>TBL_PROPERTY_DETAIL</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Id Tbl Property <?php echo form_error('id_tbl_property') ?></td>
            <td>
              <!-- <input type="text" class="form-control" name="id_tbl_property" id="id_tbl_property" placeholder="Id Tbl Property" value="<?php //echo $nama_property; ?>" /> -->
              <?php echo $nama_property . " [ " . $kota . "] " ; ?>
        </td>
	    <tr><td>Posisi <?php echo form_error('posisi') ?></td>
            <td><textarea class="form-control" rows="3" name="posisi" id="posisi" placeholder="Posisi"><?php echo $posisi; ?></textarea>
        </td></tr>
	    <tr><td>Deskripsi <?php echo form_error('deskripsi') ?></td>
            <td><textarea class="form-control" rows="3" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?php echo $deskripsi; ?></textarea>
        </td></tr>
	    <tr><td>Poto <?php echo form_error('poto') ?></td>
        <td>
          <textarea class="form-control" rows="3" name="poto" id="poto" placeholder="Poto"><?php echo $poto; ?></textarea>
          <?php
            echo anchor(site_url('Tbl_property_detail/update_upload/'.$id),'<i class="fa fa-pencil-square-o">Update Poto</i>',array('title'=>'edit','class'=>'btn btn-warning btn-sm'));
          ?>
        </td>
      </tr>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tbl_property_detail') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->