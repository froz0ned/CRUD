
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title;?></h1>
                    
                   <!-- shopee -->
                   <div class="card ">
					  <div class="card-header text-center text-white bg-warning">
					    <b>SHOPEE</b>
					  </div>
					  <div class="card-body">
					    <?php
							foreach ($planetkimia as $row): 
							?>
							<div class="alert alert-danger" role="alert">							
							Stok <a href="<?= base_url('shopee/pk_edit/'. $row['id']);?>" class="alert-link"><?= $row['nama_brg']; ?></a> pada PLANETKIMIA kurang dari 30 Stok saat ini :  <?= $row['stok'];?> pcs.  
							</div>
							<?php endforeach; ?>

						  <?php
							    foreach ($pharmapreneur as $row): 
							?>
							<div class="alert alert-danger" role="alert">	
							Stok <a href="<?= base_url('s_pharmapreneur/pp_edit/'. $row['id']);?>" class="alert-link"><?= $row['nama_brg']; ?></a> pada PHARMAPRENEUR STORE kurang dari 30 Stok saat ini :  <?= $row['stok'];?> pcs.
							</div>
							<?php endforeach; ?>

							<?php
							    foreach ($luxmanabadi as $row): 
							?>
							<div class="alert alert-danger" role="alert">	
							Stok <a href="<?= base_url('s_luxmanabadi/lux_edit/'. $row['id']);?>" class="alert-link"><?= $row['nama_brg']; ?></a> pada LUXMANABADI SHOPEE kurang dari 30 Stok saat ini :  <?= $row['stok'];?> pcs.
							</div>
							<?php endforeach; ?>
							
					  </div>
					</div>
					<br>

						<!-- Tokopedia -->
					  <div class="card">
						  <div class="card-header text-center text-white bg-success">
						    <b>Tokopedia</b>
						  </div>
						  <div class="card-body">
						    <?php
							foreach ($t_planetkimia as $row): 
							?>
							<div class="alert alert-danger" role="alert">							
							Stok <a href="<?= base_url('t_planetkimia/tpk_edit/'. $row['id']);?>" class="alert-link"><?= $row['nama_brg']; ?></a> pada PLANETKIMIA anda kurang dari 30 Stok saat ini :  <?= $row['stok'];?> pcs. Klik pada barang untuk restock! 
							</div>
							<?php endforeach; ?>

						  <?php
							    foreach ($luxuryprojects as $row): 
							?>
							<div class="alert alert-danger" role="alert">	
							Stok <a href="<?= base_url('t_luxuryprojects/luxury_edit/'. $row['id']);?>" class="alert-link"><?= $row['nama_brg']; ?></a> pada LUXURY PROJECT INDO anda kurang dari 30 Stok saat ini :  <?= $row['stok'];?> pcs. Klik pada barang untuk restock! 
							</div>
							<?php endforeach; ?>
						  </div>
						</div>
						<br>

						<!-- Bukalapak -->
						<div class="card">
						  <div class="card-header text-center text-white bg-danger">
						    BukaLapak
						  </div>
						  <div class="card-body">
						    <?php
								foreach ($b_luxmanabadi as $row): 
							?>
							<div class="alert alert-danger" role="alert">							
								Stok <a href="<?= base_url('b_luxmanabadi/bl_edit/'. $row['id']);?>" class="alert-link"><?= $row['nama_brg']; ?></a> pada LUXMAN ABADI anda kurang dari 30 Stok saat ini :  <?= $row['stok'];?> pcs. Klik pada barang untuk restock! 
							</div>
							<?php endforeach; ?>

						  <?php
							    foreach ($b_planetkimia as $row): 
							?>
							<div class="alert alert-danger" role="alert">	
							Stok <a href="<?= base_url('b_planetkimia/bpk_edit/'. $row['id']);?>" class="alert-link"><?= $row['nama_brg']; ?></a> pada PLANETKIMIA anda kurang dari 30 Stok saat ini :  <?= $row['stok'];?> pcs. Klik pada barang untuk restock! 
							</div>
							<?php endforeach; ?>
						  </div>
						</div>
						<br>

						<div class="card">
						  <div class="card-header text-center text-white bg-info">
						    <b>Whatsapp</b>
						  </div>
						  <div class="card-body">
						    <?php
							    foreach ($whatsapp as $row): 
							?>
							<div class="alert alert-danger" role="alert">	
							Stok <a href="<?= base_url('pt_palapa/pt_edit/'. $row['id']);?>" class="alert-link"><?= $row['nama_brg']; ?></a> pada PT PALAPA MUDA PERKASA anda kurang dari 30 Stok saat ini :  <?= $row['stok'];?> pcs. Klik pada barang untuk restock! 
							</div>
							<?php endforeach; ?>
						  </div>
						</div>
					




                    </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            