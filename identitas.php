<?php
$row = $db->get_row("SELECT * FROM tb_pemilih WHERE id_pemilih='$_SESSION[id_pemilih]'");
?>
<div class="container"> 
        <div class="row justify-content-center">
            <div class="col-md-8">   
                <div class="card mt-5">
                    <div class="card-header" style="background-color: #33579c; color: white;">
                    <strong>Data Identitas Pemilih</strong>
                    <?php 
                    $sekarang = time();
                    $batas = mktime(8,30);
                    if($sekarang < $batas):?>
                    <b>Maaf pemilihan baru bisa dimulai pukul <p style=" color:red"><?=date('H:i', $batas)?> WIB</b></p>
                    <?php else:?>
                    <span style="float: right;">
                    <a href="?m=tanda_terima&act=pilih">
                        <button class="btn btn-dark">Lanjutkan <i class="fas fa-angle-right"></i></button>
                    </a>
                    </span>
                    <?php endif;?>
                    </div>
                        <div class="card-body">
                            <table border="0" style="border: none;">
                                <tr>
                                    <td width="35%"><b>Nama Pemilih</b></td>
                                    <td width="5%">:</td>
                                    <td width="60%"><?=$row->nama_pemilih?></td>
                                </tr>
                                <tr style="background-color: white;">
                                    <td width="35%"><b>NISN</b></td>
                                    <td width="5%">:</td>
                                    <td width="60%"><?=$row->nisn?></td>
                                </tr>
                                <tr>
                                    <td width="35%"><b>Kelas</b></td>
                                    <td width="5%">:</td>
                                    <td width="60%"><?=$row->kelas?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
