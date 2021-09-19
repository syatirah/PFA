<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>SabaqWay Cafe</title>
  </head>
  <body>
  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <h1 class="display-4"><span class="font-weight-bold">SabaqWay Cafe Kota</span></h1>
          <hr>
          <p class="lead font-weight-bold">Silah Pesan Menu Anda <br> 
          Enjoy Your Food</p>
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="index.php"><strong>Western</strong> Kota Setar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_menu.php">MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan.php">PESANAN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="#">LOGOUT</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

  <!-- Menu -->
    <div class="container">
      <div class="judul-pesanan mt-5
      \">
       
        <h3 class="text-center font-weight-bold">DATA PESANAN</h3>
        
      </div>
      <table class="table table-bordered" id="example">
        <thead class="thead-light">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">No. Meja</th>
            <th scope="col">Nama Pesanan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Tarikh</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>01</td>
            <td>Zinger Buger</td>
            <td>12</td>
            <td>2020-01-03</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>10</td>
            <td>Shawarma</td>
            <td>12</td>
            <td>2020-04-20</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>06</td>
            <td>Spaghetti Aglio Olio</td>
            <td>16</td>
            <td>2020-02-15</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>02</td>
            <td>Spaghetti Boglonese</td>
            <td>13</td>
            <td>2020-02-24</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
          <tr>
            <th scope="row">5</th>
            <td>07</td>
            <td>Chicken Chop</td>
            <td>12</td>
            <td>2020-05-15</td>
            <td>Belum Bayar</td>
            <td>
            <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
            <tr>
            <th scope="row">6</th>
            <td>02</td>
            <td>Chiken Grill</td>
            <td>13</td>
            <td>2020-02-24</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
          <tr>
            <th scope="row">7</th>
            <td>02</td>
            <td>Lamb Chop</td>
            <td>5</td>
            <td>2020-02-24</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
          <tr>
            <th scope="row">8</th>
            <td>02</td>
            <td>MeatBall</td>
            <td>23</td>
            <td>2020-02-24</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
          <tr>
            <th scope="row">9</th>
            <td>02</td>
            <td>Fries</td>
            <td>50</td>
            <td>2020-02-24</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>02</td>
            <td>Fish and Chip</td>
            <td>23</td>
            <td>2020-02-24</td>
            <td>Belum Bayar</td>
            <td>
              <a href="#" class="badge badge-danger">DELETE</a>
            </td>
          </tr>
        </body>
      </table>
    </div>
  <!-- Akhir Menu -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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