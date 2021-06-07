
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6">
			<div class="card bg-light my-5">

				<div class="card-header text-center">Edit Data</div>

				<div class="card-body">
					<a href="<?= base_url('s_pharmapreneur'); ?>" class="badge badge-primary">kembali</a>
					<form action="<?= base_url('s_pharmapreneur/pp_edit/'. $read['id']);?>" method="post" class="needs-validation" novalidate>
						<input type="hidden" value="<?= $read['id']?>" name="id">
						<div class="form-group">
							<label for="nama_mhs">Kode Barang</label>
							<input type="text" class="form-control" name="kd_brg" id="kd_brg" placeholder="Masukan kode barang" autocomplete="off" required value="<?= $read['kd_brg']?>">
							<div class="invalid-feedback">
								Anda belum memasukan nama barang.
							</div>
						</div>
						<div class="form-group">
							<label for="nama_mhs">Nama Barang</label>
							<input type="text" class="form-control" name="nama_brg" id="nama_brg" placeholder="Masukan nama barang" autocomplete="off" required value="<?= $read['nama_brg']?>">
							<div class="invalid-feedback">
								Anda belum memasukan nama Barang
							</div>
						</div>
						<div class="form-group">
							<label for="n_pert1">Modal</label>
							<input type="n_pert1" class="form-control" name="modal" id="modal" placeholder="Masukan harga modal" autocomplete="off" required value="<?= $read['modal']?>">
							<div class="invalid-feedback">
								Anda belum memasukan modal.
							</div>
						</div>
						<div class="form-group">
							<label for="n_pert2">Jual</label>
							<input type="n_pert2" class="form-control" name="jual" id="jual" placeholder="Masukan harga jual" autocomplete="off" required value="<?= $read['jual']?>">
							<div class="invalid-feedback">
								Anda belum memasukan harga jual.
							</div>
						</div>
						<div class="form-group">
							<label for="n_pert3">Stok</label>
							<input type="n_pert3" class="form-control" name="stok" id="stok" placeholder="Masukan jumlah stok barang" autocomplete="off" required value="<?= $read['stok']?>">
							<div class="invalid-feedback">
								Anda belum memasukan stok barang.
							</div>
						</div>
						
						<div class="text-center">
							<button type="submit" class="btn btn-primary text-center px-3 py-2" name="edit">Edit</button>
						</div>

					</form>
				</div>
			</div>	
		</div>
	</div>
</div>