<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"><?php echo $title; ?></h1>
        </div><!-- /.col -->
        <!-- ./col -->
        <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-lg-4 col-12">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $nasional['numbers']['infected'] ?><sup style="font-size: 20px"></sup></h3>

              <p>Total Positif</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-plus"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-12">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $nasional['numbers']['recovered']; ?></h3>

              <p>Total Sembuh</p>
            </div>
            <div class="icon">
              <i class="fas fa-smile"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-12">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $nasional['numbers']['fatal']; ?></h3>

              <p>Total Meninggal</p>
            </div>
            <div class="icon">
              <i class="fas fa-sad-tear"></i>
            </div>
          </div>
        </div>
      </div>
      <center> Build With ❤ By <a href="https://nurd0tid.netlify.app/">nurd0tid</a>.</center><br>
      <div class="row">
        <div class="col-lg-12 col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Berdasarkan Provinsi</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>Provinsi</th>
                    <th class="">Positif</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($nasional['regions'] as $data) : ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $data['name']; ?></td>
                      <td><?php echo $data['numbers']['infected']; ?></td>
                      <td><?php echo $data['numbers']['recovered']; ?></td>
                      <td><?php echo $data['numbers']['fatal']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->