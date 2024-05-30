<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA TOKO</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	    
					<tr>
						<td width='200'>Namatoko <?php echo form_error('namatoko') ?></td>
						<td>
							<div class="col-sm-4"> 
								<textarea class="form-control" rows="3" name="namatoko" id="namatoko" placeholder="Namatoko"><?php echo $namatoko; ?></textarea>
							</div>
						</td>
					</tr>
	
					<tr>
						<td width='200'>lattitude <?php echo form_error('lattitude') ?></td>
						<td> 
							<div class="col-sm-3">
								<textarea class="form-control" rows="3" name="lattitude" id="lattitude" placeholder="lattitude"><?php echo $lattitude; ?></textarea>
							</div>
						</td>
					</tr>
	
					<tr>
						<td width='200'>longitude <?php echo form_error('longitude') ?></td>
						<td> 
							<div class="col-sm-3">	
								<textarea class="form-control" rows="3" name="longitude" id="longitude" placeholder="longitude"><?php echo $longitude; ?></textarea>
							</div>
						</td>
					</tr>
	
					<tr>
						<td width='200'>kalurahan <?php echo form_error('kalurahan') ?></td>
						<td> 
							<div class="col-sm-6">
								<textarea class="form-control" rows="3" name="kalurahan" id="kalurahan" placeholder="kalurahan"><?php echo $kalurahan; ?></textarea>
							</div>
						</td>
					</tr>
	
					<tr>
						<td width='200'>kecamatan <?php echo form_error('kecamatan') ?></td>
						<td> 
							<div class="col-sm-6">	
								<textarea class="form-control" rows="3" name="kecamatan" id="kecamatan" placeholder="kecamatan"><?php echo $kecamatan; ?></textarea>
							</div>
						</td>
					</tr>
	
					<tr>
						<td width='200'>kabupaten <?php echo form_error('kabupaten') ?></td>
						<td> 
							<div class="col-sm-6">
								<textarea class="form-control" rows="3" name="kabupaten" id="kabupaten" placeholder="kabupaten"><?php echo $kabupaten; ?></textarea>
							</div>	
						</td>
					</tr>


					<tr>
						<td></td>
						<td>
							<input type="hidden" name="idtoko" value="<?php echo $idtoko; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('tbl_toko') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>