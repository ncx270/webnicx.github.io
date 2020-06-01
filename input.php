
<!DOCTYPE html>
<html>
<body background="galaxy.gif"><center>
<?php
echo"<form method=post action=proses.php>";
echo"  <h2> Input Data <h2> <br>";
echo"
<table width=700 px>

<tr>
<td>NIP</td>
<td width=1>=</td>
<td><input type=text name=nip></td>
</tr>

<tr>
<td>Nama</td>
<td width=1>=</td>
<td><input type=text name=nama></td>
</tr>

<tr>
<td>Lama Kerja</td>
<td width=1>=</td>
<td><input type=text name=lama_kerja></td>
</tr>

<tr>
<td>Gaji</td>
<td width=1>=</td>
<td><input type=text name=gaji></td>
</tr>

</center>
</table>
";
echo"<table>
<tr>
    <input type=submit value=Proses action=koneksi.php>
</tr>
</table>";
echo "</form>"
?>
</body>
</html>