
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card bg-light my-5">

				<div class="card-header text-center">Tambah Stok</div>

				<div class="card-body">
					<a href="<?= base_url('b_luxmanabadi'); ?>" class="badge badge-primary">kembali</a>
					<form action="" method="post" class="needs-validation" novalidate>
						<input type="hidden" value="<?= $read['id']?>" name="id">
						<input type="hidden" value="<?= $read['jenis']?>" name="jenis">
						<input type="hidden" value="<?= $read['bahan_id']?>" name="bahan_id">
						<div class="form-group">
							<label for="n_pert3">Stok</label>
							<input type="number" class="form-control" name="stok" id="stok" placeholder="Masukan jumlah stok barang" autocomplete="off" required >
							<div class="invalid-feedback">
								Anda belum memasukan stok barang.
							</div>
						</div>
						
						<div class="text-center">
							<button type="submit" class="btn btn-success text-center px-3 py-2" name="edit">Tambah</button>
						</div>

					</form>
				</div>
			</div>	
		</div>
	</div>
</div>
</div>