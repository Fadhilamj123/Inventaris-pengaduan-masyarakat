<?php
$koneksi = mysqli_connect("localhost","root","","latihan_ukk") or die (mysqli_connect_error());
$nama=$_POST['nama_petugas'];
$user=$_POST['username'];
$pass=$_POST['password'];
$telp=$_POST['telp'];
$level=$_POST['level'];
$id=$_POST['id_petugas'];

$sql=mysqli_query($koneksi, "update petugas set nama_petugas='$nama', username='$user', password='$pass', telp='$telp',level='$level' where id_petugas='$id' ");

if ($sql)
{
?>
<script type="text/javascript">
    alert ('Data Berhasil Diubah');
    window.location='data_petugas.php';
</script>
<?php
}
?>