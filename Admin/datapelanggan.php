
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
                                    <td>X</td>
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
            <div class="modal-body">
              <p>One fine body&hellip;</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  
 