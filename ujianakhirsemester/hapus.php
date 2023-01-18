<?php 
// MENGGUNAKAN KONEKSI
include "koneksi.php";
?>

<b>Hapus Data Negara</b>
<hr>
Apakah yakin menghapus data ini? <br>
<form method="POST" action="">
	<button type="submit" name="tombol_hapus">Oke</button>
	<button type="submit" name="tombol_batal">Batal</button>
</form>

<?php 
//BATAL HAPUS
if (isset($_POST['tombol_batal'])) {
	header('location:index.php');
}

// OKE HAPUS
if (isset($_POST['tombol_hapus'])) {
	$query = mysqli_query($koneksi, "DELETE FROM tb_negara_20101146 WHERE kode_negara='$_REQUEST[kode_negara]' ");

	if ($query) {
		echo "Data berhasil dihapus!" ;
		header('location:index.php');

	}else{
		echo "Data gagal dihapus!";
	}
}
?>