
<div class="content-wrapper">
	
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title">DETAIL DATA TABLE_SYS_JAM_RUNNING</h3>
			</div>
		
		<table class='table table-bordered'>        

	
			<tr>
				<td>Jam</td>
				<td><?php echo $jam; ?></td>
			</tr>
	
			<tr>
				<td>Menit</td>
				<td><?php echo $menit; ?></td>
			</tr>
	
			<tr>
				<td>Detik</td>
				<td><?php echo $detik; ?></td>
			</tr>
	
			<tr>
				<td>Status</td>
				<td><?php echo $status; ?></td>
			</tr>
	
			<tr>
				<td></td>
				<td><a href="<?php echo site_url('table_sys_jam_running') ?>" class="btn btn-default">Kembali</a></td>
			</tr>
	
		</table>
		</div>
	</section>
</div>