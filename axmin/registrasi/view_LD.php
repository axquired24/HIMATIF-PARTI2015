<h1 class="text-light">Peserta <strong>Lomba Desain</strong><span class="mif-folder-open place-right"></span></h1>
<hr class="thin bg-grayLighter">
<a href="?hal=registrasi/reg_LD" class="button primary">Tambah Peserta</a><br>
<table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
    <thead>
    <tr>
        <td class="sortable-column">ID</td>        
        <td class="sortable-column">Nama Peserta</td>
        <td class="sortable-column">Email</td>        
        <td class="sortable-column">Telepon</td>
        <td class="sortable-column">Asal Sekolah</td>
        <td class="sortable-column">Alamat Sekolah</td>
        <td class="sortable-column">Opsi</td>
        
    </tr>
    </thead>
    <tbody>
    <?php 
        $q_LD = "SELECT * FROM daftar_LD ORDER BY id_desain DESC";
        $fetch = $parti->query($q_LD);
        while($tampil = $fetch->fetchArray(SQLITE3_ASSOC)){
    ?>
    <tr>
        <td title="Terdaftar pada: <?php echo $tampil[tanggal_daftar]; ?>"> <?php echo $tampil[id_desain]; ?></td>    
        <td> <?php echo $tampil[nama_lengkap]; ?></td>
        <td> <?php echo $tampil[email]; ?></td>
        <td> <?php echo $tampil[no_hp]; ?></td>
        <td> <?php echo $tampil[asal_sekolah]; ?></td>
        <td> <?php echo $tampil[alamat_sekolah]; ?></td>
        <td> <a class="fg-hover-cyan" href="?hal=registrasi/edit_LD&editID=<?php echo $tampil[id_desain]; ?>" title="Edit Data"><span class="mif-pencil"> </span></a> -- 
        <a onclick="return confirm('Hapus data <?php echo $tampil[asal_sekolah]; ?> ?');" class="fg-hover-red" href="?hal=registrasi/del_LD&delID=<?php echo $tampil[id_desain]; ?>" title="delete data"><span class="mif-bin"> </span></a> </td>
    </tr>
    <?php }; // CLOSE WHILE ?>
    </tbody>
</table>