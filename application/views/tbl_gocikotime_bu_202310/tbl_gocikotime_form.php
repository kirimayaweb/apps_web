<div class="content-wrapper">
	<section class="content">
		<div class="box box-warning box-solid">
			<div class="box-header with-border">
				<h3 class="box-title"><?php echo strtoupper($button) ?> SETTING WAKTU RUNNING MP3 GOCIKO</h3>
			</div>
			<form action="<?php echo $action; ?>" method="post">
			
				<table class='table table-bordered'>
	
					<!-- <tr>
						<td width='200'>Idtoko <?php //echo form_error('idtoko') ?></td><td><input type="text" class="form-control" name="idtoko" id="idtoko" placeholder="Idtoko" value="<?php //echo $idtoko; ?>" />Isi nomor urut toko</td>
						
					</tr>
	    
					<tr>
						<td width='200'>Namatoko <?php //echo form_error('namatoko') ?></td>
						<td> <textarea class="form-control" rows="3" name="namatoko" id="namatoko" placeholder="Namatoko"><?php //echo $namatoko; ?></textarea></td>
					</tr> -->
	
					<?php 
					if($button == "Update"){
					?>
						<tr>
							<td width='200'>Nama toko <?php echo form_error('namatoko') ?></td>
							<td> 

								<div class="col-sm-5">
									<?php echo $namatoko; ?>
									<input type="hidden" class="form-control" rows="3" name="namatoko" id="namatoko" placeholder="Namatoko" value="<?php echo $namatoko; ?>"></input>
									<input type="hidden" class="form-control" rows="3" name="idtoko" id="idtoko" placeholder="idtoko" value="<?php echo $idtoko; ?>"></input>
									<input type="hidden" class="form-control" rows="3" name="id" id="id" placeholder="id" value="<?php echo $id; ?>"></input>
								
								<!-- <select name="idtoko" id="idtoko" class="form-control select2" style="width: 100%; height: 40px;">
										<option value="">Pilih Toko</option>
										<?php
										// $sql = "select * from tbl_toko group by namatoko order by namatoko asc";
										// foreach ($this->db->query($sql)->result() as $m) {
										// 	echo "<option value='$m->idtoko' ";
										// 	echo ">  " . strtoupper($m->namatoko) . "</option>";
										// }
										?>
									</select>

									<?php //echo "<br/>";echo form_error('idtoko') ?> -->

								</div>

							</td>
						</tr>


					<?php
					}else{
					?>


						<tr>
							<td width='200'>Nama toko </td>
							<td> 

								<div class="col-sm-5">

									<select name="idtoko" id="idtoko" class="form-control select2" style="width: 100%; height: 40px;">
										<option value="">Pilih Toko</option>
										<?php
										$sql = "select * from tbl_toko group by namatoko order by namatoko asc";
										foreach ($this->db->query($sql)->result() as $m) {
											echo "<option value='$m->idtoko' ";
											echo ">  " . strtoupper($m->namatoko) . "</option>";
										}
										?>
									</select>

									<?php echo "<br/>";echo form_error('idtoko') ?>

								</div>

							</td>
						</tr>
		

					<?php
					}
					?>



<!-- 
					<tr>
						<td width='200'>Jam <?php //echo form_error('jam') ?></td><td><input type="text" class="form-control" name="jam" id="jam" placeholder="Jam" value="<?php //echo $jam; ?>" /></td>
					</tr> -->

					<tr>
						<td width='200'>Jam <?php echo form_error('jam') ?></td>
						<td >



						<?php 
						if($button == "Update"){
						?>
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

						<?php
						}else{
						?>
						
						
						
					

								<div class="col-sm-2">

									<select name="jam" id="jam" class="form-control select2" style="width: 100%; height: 40px;">
										<option value="">Pilih Jam</option>
									
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
						<?php
						}
						?>

						</td>
					</tr>
	
					<tr>
						<td width='200'>Menit </td>
						<td>
							<!-- <input type="text" class="form-control" name="menit" id="menit" placeholder="Menit" value="<?php //echo $menit; ?>" /> -->
						


						<?php 
						if($button == "Update"){
						?>



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
					

						<?php
						}else{
						?>
						
							<div class="col-sm-2">
								<select name="menit" id="menit" class="form-control select2" style="width: 100%; height: 40px;">
										<option value="">Pilih Menit</option>
									
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
							
							<?php
						}
						?>


						</td>
					</tr>
	
					<!-- <tr>
						<td width='200'>Detik <?php //echo form_error('detik') ?></td><td><input type="text" class="form-control" name="detik" id="detik" placeholder="Detik" value="<?php //echo $detik; ?>" /></td>
					</tr> -->
	
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