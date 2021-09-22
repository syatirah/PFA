<?php 
session_start(); 
require '../connection.php'; 
 
$sql = "SELECT * FROM produk"; 
$result = mysqli_query($conn, $sql); 
?> 
 
<html> 
 
<head> 
    <title>PFA</title> 
    <link rel="stylesheet" href="../style.css"> 
</head> 
 
<body> 
    <center> 
        <h2>Produk Alatan Farmasi</h2> 
        <br> Nama Programmer: admin(syatirah)</a> 
    </center> 
    <nav style="background-color: hotpink"> 
        <strong style="font-size: xx-large"></strong> 
        [ 
        <a class="active" href="../index.php">Home</a> 
        | 
        <a href="list.php">Produk List</a> 
        | 
        <a href="insert.php">Insert Product</a> 
        ] 
    </nav> 
    <br> 
    <table border="1"> 
        <tr> 
            <th>ID Produk</th> 
            <th>Nama Produk</th> 
            <th>Harga</th> 
            <th>Kuantiti</th> 
            <th>Status</th> 
        </tr> 
 
        <?php 
        if (mysqli_num_rows($result) > 0) { 
 
 
            while ($row = mysqli_fetch_assoc($result)) { 
        ?> 
 
                <tr> 
                    <td><?php echo $row["idproduk "]; ?></td> 
                    <td><?php echo $row["namaproduk"]; ?></td> 
                    <td><?php echo $row["harga"]; ?></td> 
                    <td><?php echo $row["kuantiti"]; ?></td> 
                    <td><?php echo $row["status"]; ?></td> 
                    <td colspan="2"> 
                        <a href="update.php?produk=<?php echo $row["idproduk"]; ?>">Update</a> 
                        <a href="delete.php?produk=<?php echo $row["idproduk"]; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a> 
                    </td> 
                </tr> 
 
        <?php 
 
            } 
        } else { 
            echo "0 results"; 
        } 
        mysqli_close($conn); 
        ?> 
 
    </table> 
</body> 
</html>