
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card bg-light my-5">

				<div class="card-header text-center">Edit Data</div>

				<div class="card-body">
					<a href="<?= base_url('bahanbaku'); ?>" class="badge badge-primary">kembali</a>
					<form action="<?= base_url('bahanbaku/pk_edit/'. $read['id']);?>" method="post" class="needs-validation" novalidate>
						<input type="hidden" value="<?= $read['id']?>" name="id">
						
 						<div class="form-group">
					          <label for="nama_brg">Nama Barang</label>
					          <input type="text" class="form-control"  value = "<?= $read['nama'];?>"id="nama" name="nama" placeholder="Nama Barang" required>
					        </div>

					        <div class="form-group">
					          <label for="modal">Expired</label>
					        	<input type="date" class="form-control" value="<?= $read['expired']; ?>" id="expired" name="expired" placeholder="Expired" required>
					        </div>
					        <div class="form-group">
					          <label for="jual">Jumlah</label>
					        	<input type="number" step="any" class="form-control" value="<?= $read['jumlah'];?>" id="jumlah" name="jumlah" placeholder="jumlah" required>
					        </div>
						
						<div class="text-center">
							<button type="submit" class="btn btn-primary text-center px-3 py-2"  name="edit">Edit</button>
						</div>

					</form>
				</div>
			</div>	
		</div>
	</div>
</div>