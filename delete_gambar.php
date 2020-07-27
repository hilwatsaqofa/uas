<?php
if(isset($_GET['indo']))
{
    include('koneksi.php');
    $indo = $_GET['images'];
    $query = mysqli_query($koneksi,"delete from gambar where indo='$images'");
}
?>