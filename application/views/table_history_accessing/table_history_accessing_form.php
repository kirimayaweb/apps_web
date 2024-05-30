<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> DATA TABLE_HISTORY_ACCESSING</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<tr>
						<td width='200'>Uuid Summary <?php echo form_error('uuid_summary') ?></td><td><input type="text" class="form-control" name="uuid_summary" id="uuid_summary" placeholder="Uuid Summary" value="<?php echo $uuid_summary; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Idtoko <?php echo form_error('idtoko') ?></td><td><input type="text" class="form-control" name="idtoko" id="idtoko" placeholder="Idtoko" value="<?php echo $idtoko; ?>" /></td>
					</tr>
	    
					<tr>
						<td width='200'>Namatoko <?php echo form_error('namatoko') ?></td>
						<td> <textarea class="form-control" rows="3" name="namatoko" id="namatoko" placeholder="Namatoko"><?php echo $namatoko; ?></textarea></td>
					</tr>
	
					<tr>
						<td width='200'>Jam Play <?php echo form_error('jam_play') ?></td><td><input type="text" class="form-control" name="jam_play" id="jam_play" placeholder="Jam Play" value="<?php echo $jam_play; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Menit Play <?php echo form_error('menit_play') ?></td><td><input type="text" class="form-control" name="menit_play" id="menit_play" placeholder="Menit Play" value="<?php echo $menit_play; ?>" /></td>
					</tr>
	
					<tr>
						<td width='200'>Date Input <?php echo form_error('date_input') ?></td><td><input type="text" class="form-control" name="date_input" id="date_input" placeholder="Date Input" value="<?php echo $date_input; ?>" /></td>
					</tr>
	
					<tr>
						<td></td>
						<td>
							<input type="hidden" name="id" value="<?php echo $id; ?>" /> 
							<button type="submit" class="btn btn-danger"><i class="fa fa-floppy-o"></i> <?php echo $button ?></button> 
							<a href="<?php echo site_url('table_history_accessing') ?>" class="btn btn-info"><i class="fa fa-sign-out"></i> Kembali</a>
						</td>
					</tr>
	
				</table>
			</form>
		</div>
	</section>
</div>