<?php 
require '../connection.php'; 
 
$idproduk = $_GET['produk']; 
 
$deleteusr = "DELETE FROM produk WHERE idproduk='$idproduk'"; 
$resultdelete -= $conn->query($deleteusr); 
 
?> 
 
<script> 
    window.location = "index.php"; 
</script>