<?php
include "Untitled-1.php";
$keyword=$_POST['keyword'];
echo "
<h2>Hasil Pencarian Data Tamu</h2>
<table border='1' width='100%'>
 <tr>
 <th>No</th><th>Nama</th><th>Email</th><th>Kota</th>
 </tr>";
$tampil=mysqli_query($koneksi,"SELECT * FROM bukutamu where nama like '%$keyword%' or kota like '%$keyword%' ");
$no=1;
while ($r=mysqli_fetch_array($tampil)){
echo "
 <tr>
 <td>$no</td>
 <td>$r[nama]</td>
 <td>$r[email] </td>
 <td>$r[kota]</td>
 </tr>";
 $no=$no+1;
 }
echo "</table>";
?>
