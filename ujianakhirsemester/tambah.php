<?php  
//MENGGUNAKAN KONEKSI
include "koneksi.php";
?>

<b>Tambah Data </b><hr>;

 <form method="POST" action="">
 	<table border="1">
 		<tr>
 			<td>kode_negara</td>
 			<td>: </td>
 			<td>
 				<input type="text" name="kode_negara" required>
 			</td>
 		</tr>
 		<tr>
 			<td>Nama_negara</td>
 			<td>: </td>
 			<td>
 				<input type="text" name="Nama_negara" required>
 			</td>
 		</tr>
 		<tr>
 			<td>Ibukota_negara</td>
 			<td>: </td>
 			<td>
 				<input type="text" name="Ibukota_negara" required>
 			</td>
 		</tr>
 		<tr>
 			<td></td>
 			<td></td>
 			<td>
 				<button  type="submit" name="tombol_simpan">Simpan</button>
 			</td>
 		</tr>
 	</table>
</form>

<?php 
// MENYIMPAN DATA
if (isset($_POST['tombol_simpan'])) {
	$query = mysqli_query($koneksi, "INSERT INTO tb_negara_20101146 (kode_negara, Nama_negara, Ibukota_negara) VALUES ('$_POST[kode_negara]', '$_POST[Nama_negara]', 
		'$_POST[Ibukota_negara]')");

}
?>
