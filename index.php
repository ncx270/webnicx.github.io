<html>
<head><title>Data Karyawan</head></title>
<body background="galaxy.gif"><center>
<a href="input.php"> (+)Tambah Data </a>

<?php
include ("koneksi.php");
$a= mysqli_query ($koneksi,"SELECT * from pegawai");
$b= mysqli_num_rows ($a);
$c=0;



echo "jumlah data ada:".$b;
echo "<table border=4>
<tr>
<td>No.</td>
<td>NIP</td>
<td>Nama</td>
<td>Lama Kerja</td>
<td>Gaji</td>

</tr>";

while ($rows=mysqli_fetch_array($a))
{
    echo "<tr><td>";
    echo $c=$c+1;
    echo "</td><td>";
    echo $rows['nip'];
    echo "</td><td>";
    echo $rows['nama'];
    echo "</td><td>";
    echo $rows['lama_kerja'];
    echo "</td><td>";
    echo $rows['gaji'];
    echo "</td><td>";
?>
<?php
}
?>
</center>
