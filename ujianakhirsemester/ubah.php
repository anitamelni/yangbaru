<?php 
// MENGGUNAKAN KONEKSI
include "koneksi.php";
?>

<b>Ubah Data Negara</b>
<hr>

<?php 
$query = mysqli_query($koneksi, "SELECT * FROM  tb_negara_20101146 WHERE kode_negara='$_REQUEST[kode_negara]' ");
while ($tampilkan =mysqli_fetch_array($query)) {
	?>

    <form method="POST" action="">
 	    <table border="1">
 		    <tr>
 			<td>kode_negara</td>
 			<td>: </td>
 			<td>
 				<input type="text" name="kode_negara" value="<?php echo  $tampilkan['kode_negara']; ?>" required readonly>
 			</td>
 		</tr>
 		<tr>
 			<td>Nama_negara</td>
 			<td>: </td>
 			<td>
 				<input type="text" name="Nama_negara" value="<?php echo $tampilkan ['Nama_negara']; ?>" required>
 			</td>
 		</tr>
 		<tr>
 			<td>Ibukota_negara</td>
 			<td>: </td>
 			<td>
 				<input type="text" name="Ibukota_negara" value="<?php echo $tampilkan ['Ibukota_negara']; ?>" required>
 			</td>
 		</tr>
 		<tr>
 			<td></td>
 			<td></td>
 			<td>
 				<button  type="submit" name="tombol_ubah">Ubah</button>
 			</td>
 		</tr>
 	    </table>
    </form>


	<?php
}
?>

<?php 
// MENGUBAH DATA
if (isset($_POST['tombol_ubah'])) {
	$quuer =mysqli_query($koneksi, "UPDATE tb_negara_20101146 SET Nama_negara='$_POST[Nama_negara]' ,Ibukota_negara='$_POST[Ibukota_negara]' WHERE kode_negara='$_POST[kode_negara]' ");

	if ($query) {
		echo "Data berhasil diubah!";
		header('location:index.php');
	}else {
		echo "Data gagal diubah!";
    }
}
?>
