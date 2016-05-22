<h1 class="text-light">Peserta <strong>Seminar Nasional</strong><span class="mif-folder-open place-right"></span></h1>
<hr class="thin bg-grayLighter">
<a href="?hal=registrasi/reg_semnas" class="button primary">Tambah Peserta</a><br>
<table class="dataTable border bordered" data-role="datatable" data-auto-width="false">
    <thead>
    <tr>
        <td class="sortable-column">ID</td>
        <td class="sortable-column">Nama</td>
        <td class="sortable-column">Telepon</td>
        <td class="sortable-column">Email</td>
        <td class="sortable-column">Pesan</td>
        <td class="sortable-column">Daftar</td>
        <td class="sortable-column">Lunas?</td>
        <td class="sortable-column">Opsi</td>
    </tr>
    </thead>
    <tbody>
    <?php 
        $q_semnas = "SELECT * FROM daftar_semnas ORDER BY id_peserta DESC";
        $fetch = $parti->query($q_semnas);
        while($tampil = $fetch->fetchArray(SQLITE3_ASSOC)){                    
    ?>
    <tr>
        <td> <?php echo $tampil[id_peserta]; ?></td>
        <td> <?php echo $tampil[nama_lengkap]; ?></td>
        <td> <?php echo $tampil[hp]; ?></td>
        <td> <?php echo $tampil[email]; ?></td>
        <td> <?php echo $tampil[pesan]; ?></td>
        <td> <?php echo $tampil[tanggal_daftar]; ?></td>
        <td> <?php echo $tampil[valid]; ?></td>
        <td> 
        <a class="fg-hover-cyan" href="?hal=registrasi/edit_semnas&editID=<?php echo $tampil[id_peserta]; ?>" title="Edit Data"><span class="mif-pencil"> </span></a> -- 
        <a onclick="return confirm('Hapus data <?php echo $tampil[nama_lengkap]; ?> ?');" class="fg-hover-red" href="?hal=registrasi/del_semnas&delID=<?php echo $tampil[id_peserta]; ?>" title="delete data"><span class="mif-bin"> </span></a> </td>
    </tr>
    <?php }; // CLOSE WHILE ?>
    </tbody>
</table>