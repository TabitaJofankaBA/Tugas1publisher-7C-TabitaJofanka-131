<?php
include("config.php");

// cek apakah tombol simpan sudah bisa diklik atau belum?
if (isset($_POST['simpan'])){

	// ambil data dari formulir
	$id = $_POST['Id'];
	$nama = $_POST['Nama'];
	$jurusan = $_POST['Jurusan'];
    $alamat = $_POST['Alamat'];

	// buat query update
	$sql ="UPDATE calon_siswa SET Nama='$nama',
	Jurusan='$jurusan', Alamat='$alamat' WHERE id=$id";
	$query = mysqli_query($db, $sql);

	// apakah query update berhasil?
	if ($query) {
		// kalau berhasil alihkan ke halaman penfatar.php
		header('location: pendaftar.php');
	} else {
		// kalau gagal tampilan pesan
		die("Gagal menyimpan perubahan...");
	}

} else {
	die("Akses dilarang...");
}
?>