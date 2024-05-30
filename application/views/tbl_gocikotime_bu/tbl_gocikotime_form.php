<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA TBL_GOCIKOTIME</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Idtoko <?php echo form_error('idtoko') ?></td><td><input type="text" class="form-control" name="idtoko" id="idtoko" placeholder="Idtoko" value="<?php echo $idtoko; ?>" /></td>
					</tr>
	    
					<tr>
						<td width='200'>Namatoko <?php echo form_error('namatoko') ?></td>
						<td> <textarea class="form-control" rows="3" name="namatoko" id="namatoko" placeholder="Namatoko"><?php echo $namatoko; ?></textarea></td>
					</tr>
	
					<tr>
						<td width='200'>Waktugociko <?php echo form_error('waktugociko') ?></td>
						<td>
							<!-- <input type="text" class="form-control" name="waktugociko" id="waktugociko" placeholder="Waktugociko" value="<?php //echo $waktugociko; ?>" /> -->
							<input type="date" class="form-control datetimepicker-input" name="waktugociko" id="waktugociko" placeholder="Tanggal" value="<?php //echo $tanggal; ?>" />
						</td>
					</tr>
	
					<tr>
						<td width='200'>Tahun <?php echo form_error('tahun') ?></td><td><input type="text" class="form-control" name="tahun" id="tahun" placeholder="Tahun" value="<?php echo $tahun; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Bulan <?php echo form_error('bulan') ?></td><td><input type="text" class="form-control" name="bulan" id="bulan" placeholder="Bulan" value="<?php echo $bulan; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Hari <?php echo form_error('hari') ?></td><td><input type="text" class="form-control" name="hari" id="hari" placeholder="Hari" value="<?php echo $hari; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Jam <?php echo form_error('jam') ?></td><td><input type="text" class="form-control" name="jam" id="jam" placeholder="Jam" value="<?php echo $jam; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Menit <?php echo form_error('menit') ?></td><td><input type="text" class="form-control" name="menit" id="menit" placeholder="Menit" value="<?php echo $menit; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Detik <?php echo form_error('detik') ?></td><td><input type="text" class="form-control" name="detik" id="detik" placeholder="Detik" value="<?php echo $detik; ?>" /></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id" value="<?php echo $id; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('tbl_gocikotime') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>