
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>TBL_PROPERTY LIST <?php echo anchor('tbl_property/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
                    <?php echo anchor(site_url('tbl_property/excel'), ' <i class="fa fa-file-excel-o"></i> Excel', 'class="btn btn-primary btn-sm"'); ?>
                    <?php //echo anchor(site_url('tbl_property/word'), '<i class="fa fa-file-word-o"></i> Word', 'class="btn btn-primary btn-sm"'); ?>
                    <?php //echo anchor(site_url('tbl_property/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
                    <!-- <th>Uuid</th> -->
                    <th>Nama Property</th>
                    <th>Detail</th>
                    <th>Tipe Property</th>
                    <th>Status</th>
                    <th>Nama Komplek</th>
                    <th>Lokasi</th>
                    <th>Luas Tanah</th>
                    <th>Luas Bangunan</th>
                    <th>Jumlah Kamar</th>
                    <th>Jumlah Kamar Mandi</th>
                    <th>Harga</th>
                    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
              $start = 0;
              foreach ($tbl_property_data as $tbl_property)
              {
                  ?>
                  <tr>
                    <td><?php echo ++$start ?></td>
                    <!-- <td><?php //echo $tbl_property->uuid ?></td> -->
                    <td><?php echo $tbl_property->nama_property ?></td>
                    <td>
                        <?php

                        // $get_row_data = $this->Tbl_property_detail_model->get_by_id_tbl_property($tbl_property->id);

                        $this->db->where('id_tbl_property',$tbl_property->id);
                        //$this->db->where('password',  $test);
                        $get_row_data       = $this->db->get('tbl_property_detail')->result();


                        foreach ($get_row_data as $get_row_data)
                        {
                          echo anchor(site_url('Tbl_property_detail/update/'.$tbl_property->id),'<i class="fa fa-pencil-square-o">'.$get_row_data->posisi.'</i>',array('title'=>'edit','class'=>'btn btn-warning btn-sm'));
                        }
                        ?>

                        <br/>
                      <?php echo anchor(site_url('Tbl_property_detail/create_detail/'.$tbl_property->uuid),'<i class="fa fa-pencil-square-o">Detail</i>',array('title'=>'edit','class'=>'btn btn-success btn-sm')); 
                     ?>
                    </td>
                    <td><?php echo $tbl_property->tipe_property ?></td>
                    <td><?php echo $tbl_property->status ?></td>
                    <td><?php echo $tbl_property->nama_komplek ?></td>
                    <td><?php echo $tbl_property->lokasi ?></td>
                    <td><?php echo $tbl_property->luas_tanah ?></td>
                    <td><?php echo $tbl_property->luas_bangunan ?></td>
                    <td><?php echo $tbl_property->jumlah_kamar ?></td>
                    <td><?php echo $tbl_property->jumlah_kamar_mandi ?></td>
                    <td><?php echo $tbl_property->harga ?></td>
                    <td style="text-align:center" width="140px">
                    <?php 
                    // echo anchor(site_url('tbl_property/read/'.$tbl_property->id),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
                    // echo '  '; 
                    echo anchor(site_url('tbl_property/update/'.$tbl_property->id),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
                    echo '  '; 
                    echo anchor(site_url('tbl_property/delete/'.$tbl_property->id),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                    ?>
                    </td>
                  </tr>
                  <?php
              }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->