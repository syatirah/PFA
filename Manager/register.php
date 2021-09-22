<?php
session_start();
require '../connection.php';
?>
<html>

<head>
    <title>PFA</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <div class="container">
        <br><br><br>
        <div class="center">
            <h2>Produk Alatan Farmasi</h2>
        </div>
        <center><br> Nama Programmer: admin (syatirah)</a></center>
    </div>
<center>
    <nav style="background-color: hotpink">
        <strong style="font-size: xx-large"></strong>
        [
        <a class="active" href="index.php">Home</a>
        |
        <a href="index.php">List Produk</a>
        |
        <a href="register.php">Register </a>
        ]
    </nav>
        </center>
    <br><br>
    <center>
        <h2>Register Car</h2>
    </center>
    <form action="insert.php" method="post">

        <table align="center">
            <tr>
                <td>Id Produk :</td>
                <td> <input type="text" name="idproduk" size="48"> </td>
            </tr>
            <tr>
                <td>Nama Produk :</td>
                <td> <input type="text" name="namaproduk" size="48"> </td>
            </tr>
            <tr>
                <td>Harga :</td>
                <td> <input type="text" name="harga" size="48"> </td>
            </tr>
            <tr>
                <td>Kuantiti :</td>
                <td> <input type="text" name="kuantiti" size="48"> </td>
            </tr>
            <tr>
                <td>Status :</td>
                <td> <input type="text" name="priceperweek" size="48"> </td>
            </tr>
            <tr>
            <tr>
                <td colspan="2">
                    <center>
                        <input type="submit" value="Add" style="background-color:PaleGreen;font-size: 15px;" />
                    </center>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>