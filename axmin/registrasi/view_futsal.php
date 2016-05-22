<h1 class="text-light">Tim <strong>Futsal</strong><span class="mif-folder-open place-right"></span></h1>
<hr class="thin bg-grayLighter">
<a href="?hal=registrasi/reg_futsal" class="button primary">Tambah Peserta</a><br>
<table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
    <thead>
    <tr>
        <td class="sortable-column">ID</td>
        <td class="sortable-column">Asal Sekolah</td>
        <td class="sortable-column">Nama Tim</td>        
        <td class="sortable-column">Anggota Tim</td>
        <td class="sortable-column">Official</td>
        <td class="sortable-column">Kontak Official</td>        
        <td class="sortable-column">Opsi</td>
        
    </tr>
    </thead>
    <tbody>
    <?php 
        $q_futsal = "SELECT * FROM daftar_FUTSAL ORDER BY id_futsal DESC";
        $fetch = $parti->query($q_futsal);
        while($tampil = $fetch->fetchArray(SQLITE3_ASSOC)){
    ?>
    <tr>
        <td title="Terdaftar pada: <?php echo $tampil[tanggal_daftar]; ?>"> <?php echo $tampil[id_futsal]; ?></td>
        <td> <?php echo $tampil[asal_sekolah]; ?></td>
        <td> <?php echo $tampil[nama_tim]; ?></td>
        <td> <?php echo $tampil[peserta_tim]; ?></td>
        <td> <?php echo $tampil[nama_manajer]; ?></td>
        <td> <?php echo $tampil[hp_manajer]; ?></td>        
        <td> 
        <a class="fg-hover-cyan" href="?hal=registrasi/edit_FUTSAL&editID=<?php echo $tampil[id_futsal]; ?>" title="Edit Data"><span class="mif-pencil"> </span></a> -- 
        <a onclick="return confirm('Hapus data <?php echo $tampil[asal_sekolah]; ?> ?');" class="fg-hover-red" href="?hal=registrasi/del_FUTSAL&delID=<?php echo $tampil[id_futsal]; ?>" title="delete data"><span class="mif-bin"> </span></a> </td>
    </tr>
    <?php }; // CLOSE WHILE ?>
    </tbody>
</table>