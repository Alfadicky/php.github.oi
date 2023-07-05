<?php
include "Untitled-1.php";
mysqli_query($koneksi,"INSERT INTO bukutamu(nama,email,kota)
VALUES('$_POST[nama]','$_POST[email]','$_POST[kota]')");
echo "<a href='tamu.php'>Data Sudah Masuk...!</a>";
?>