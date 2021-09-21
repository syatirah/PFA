<?php  
session_start();  
require '../connection.php';  
  
$harga=$_POST['harga'];  
$jumlah=$_POST['jumlah'];  
$status=$_POST['status'];  
$produk=$_POST['produk']; //drp input hndden  
  
$sql = "UPDATE produk SET produk='$produk',harga='$harga',jumlah='$jumlah',status='$status' where produk='$produk'";  
  
if($conn->query($sql)=== TRUE){   //true --->successfully  
  echo "<script>alert('Update Successfully');window.location='list.php'</script>";  
}  
else{  
 echo "Error:". $sql."<br>".$conn->error;  
}  
$conn->close(); 
?>