<h1>Pemilih</h1>
<table>
<thead>
    <tr>
        <th>No</th>
        <th>Nisn</th>
        <th>Nama Pemilih</th>
       
    </tr>
</thead>
<?php
$q = esc_field($_GET['q']);
$rows = $db->get_results("SELECT * FROM tb_pemilih WHERE nama_pemilih LIKE '%$q%' ORDER BY id_pemilih");
$no=0;
foreach($rows as $row):?>
<tr>
    <td><?=++$no ?></td>
    <td><?=$row->nisn?></td>
    <td><?=$row->nama_pemilih?></td>
   
</tr>
<?php endforeach;
?>
</table>