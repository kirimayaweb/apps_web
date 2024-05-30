<!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                
                  <h3 class='box-title'>TEST</h3>
                      <div class='box box-primary'>
        <form action="<?php echo $action; ?>" method="post"><table class='table table-bordered'>
	    <tr><td>Uuid <?php echo form_error('uuid') ?></td>
            <td><input type="text" class="form-control" name="uuid" id="uuid" placeholder="Uuid" value="<?php echo $uuid; ?>" />
        </td>
	    <tr><td>Nama Property <?php echo form_error('nama_property') ?></td>
            <td><input type="text" class="form-control" name="nama_property" id="nama_property" placeholder="Nama Property" value="<?php echo $nama_property; ?>" />
        </td>
	    <tr><td>Nama Komplek <?php echo form_error('nama_komplek') ?></td>
            <td><input type="text" class="form-control" name="nama_komplek" id="nama_komplek" placeholder="Nama Komplek" value="<?php echo $nama_komplek; ?>" />
        </td>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <tr><td colspan='2'><button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('test') ?>" class="btn btn-default">Cancel</a></td></tr>
	
    </table></form>
    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->