<?php
$id    = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM blacklist WHERE id='$id'");
$view  = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit data blacklist</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='get' action='update/update.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="col">
    <label>name</label>
      <input type="text" class="form-control" placeholder="name" name="name" value="<?php echo $view['nama'];?>">
      <input type="text" class="form-control" placeholder="id" name="id" value="<?php echo $view['id'];?>" hidden>
    </div>
    <br>
    <div class="col">
    <label>Phone</label>
      <input type="text" class="form-control" placeholder="phone" name="phone" value="<?php echo $view['phone'];?>">
    </div>
    <br>
    <div class="col">
    <label>Address</label>
      <input type="text" class="form-control" placeholder="address" name="address" value="<?php echo $view['address'];?>">
    </div>
    <br>
    <div class="col">
    <label>Alasan</label>
      <input type="text" class="form-control" placeholder="alasan" name="location" value="<?php echo $view['alasan'];?>">
    </div>
    <br>
    <div class="form-row">
    <div class="col">
    <label>ktp</label>
      <input type="file" class="form-control" placeholder="ktp" name="ktp" required>
    </div>
    <div class="col">
    <br>
    <button type="submit"class="btn btn-sm btn-info">Simpan</button>      
                </form>
              </div>
</div>
              <!-- /.card-body -->
            </div>
    </div>
</section>