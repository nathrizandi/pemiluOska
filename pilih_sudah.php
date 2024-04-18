<?php

include'config.php';


?>
<div class="page-header">
    <h1>Tanda Terima Pemilihan Suara</h1>
</div>
<!--<p>Hasil suara yang telah Anda masukkan telah tercatat pada sistem E-Voting</p>
<p>Tanda terima pilkada anda adalah <strong></strong></p>
<p></p>
<p>Catatan: mohon catat atau hafalkan tanda terima pilkada tersebut untuk melakukan pengecekan hasil perhitungan suara.</p> -!>
s
<!-- /.panel-heading -->
<?php 

$var = $db->get_var("SELECT tanda_terima FROM tb_pilih WHERE id_pemilih='$_SESSION[id_pemilih]'");
$row = $db->get_row("SELECT * FROM tb_pemilih WHERE id_pemilih='$_SESSION[id_pemilih]'");
?>
<input type="hidden" name="m" value="pemilih" />
<body>
<div class="container" role="main">
<section class="col-sm-12">
<div class="row">
<div class="col-lg-6">
<h3 class="page-header">Bukti Pemilihan</h3>
<div class="panel panel-default">
<div class="panel-heading">
Bukti Diterima
</div>
              
<div class="panel-body">
<p>Berdasarkan hasil peninjaun dan penilaian kami, maka kami menyatakan bahwa data siswa dibawah ini</p>
<div class="table-responsive">
<table class="table table-stdiped table-bordered table-hover">
<tbody>
<tr>
<td colspan="3" align="center"><h6><?php echo $var;?>/VOTE-OSIS/<?php echo date("Y");?></h6></td>
</tr>
<tr>
<td>Nama Siswa</td>
<td><?=$row->nama_pemilih?></td>
</tr>
<tr>
<td>NISN</td>
<td><?=$row->nisn?></td>
</tr>
<tr>
<td>Kelas</td>
<td><?=$row->kelas?></td>
</tr>
<tr>
<td colspan="3" align="center"><b>DINYATAKAN :</b></td>
</tr>
<tr>
<td colspan="3" align="center"><h3>   Sudah Memilih   </h3></td>
</tr>
</tbody>
</table></div>
<!-- /.table-responsive -->
<p>Bagi siswa yang telah dinyatakan <b>Sudah Memilih</b>. Maka anda tidak bisa memilih kembali </p>
</div>
<div class="form-group">

</div>

<body onload="window.print()">
<div class="wrapper">

<!-- /.panel-body -->
</div>


