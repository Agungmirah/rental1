
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Pelanggan Rental</h3>
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
                    <th>Tujuan</th>
                    <th>jumlah</th>
                    <th>motor</th>
                    <th>mulai</th>
                    <th>jam mulai</th>
                    <th>selesai</th>
                    <th>jam selesai</th>
                    <th>action</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php
                     $no = 0;
                     $query = mysqli_query($koneksi, "SELECT * FROM rent_form");
                     while($pln = mysqli_fetch_array($query)){
                      $no++
                     ?>

                  <tr>
                    <td width='2%'><?php echo $no;?></td>
                    <td><?php echo $pln['name'];?></td>
                    <td><?php echo $pln['phone'];?></td>
                    <td><?php echo $pln['address'];?></td>
                    <td><?php echo $pln['location'];?></td>
                    <td><?php echo $pln['rent'];?></td>
                    <td><?php echo $pln['motorcycle'];?></td>
                    <td><?php echo $pln['start'];?></td>
                    <td><?php echo $pln['time_start'];?></td>
                    <td><?php echo $pln['end'];?></td>
                    <td><?php echo $pln['time_end'];?></td>
       <td><a href="delete/delete_data.php?Id=<?php echo $pln['Id'];?>" class="btn btn-sm btn-danger">Delete</a>
       <a href="index.php?page=edit-data&& Id=<?php echo $pln['Id'];?>" class="btn btn-sm btn-success">Edit</a></td>

                  </tr>
                 <?php } ?>

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Tujuan</th>
                    <th>jumlah</th>
                    <th>motor</th>
                    <th>mulai</th>
                    <th>jam mulai</th>
                    <th>selesai</th>
                    <th>jam selesai</th>
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
              <h4 class="modal-title">Tambah data rental</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="get" action="tambah_data.php">
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
    <div class="form-row">
    <div class="col">
    <label>Where to</label>
      <input type="text" class="form-control" placeholder="where to" name="location" required>
    </div>
                    
    <br>
    
    <div class="col">
      <label>How many rent</label>
      <input type="number" class="form-control" placeholder="how many" name="rent" required>
    </div>
    <br>
    <div class="form-group col-md-4">
      <label >Motorcycle</label>
      <select  class="form-control" name="motorcycle" required>
        <option selected>kawasaki ninja</option>
        <option>klx</option>
        <option>vario125</option>
        <option>vario150</option>
        <option>mio modif</option>
        <option>nmax</option>
        <option>pcx</option>
        <option>aerox</option>
        <option>vespa antik</option>
        <option>vespa matic</option>
        <option>scoopy</option>
        <option>supra</option>
      </select>
    </div>
                     </div>
    <div class="form-row">
    <div class="col">
    <label>start</label>
      <input type="date" class="form-control" placeholder="start" name="start" required>
    </div>
    <br>
    <div class="col">
    <label>time start</label>
      <input type="time" class="form-control" placeholder="time start" name="timestart" required>
    </div>
    <br>
    <div class="col">
    <label>end</label>
      <input type="date" class="form-control" placeholder="end" name="end" required>
    </div>
    <br>
    <div class="col">
    <label>time end</label>
      <input type="time" class="form-control" placeholder="time end" name="timeend" required>
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
  