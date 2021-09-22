<?php
session_start();
require '../connection.php';

$idproduk = $_POST["idproduk"];
$namaproduk = $_POST["namaproduk"];
$harga = $_POST["harga"];
$kuantiti = $_POST["kuantiti"];
$status = $_POST["status"];


//error checking

if ($idproduk == "") {
    echo "<script>alert('Please Enter ID Produk');window.location='register.php'</script>";
}
if ($namaproduk == "") {
    echo "<script>alert('Please Enter Produk ');window.location='register.php'</script>";
}

if ($harga == "") {

    echo "<script>alert('Please Enter Price');window.location='register.php'</script>";
}

if ($kuantiti == "") {
    echo "<script>alert('Please Enter Quantity ');window.location='register.php'</script>";
}

if ($status == "") {
    echo "<script>alert('Please Enter Status ');window.location='register.php'</script>";
}


$sql = "INSERT INTO produk(idproduk,namaproduk,harga,kuantiti,status)VALUES('$idproduk','$namaproduk','$harga','$kuantiti','$status')";

if ($conn->query($sql) === TRUE) { //true --->successfully
    echo "<script>alert('Register Add Successfully');window.location='list.php'</script>";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();