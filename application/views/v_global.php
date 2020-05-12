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
              <h3><?php echo $positif['value']; ?><sup style="font-size: 20px"></sup></h3>

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
              <h3><?php echo $sembuh['value']; ?></h3>

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
              <h3><?php echo $meninggal['value']; ?></h3>

              <p>Total Meninggal</p>
            </div>
            <div class="icon">
              <i class="fas fa-sad-tear"></i>
            </div>
          </div>
        </div>
      </div>
      <center> Sumber Data Berdasarkan : Kementerian Kesehatan & JHU.</center><br>
      <div class="row">
        <div class="col-lg-12 col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Data Berdasarkan Global</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>NO.</th>
                    <th>Negara</th>
                    <th class="">Positif</th>
                    <th>Sembuh</th>
                    <th>Meninggal</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no=1; foreach ($global as $key => $value) : ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $value['attributes']['Country_Region']; ?></td>
                      <td><?php echo $value['attributes']['Confirmed']; ?></td>
                      <td><?php echo $value['attributes']['Deaths']; ?></td>
                      <td><?php echo $value['attributes']['Recovered']; ?></td>
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
