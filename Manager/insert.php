<?php
session_start();
require '../connection.php';

$produk = $_POST["produk"];
$harga = $_POST["harga"];
$jumlah = $_POST["jumlah"];
$status = $_POST["status"];


//error checking

if ($produk == "") {
    echo "<script>alert('Please Enter Produk Name');window.location='register.php'</script>";
}
if ($harga == "") {
    echo "<script>alert('Please Enter harga ');window.location='register.php'</script>";
}

if ($jumlah == "") {

    echo "<script>alert('Please Enter Value');window.location='register.php'</script>";
}

if ($status == "") {
    echo "<script>alert('Please Enter status ');window.location='register.php'</script>";
}


$sql = "INSERT INTO produk(produk,harga,jumlah,status)VALUES('$produk','$harga','$jumlah','$status')";

if ($conn->query($sql) === TRUE) { //true --->successfully
    echo "<script>alert('Register Add Successfully');window.location='list.php'</script>";
} else {
    echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();