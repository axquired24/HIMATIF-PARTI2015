<h1 class="text-light">TIM <strong>LKTI</strong><span class="mif-folder-open place-right"></span></h1>
<hr class="thin bg-grayLighter">
<a href="?hal=registrasi/reg_LKTI" class="button primary">Tambah Peserta</a><br>
<table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
    <thead>
    <tr>
        <td class="sortable-column">ID</td>
        <td class="sortable-column">Asal Sekolah</td>
        <td class="sortable-column">Alamat Sekolah</td>
        <td class="sortable-column">Email Tim</td>
        <td class="sortable-column">Nama Peserta</td>
        <td class="sortable-column">Telepon Ketua</td>
        <td class="sortable-column">Opsi</td>
    </tr>
    </thead>
    <tbody>
    <?php 
        $q_LKTI = "SELECT * FROM daftar_LKTI ORDER BY id_lkti DESC";
        $fetch = $parti->query($q_LKTI);
        while($tampil = $fetch->fetchArray(SQLITE3_ASSOC)){
              $ex1 = explode(",", $tampil[kelas_nis_telepon1]);
              $kelas1 = $ex1[0];
              $nis1 = $ex1[1];
              $telepon1 = $ex1[2];
    ?>
    <tr>
        <td title="Terdaftar pada: <?php echo $tampil[tanggal_daftar]; ?>"> <?php echo $tampil[id_lkti]; ?></td>   
        <td> <?php echo $tampil[asal_sekolah]; ?></td>
        <td> <?php echo $tampil[alamat_sekolah]; ?></td>
        <td> <?php echo $tampil[email]; ?></td>
        <td> <?php echo $tampil[nama_peserta1]; ?>(Ketua), <?php echo $tampil[nama_peserta2]; ?>, <?php echo $tampil[nama_peserta3]; ?></td>
        <td> <?php echo $telepon1; ?></td>        
        <td> <a class="fg-hover-cyan" href="?hal=registrasi/edit_LKTI&editID=<?php echo $tampil[id_lkti]; ?>" title="Edit Data"><span class="mif-pencil"> </span></a> -- <a onclick="return confirm('Hapus data <?php echo $tampil[asal_sekolah]; ?> ?');" class="fg-hover-red" href="?hal=registrasi/del_LKTI&delID=<?php echo $tampil[id_lkti]; ?>" title="delete data"><span class="mif-bin"> </span></a> </td>
    </tr>
    <?php }; // CLOSE WHILE ?>
    </tbody>
</table>