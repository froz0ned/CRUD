
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card bg-light my-5">

				<div class="card-header text-center">Delete Data</div>

				<div class="card-body">
					<a href="<?= base_url('t_luxuryprojects'); ?>" class="badge badge-primary">kembali</a>
					<form action="" method="post" class="needs-validation" novalidate>
						<input type="hidden" value="<?= $read['id']?>" name="id">
						<div class="form-group">
							<label for="nama_mhs">Kode Barang</label>
							<input type="password" class="form-control" name="pass" id="pass" placeholder="Masukan password" autocomplete="off">
							<div class="invalid-feedback">
								Anda salah memasukkan password.
							</div>
						</div>
						
						
						<div class="text-center">
							<button type="submit" class="btn btn-danger text-center px-3 py-2" name="edit">Delete</button>
						</div>

					</form>
				</div>
			</div>	
		</div>
	</div>
</div>
</div>