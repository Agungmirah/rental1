<?php
$id    = $_GET['Id'];
$query = mysqli_query($koneksi,"SELECT * FROM rent_form WHERE Id='$id'");
$view  = mysqli_fetch_array($query);
?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit data pelanggan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
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
    <button class="btn btn-sm btn-info">Simpan</button>      
                </form>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
</section>