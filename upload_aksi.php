
<?php 
// menghubungkan dengan koneksi
include 'config.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>
 
<?php
// upload file xls
$target = basename($_FILES['file']['name']) ;
move_uploaded_file($_FILES['file']['tmp_name'], $target);
 
// beri permisi agar file xls dapat di baca
chmod($_FILES['file']['name'],0777);
 
// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['file']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);
 
// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){
 
	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$nisn     = $data->val($i, 1);
	$nama_pemilih   = $data->val($i, 2);
	$kelas  = $data->val($i, 3);
    $pass  = $data->val($i, 4);
	if($nisn != "" && $nama_pemilih != "" && $kelas != ""  && $pass != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into data_pegawai values('','$nisn','$nama_pemilih','$kelas', '','$pass')");
		$berhasil++;
	}
}
 
// hapus kembali file .xls yang di upload tadi
unlink($_FILES['file']['name']);
 
?>
