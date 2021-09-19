<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>Produk Alatan Farmasi</title>
  </head>
  <body>
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">Produk Alatan Farmasi</span></h1>
          <hr>
          <p class="lead font-weight-bold">Silah Pesan Menu Anda <br> 
          Choose Your</p>
        </div>
      </div>

      <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="index.php"><strong>Farmasi</strong><br>Optimum</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan.php">PRODUK</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="#">LOGOUT</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
 
    <div class="container">
      <div class="judul-pesanan mt-5
      \">
       
        <h3 class="text-center font-weight-bold">SENARAI ALATAN FARMASI</h3>
        
      </div>
      <table class="table table-bordered" id="example">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Harga</th>
            <th scope="col">Nama Alatan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tarikh</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>RM350</td>
            <td>ARM BLOOD PRESSURE</td>
            <td>25pcs</td>
            <td>2020-01-03</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>RM210</td>
            <td>BLOOD PRESSURE</td>
            <td>120pcs</td>
            <td>2020-04-20</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>RM90</td>
            <td>GLUCOSE MONITOR SYSTEM</td>
            <td>160pcs</td>
            <td>2020-02-15</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>RM180</td>
            <td>MINI FISIOTERAPI</td>
            <td>130pcs</td>
            <td>2020-02-24</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>RM50</td>
            <td>VITAMIN C</td>
            <td>500pcs</td>
            <td>2020-05-15</td>
            <td>Belum Bayar</td>
            <td>
            <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
            <tr>
            <th scope="row">6</th>
            <td>RM40</td>
            <td>OXIMETER</td>
            <td>150pcs</td>
            <td>2020-02-24</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>RM500</td>
            <td>TERAPI SARAF</td>
            <td>50pcs</td>
            <td>2020-02-24</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
  </body>
</html>