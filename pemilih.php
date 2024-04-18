
<div class="page-header">
    <h1>Pemilih</h1>
<?php   

//memanggil file excel_reader
/*require "excel_reader.php";
 include_once 'functions.php';//koneksi

//jika tombol import ditekan
if(isset($_POST['submit'])){

    $target = basename($_FILES['filepegawaiall']['name']) ;
    move_uploaded_file($_FILES['filepegawaiall']['tmp_name'], $target);
    
    $data = new Spreadsheet_Excel_Reader($_FILES['filepegawaiall']['name'],false);
    
//    menghitung jumlah baris file xls
    $baris = $data->rowcount($sheet_index=0);
    
//    jika kosongkan data dicentang jalankan kode berikut
    $drop = isset( $_POST["drop"] ) ? $_POST["drop"] : 0 ;
    if($drop == 1){
//             kosongkan tabel pegawai
             $truncate ="TRUNCATE TABLE tb_pemilih";
             mysqli_query($db, $truncate);
    };
    
//    import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($i=2; $i<=$baris; $i++)
    {
//       membaca data (kolom ke-1 sd terakhir)
      $id_pemilih     = $data->val($i, 1);
      $nisn   = $data->val($i, 2);
      $nama_pemilih           = $data->val($i, 3); 
      $kelas          = $data->val($i, 4);    
      $alamat    = $data->val($i, 5); 
      $pass    = $data->val($i, 6); 
 
//      setelah data dibaca, masukkan ke tabel pegawai sql
      $query = "INSERT INTO tb_pemilih (id_pemilih, nisn, nama_pemilih, kelas, alamat, pass) VALUES 
                      ('$id_pemilih', '$nisn', '$nama_pemilih', '$kelas', '$alamat', '$pass')";
      $hasil = mysqli_query($config, $query );
    }
    
  
//    hapus file xls yang udah dibaca
    unlink($_FILES['filepegawaiall']['name']);
}
 */
?>
 <!--
<form name="myForm" id="myForm" onSubmit="return validateForm()" action="?m=pemilih" method="post" enctype="multipart/form-data">
    <input type="file" id="filepegawaiall" class="form-control" name="filepegawaiall" required /><br />
    <input type="submit" name="submit" class="brn btn-sm btn-success" value="Import" /><br/>
    <label><input type="checkbox" name="drop" value="1" /> <u>Kosongkan tabel sql terlebih dahulu.</u> </label>
</form>
</div>

<script type="text/javascript">
//    validasi form (hanya file .xls yang diijinkan)
    function validateForm()
    {
        function hasExtension(inputID, exts) {
            var fileName = document.getElementById(inputID).value;
            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
        }
 
        if(!hasExtension('filepegawaiall', ['.xls'])){
            alert("Hanya file XLS (Excel 2003) yang diijinkan.");
            return false;
        }
    }
</script>
-->
<div class="panel panel-default" >
    <div class="panel-heading">        
        <form class="form-inline">
            <input type="hidden" name="m" value="pemilih" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?=$_GET['q']?>" />
            </div>
            <div class="form-group">
                <a href="?m=pemilih" button class="btn btn-success" ><span class="glyphicon glyphicon-refresh"></span> Refresh</a>
            </div>
            <div class="form-group  <?=($_SESSION['akses']=='admin') ? '' : 'hidden'?>">
                <a class="btn btn-primary" href="?m=pemilih_tambah"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
            </div>
          
           <!-- <div class="form-group">
                <a class="btn btn-default" href="cetak.php?m=pemilih&a=<?=$_GET['q']?>" target="_blank"><span class="glyphicon glyphicon-print"></span> Cetak</a>
            </div>-->
        </form>
    </div>
    
    <table class="table table-bordered table-hover table-striped"  class="table-responsive">
    <thead>
        <tr>
            <th>No</th>
            <th>Nisn</th>
            <th>Nama Pemilih</th>
            <th>Kelas</th>
            <th>Status</th>
            <th class=" <?=($_SESSION['akses']=='admin') ? '' : 'hidden'?>">Aksi</th>
        </tr>
    </thead>
    <?php
    $q = esc_field($_GET['q']);
    $rows = $db->get_results("SELECT m.*, p.ID AS pilih FROM tb_pemilih m LEFT JOIN tb_pilih p ON p.id_pemilih=m.id_pemilih WHERE  nama_pemilih   LIKE '%$q%' ORDER BY m.id_pemilih");
    $no=0;
    foreach($rows as $row):?>
    <tr>
        <td><?=++$no ?></td>
        <td><?=$row->nisn?></td>
        <td><?=$row->nama_pemilih?></td>
        <td><?=$row->kelas?></td>
        <td><?=($row->pilih) ? '<span class="glyphicon glyphicon-check"></span>' : ''?></td>
        <td class=" <?=($_SESSION['akses']=='admin') ? '' : 'hidden'?>">
            <a class="btn btn-xs btn-warning" href="?m=pemilih_ubah&ID=<?=$row->id_pemilih?>"><span class="glyphicon glyphicon-edit"></span></a>
            <a class="btn btn-xs btn-danger" href="aksi.php?act=pemilih_hapus&ID=<?=$row->id_pemilih?>" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash"></span></a>
        </td>
    </tr>
    <?php endforeach;
    ?>
    </table>
</div>
</div>
</div>