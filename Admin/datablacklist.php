
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pelanggan blacklist</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
                </button>
                <br><br>
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>alasan</th>
                    <th>ktp</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php
                     $no = 0;
                     $query = mysqli_query($koneksi, "SELECT * FROM blacklist");
                     while($pln = mysqli_fetch_array($query)){
                      $no++
                     ?>

                  <tr>
                    <td width='2%'><?php echo $no;?></td>
                    <td><?php echo $pln['nama'];?></td>
                    <td><?php echo $pln['phone'];?></td>
                    <td><?php echo $pln['address'];?></td>
                    <td><?php echo $pln['alasan'];?></td>
                    <td><?php echo $pln['ktp'];?></td>
       <td><a href="delete/delete_datab.php?id=<?php echo $pln['id'];?>" class="btn btn-sm btn-danger">Delete</a>
       <a href="index.php?page=edit-datab&& id=<?php echo $pln['id'];?>" class="btn btn-sm btn-success">Edit</a></td>

                  </tr>
                 <?php } ?>

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Ktp</th>
                    <th>alasan</th>
                    <th>action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah data blacklist</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="tambah_datab.php">
            <div class="modal-body">
            <div class="form-row">
    <div class="col">
    <label>Name</label>
      <input type="text" class="form-control" placeholder="name" name="name" required>
    </div>
    <br>
    <div class="col">
    <label>Phone</label>
      <input type="text" class="form-control" placeholder="phone" name="phone" required>
    </div>
    <br>
    <div class="col">
    <label>Address</label>
      <input type="text" class="form-control" placeholder="address" name="address" required>
    </div>
    </div>
    <br>
    <div class="col">
    <label>Alasan</label>
      <input type="text" class="form-control" placeholder="alasan" name="alasan" required>
    </div>
    <br>
    <div class="form-row">
    <div class="col">
    <label>ktp</label>
      <input type="file" class="form-control" placeholder="ktp" name="gambar" required>
    </div>
                    
                     </div>
  </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </div>
                     </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  