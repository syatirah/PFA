<?php  
session_start();  
require '../connection.php';  
  
$idproduk=$_POST['idproduk'];  
$namaproduk=$_POST['namaproduk'];  
$harga=$_POST['harga'];  
$kuantiti=$_POST['kuantiti']; //drp input hndden  
$status=$_POST['status'];

$sql = "UPDATE produk SET idproduk='$idproduk',namaproduk='$namaproduk',harga='$harga',kuantiti='$kuantiti',status='$status' where idproduk='$idproduk'";  
  
if($conn->query($sql)=== TRUE){   //true --->successfully  
  echo "<script>alert('Update Successfully');window.location='list.php'</script>";  
}  
else{  
 echo "Error:". $sql."<br>".$conn->error;  
}  
$conn->close(); 
?>