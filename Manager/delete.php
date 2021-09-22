<?php 
require '../connection.php'; 
 
$produk = $_GET['managers']; 
 
$deleteusr = "DELETE FROM managers WHERE produk='$idproduk'"; 
$resultdelete -= $conn->query($deleteusr); 
 
?> 
 
<script> 
    window.location = "list.php"; 
</script>