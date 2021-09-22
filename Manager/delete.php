<?php 
require '../connection.php'; 
 
$idproduk = $_GET['idproduk']; 
 
$deleteusr = "DELETE FROM produk WHERE idproduk='$idproduk'"; 
$resultdelete -= $conn->query($deleteusr); 
 
?> 
 
<script> 
    window.location = "list.php"; 
</script>