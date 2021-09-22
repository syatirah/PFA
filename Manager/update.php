<?php 
session_start(); 
require '../connection.php'; 
 
$idusr = $_GET["produk"]; 
$dis_usr = "SELECT * FROM produk WHERE idproduk='$idusr'"; 
$resultusr = $conn->query($dis_usr); 
echo $conn->error;
$row = $resultusr->fetch_assoc();

?> 

<html> 

<head> 
    <title>PFA</title> 
    <link rel="stylesheet" href="../style.css"> 
</head> 
 
<body> 
    <div class="container"> 
        <br><br><br> 
        <div class="center"> 
            <h2>Produk Alatan Farmasi</h2> 
        </div> 
        <center><br> Nama Programmer: admin (syatirah)</a></center> 
    </div> 
    <center>
    <nav style="background-color: hotpink"> 
        <strong style="font-size: xx-large"></strong> 
        [ 
        <a class="active" href="../index.php">Home</a> 
        | 
        <a href="index.php">Produk List </a> 
        | 
        <a href="insert.php">Insert Produk</a>
        ] 
    </nav> 
        </center>
    <br><br> 
    <center> 
        <h2>Update Produk</h2> 
    </center> 
 
    <form name="myform" action="update.php" method="post"> 
        <center> 
        
            ID Produk :
            <input type="text" name="idproduk" value="<?php echo $row["idproduk"]; ?>"> 
           <br>
            Nama Produk :
            <input type="text" name="namaproduk" value="<?php echo $row["namaproduk"]; ?>"> 
            <br>
            Harga :
            <input type="text" jumlah="harga" value="<?php echo $row["harga"]; ?>"> 
            <br>
            Kuantiti:
            <input type="text" name="kuantiti" value="<?php echo $row["kuantiti"]; ?>"> 
            <br>
            Status:
            <input type="text" name="status" value="<?php echo $row["status"]; ?>"> 
 
        </center> 
        <br> 
        <center> 
            <input type="submit" value="Update" style="background-color:PaleGreen;font-size: 15px;" /> 
            <input type="hidden" name="idproduk" value="<?php echo $row["idproduk"]; ?>" /> 
        </center> 
    </form> 
</body> 
</html>