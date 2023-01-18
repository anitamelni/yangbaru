<?php  
///MENGGUNAKAN KONEKSI
include "koneksi.php";

echo " <b> DATA IBUKOTA NEGARA </b> <hr>";
echo "<a href='tambah.php'>Tambah Data </a> <br>";

echo "<form method='POST' action=''>";
    echo "<input type='text' name='cari>";
    echo "<button type='submit' name='tombol_cari'>Cari</button>";
echo  "</form>";

echo "<table border=2 width=400px cellpadding=8px cellspacing=0px>";
    echo "<tr>";
      echo "<th>kode_negara </th>";
      echo "<th>Nama_negara</th>";
      echo "<th>Ibukota_negara </th>";
      echo "<th colspan=2> Pilihan </th>";
      echo "</tr>";


if (isset($_POST['tombol_cari'])) {
	//KETIKA MENCARI DATA
	$query =mysqli_query($koneksi, "SELECT * FROM tb_negara_20101146  WHERE Ibukota_negara LIKE '%$_POST[cari]%'");
}else {
	//KETIKA TIDAK MENCARI DATA
	$query =mysqli_query($koneksi, "SELECT * FROM tb_negara_20101146");

}


while ($tampilkan = mysqli_fetch_array($query)) {
	echo "<tr>";
	    echo "<td> $tampilkan[kode_negara] </td>";
	    echo "<td> $tampilkan[Nama_negara] </td>";
	    echo "<td> $tampilkan[Ibukota_negara] </td>";
	    echo "<td><a href='ubah.php?kode_negara=$tampilkan[kode_negara]'> ubah </td>";
	    echo "<td><a href='hapus.php?kode_negara=$tampilkan[kode_negara]'> hapus </td>";
	echo "</tr>";
}
echo "</table>";

?>