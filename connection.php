<?php 

$host = "localhost";
$user = "root";
$pass= "";
$db = "pfa";

$conn = mysqli_connect($host,$user,$pass,$db);

if (!$conn)
{
    echo 'Connected successfully to produk database';

    $sql="insert into produk(idproduk,namaproduk,harga,kuantiti,status) values ('123','vitamilk',Rm123,'1','BELI')";
    $query=mysqli_query($conn,$sql);
    if($query)
        echo 'data inserted successfully';
}
?>