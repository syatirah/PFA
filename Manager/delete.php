<?php 
require '../connection.php'; 
 
$produk = $_GET['produk']; 
 
$deleteusr = "DELETE FROM produk WHERE produk='$produk'"; 
$resultdelete -= $conn->query($deleteusr); 
 
?> 
 
<script> 
    window.location = "list.php"; 
</script>