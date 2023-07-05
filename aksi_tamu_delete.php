<?php
include "Untitled-1.php";

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM bukutamu WHERE id = $id");
echo"<a href='tamu.php'>DATA SUDAH TERHAPUS....</a>";
?>