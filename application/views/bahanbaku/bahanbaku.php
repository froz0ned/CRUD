
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>
                    
                    <div class="row">
                    	<div class="col-lg">
                        <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                          <?= validation_errors(); ?>
                        </div>
                        <?php endif;?>      	

    					          <?= $this->session->flashdata('message'); ?>

                    		<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newTambahBarang">Tambah Barang</a>

                          

                    		<table class="table table-bordered" id="bahanbaku" style="width: 100%">
  								        <thead>
          								 <tr>
          								 	<th scope="col">#</th>
          								 	<th scope="col">Tanggal</th>
          								 	<th scope="col">Nama</th>
          								 	<th scope="col">Expired</th>
                            <th style="text-align: center" scope="col">Jumlah</th>
                            <th scope="col">Action</th>
          								 </tr>
          								</thead>
  								        <tbody>
          									<?php $i=1; ?>
          									<?php foreach ($results as $row) : ?>
          								 		<tr>
          								 		 <th scope="" ope="row"><?= $i; ?></th>
                    						<td><?= date('d F Y', $row->tanggal); ?></td>
                    						<td><?= $row->nama; ?></td>
        				                <td><?= $row->expired; ?></td>
        				                <td style="text-align: center;"><?= $row->jumlah;?> KG <a href="<?= base_url('bahanbaku/pk_stok/'. $row->id);?>" class="badge badge-primary">+</a></td>
            								 		<td>
            								 			<a href="<?= base_url('bahanbaku/pk_pass/'. $row->id);?>" class="badge badge-success">edit</a>
            								 			<a href="<?= base_url('bahanbaku/pk_delete/'. $row->id); ?> " class="badge badge-danger">delete</a>
            								 		</td>
          								 		</tr>
          								 		<?php $i++;?>
          								 	<?php endforeach; ?>
          								</tbody>
        							</table>
                      
      	</div>
      </div>
                        <!-- /.container-fluid -->

  </div>
</div>
                    <!-- End of Main Content -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="newTambahBarang" tabindex="-1" aria-labelledby="newTambahBarang" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newTambahBarang">Tambah Barang</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('bahanbaku'); ?>" method="post">
      <div class="modal-body">
      
        <div class="form-group">
          <label for="nama_brg">Nama Barang</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Barang" required>
        </div>

        <div class="form-group">
          <label for="modal">Expired</label>
        	<input type="date" class="form-control" id="expired" name="expired" placeholder="Expired" required>
        </div>
       <div class="form-group">
          <label for="jenis">Jumlah</label>
          <div class="input-group mb-3">
            <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Barang" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">KiloGram</span>
            </div>
          </div>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
  </form>
    </div>
  </div>
</div>

            