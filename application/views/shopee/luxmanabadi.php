
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
                          <a href="" class="btn btn-success tombolExport ml-auto mr-2" data-toggle="modal" data-target="#modalUpload"><i class="fas fa-upload"></i> Import Excel</a>
                           
                          
                        <table class="table table-bordered" id="example" style="width:100%">
                          <thead>
                           <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Modal</th>
                            <th scope="col">Jual</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Stok</th>
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
                                <td><?= $row->nama_brg; ?></td>
                                <td><?= $row->jenis; ?> gr</td>
                                <td><?= $row->modal; ?></td>
                                <td><?= $row->jual;?></td>
                                <td><?= date_diff(date_create(date('Y-m-d', $row->tanggal)), date_create(date_format(date_create(), 'Y-m-d'))) ->format('%R%a hari') ;?> </td>
                                <td><?= $row->stok;?>  <a href="<?= base_url('S_luxmanabadi/lux_stok/'. $row->id);?>" class="badge badge-primary">+</a></td>
                                <td>
                                  <a href="<?= base_url('s_luxmanabadi/lux_pass/'. $row->id);?>" class="badge badge-success">edit</a>
                                  <a href="<?= base_url('s_luxmanabadi/lux_delete/'. $row->id); ?> " class="badge badge-danger">delete</a>
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
      <form action="<?= base_url('S_luxmanabadi'); ?>" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label for="kd_brg">Kode Barang</label>
        <input type="text" class="form-control" id="kd_brg" name="kd_brg" placeholder="Kode Barang">
        </div>

        <div class="form-group">
          <label for="nama_brg">Nama Barang</label>
          <input type="text" class="form-control" id="nama_brg" name="nama_brg" placeholder="Nama Barang">
        </div>
        <div class="form-group">
          <label for="bahan">Bahan</label>
          <select name="bahan_id" id="bahan_id" class="form-control">
            <option value="">Select Bahan </option>
            <?php foreach($bahan as $b) : ?>
              <option value="<?= $b['id']; ?>"><?= $b['nama']; ?></option>
          <?php endforeach; ?>
          </select>
        </div>

         <div class="form-group">
          <label for="jenis">Jenis</label>
          <div class="input-group mb-3">
            <input type="number" class="form-control" id="jenis" name="jenis" placeholder="Jenis Barang" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <span class="input-group-text" id="basic-addon2">Gram</span>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="modal">Modal</label>
          <input type="number" class="form-control" id="modal" name="modal" placeholder="Modal">
        </div>
        <div class="form-group">
          <label for="jual">Jual</label>
          <input type="number" class="form-control" id="jual" name="jual" placeholder="Jual">
        </div>

        <div class="form-group">
          <label for="stok">Stok</label>
          <input type="number" class="form-control" id="stok" name="stok" placeholder="Stock">
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


<div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="modalUploadLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content p-2">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUploadLabel">Upload</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form-upload" enctype="multipart/form-data" method="post" accept-charset="utf-8" action="<?= base_url('s_luxmanabadi/saveimport');?>">
                    <label for="userfile">Pilih file Excel(.xls or .xlsx)</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="file" value ='' name="file" required accept=".xls, .xlsx">
            <label class="custom-file-label" for="importfile">Choose file</label>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" id="btn-filter" name="import" value="Import"></input>
        </form>
      </div>
    </div>
  </div>
</div>

            