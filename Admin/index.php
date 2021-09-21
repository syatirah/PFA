<?php 
session_start(); 
require '../connection.php'; 
 
$sql = "SELECT * FROM managers"; 
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
        <br> Nama Programmer: admin (syatirah)</a> 
    </center> 
    <nav style="background-color: hotpink"> 
        <strong style="font-size: xx-large"></strong> 
        [ 
        <a class="active" href="../index.php">Home</a> 
        | 
        <a href="list.php">Produk List </a> 
        | 
        <a href="insert.php">Insert Product</a> 
        ] 
    </nav> 
    <br> 
    <table border="1"> 
        <tr> 
            <th>Produk</th> 
            <th>Harga</th> 
            <th>Jumlah</th> 
            <th>Status</th> 
            <th>Aksi</th> 
        </tr> 
 
        <?php 
        if (mysqli_num_rows($result) > 0) { 
 
 
            while ($row = mysqli_fetch_assoc($result)) { 
        ?> 
 
                <tr> 
                    <td><?php echo $row["produk "]; ?></td> 
                    <td><?php echo $row["harga"]; ?></td> 
                    <td><?php echo $row["jumlah"]; ?></td> 
                    <td><?php echo $row["status"]; ?></td> 
                    <td><?php echo $row["aksi"]; ?></td> 
                    <td colspan="2"> 
                        <a href="update.php?produk=<?php echo $row["produk"]; ?>">Update</a> 
                        <a href="delete.php?produk=<?php echo $row["produk"]; ?>" onclick="return confirm('Are you sure to delete?')">Delete</a> 
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