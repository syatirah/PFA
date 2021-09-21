<?php 
session_start(); 
require '../connection.php'; 
 
$idusr = $_GET["produk"]; 
$dis_usr = "SELECT * FROM produk WHERE produk='$idusr'"; 
$resultusr = $conn->query($dis_usr); 
 
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
 
    <nav style="background-color: hotpink"> 
        <strong style="font-size: xx-large"></strong> 
        [ 
        <a class="active" href="../index.php">Home</a> 
        | 
        <a href="list.php">Produk List </a> 
        | 
        <a href="insert.php">Insert Produk</a>
        ] 
    </nav> 
 
    <br><br> 
    <center> 
        <h2>Update Produk</h2> 
    </center> 
 
    <form name="myform" action="update.php" method="post"> 
        <center> 
            <br> 
            <b>Produk :</b> 
            <input type="text" name="produk" value="<?php echo $row["produk"]; ?>"> 
            <br> 
            <br> 
            <b>Harga :</b> 
            <input type="text" name="harga" value="<?php echo $row["harga"]; ?>"> 
            <br> 
            <br> 
 
            <b>Jumlah :</b> 
            <input type="text" jumlah="jumlah" value="<?php echo $row["jumlah"]; ?>"> 
            <br> 
            <br> 
            <b>Status:</b> 
            <input type="text" name="status" value="<?php echo $row["status"]; ?>"> 
 
 
        </center> 
        <br> 
        <center> 
            <input type="submit" value="Update" style="background-color:PaleGreen;font-size: 15px;" /> 
            <input type="hidden" name="produk" value="<?php echo $row["produk"]; ?>" /> 
        </center> 
    </form> 
</body> 
 
</html>