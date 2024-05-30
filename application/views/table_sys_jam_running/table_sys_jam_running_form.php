<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA TABLE_SYS_JAM_RUNNING</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Jam <?php echo form_error('jam') ?></td>
						<td>
						    <!--<input type="text" class="form-control" name="jam" id="jam" placeholder="Jam" value="<?php //echo $jam; ?>" />-->
						
						<div class="col-sm-2">
						        <select name="jam" id="jam" class="form-control select2" style="width: 100%; height: 40px;">
									<option value="<?php echo $jam; ?>"><?php echo $jam; ?></option>

									<?php  
									$x = 0;
									
									while($x <= 24) {
										echo "<option value='$x' ";
										echo "> " . strtoupper($x) . "</option>";
									$x++;
									} 
									?>  

								</select>
								<?php echo "<br/>";echo form_error('jam') ?>
						
							</div>
						</td>
					</tr>
	
					<tr>
						<td width='200'>Menit <?php echo form_error('menit') ?></td>
						<td>
						    <!--<input type="text" class="form-control" name="menit" id="menit" placeholder="Menit" value="<?php //echo $menit; ?>" />-->
						    
						    <div class="col-sm-2">
								<select name="menit" id="menit" class="form-control select2" style="width: 100%; height: 40px;">
										<option value="<?php echo $menit ?>"><?php echo $menit ?></option>
									
										<?php  
										$x = 0;
										
										while($x <= 60) {
											echo "<option value='$x' ";
											echo "> " . strtoupper($x) . "</option>";
										$x++;
										} 
										?>  

								</select>
								<?php echo "<br/>";echo form_error('menit') ?>
							</div>
						
						</td>
					</tr>
	
					<!--<tr>-->
					<!--	<td width='200'>Detik <?php //echo form_error('detik') ?></td><td><input type="text" class="form-control" name="detik" id="detik" placeholder="Detik" value="<?php echo $detik; ?>" /></td>-->
					<!--</tr>-->
	
					<!--<tr>-->
					<!--	<td width='200'>Status <?php //echo form_error('status') ?></td><td><input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" /></td>-->
					<!--</tr>-->
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id" value="<?php echo $id; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('table_sys_jam_running') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>