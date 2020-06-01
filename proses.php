 <?php
 include ("koneksi.php");
 $nip=$_POST['nip'];
 $nama=$_POST['nama'];
 $lama_kerja=$_POST['lama_kerja'];
 $gaji=$_POST['gaji'];
 $b=mysqli_query($koneksi,"INSERT INTO pegawai (nip,nama,lama_kerja,gaji) VALUE ('$nip','$nama','$lama_kerja','$gaji')");
 
 if($b)
 {
     header('Location:index.php?status=sukses');
 }
 else
 {
     header('Location:index.php?status=gagal');
 }
 ?> 