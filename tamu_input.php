<?php
include "Untitled-1.php";
echo "
<h2>Input Data Tamu</h2>
<form method='POST' action='aksi_siswa_input.php' enctype='multipart/form-data'>
 <table border='0' width='100%' cellspacing='5' cellpadding='5'>
 <tr><td>Nama Tamu</td><td><input type=text name='nama' size='10'></td></tr>
 <tr><td>Alamat Email</td><td><input type=text name='email' size='50'></td></tr>
 <tr><td>Kota</td><td><input type='text' name='kota'></td></tr>
 <tr>
 <td colspan=2>
 <input type='submit' value='Simpan'>
 <input type='reset' value='Batal'>
 </td>
 </tr>
 </table>
</form>";
?>