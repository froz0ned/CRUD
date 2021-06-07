
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
                        <div class="btn-group mt-3">
                    		     <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newTambahBarang">Tambah Barang</a>
                        </div>
                          <div class="btn-group">

                            <button type="button" class="btn btn-primary fas fa-arrow-alt-circle-down dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              FILTER
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="<?= base_url('transaksi/index/1');?>">All Data</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?= base_url('transaksi/index/2');?>">Shopee</a>
                              <a class="dropdown-item" href="<?= base_url('transaksi/index/3');?>">Tokopedia</a>
                              <a class="dropdown-item" href="<?= base_url('transaksi/index/4');?>">Bukalapak</a>
                              <a class="dropdown-item" href="<?= base_url('transaksi/index/5');?>">Whatsapp</a>
                            </div>
                          </div>
                          
                    		<table class="table table-bordered" id="transaksi" class="display" style="width:100%">
  								        <thead>
          								 <tr>
          								 	<th scope="col">#</th>
          								 	<th scope="col">Tanggal</th>
          								 	<th scope="col">Kode Barang</th>
                            <th scope="col">Customer</th>
          								 	<th scope="col">Nama Barang</th>
                            <th scope="col">Platform</th>
          								 	<th scope="col">Jumlah</th>
                            <th scope="col" class="sum">Pendapatan</th>
                            <th scope="col" class="sum">Untung</th>
                            <th scope="col">Action</th>
          								 </tr>
          								</thead>
  								        <tbody>
          									<?php $i=1; ?>
          									<?php foreach ($results as $row) : ?>
          								 		<tr>
          								 		 <th scope="" ope="row"><?= $i; ?></th>
                    						<td><?= date('d F Y', $row->tanggal); ?></td>
                    						<td><?= $row->kd_brg; ?></td>
        				                <td><?= $row->customer; ?></td>
                                <td><?= $row->nama_brg; ?></td>
        				                <td><?= $row->platform; ?></td>
        				                <td style="text-align:center"><?= $row->jumlah;?></td>
                                <td style="text-align:center">Rp <?= number_format($row->pendapatan,0,',','.');?></td>
        				                <td style="text-align:center">Rp <?= number_format($row->untung,0,',','.');?></td>
            								 		<td>
            								 			<a href="<?= base_url('transaksi/transaksi_delete/'. $row->id); ?> " class="badge badge-danger">delete</a>
            								 		</td>
          								 		</tr>
          								 		<?php $i++;?>
          								 	<?php endforeach; ?>
          								</tbody>
                          <tfoot>
                            <tr>
                              <th colspan="1"><b>Total</b></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th></th>
                              <th style="text-align:center">Pendapatan</th>
                              <th style="text-align:center">Untung</th>
                              <th></th>
                            </tr>
                          </tfoot>
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
      <form action="<?= base_url('transaksi/index/1'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label for="kd_brg">Kode Barang</label>
    		<input type="text"  class="form-control" id="kd_brg" name="kd_brg" placeholder="Kode Barang">
  		  </div>

        <div class="form-group">
          <label for="customer">Customer</label>
        <input type="text"  class="form-control" id="customer" name="customer" placeholder="Nama Customer">
        </div>
       

        <div class="form-group">
          <label for="jumlah">Jumlah</label>
        	<input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah">
        </div>

        <div class="form-group">
          <label for="platform">Platform</label>
          <select name="platform" id="platform" class="form-control">
            <option value="Shopee">Shopee</option>
            <option value="Tokopedia">Tokopedia</option>
            <option value="Bukalapak">Bukalapak</option>
            <option value="WhatsApp">WhatsApp</option>
          </select>
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

            

