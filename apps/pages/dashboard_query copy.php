<!-- <?php
$result1 = mysqli_query($koneksi, "SELECT count(*) as total_jmt from tbl_jemaat WHERE stat_jmt = 'Aktif'");
$data1 = mysqli_fetch_assoc($result1);
?>;
<?php
$result2 = mysqli_query($koneksi, "SELECT count(*) as total_kel from tbl_keluarga WHERE stat_kel = 'Aktif'");
$data2 = mysqli_fetch_assoc($result2);
?>;
<?php
$result3 = mysqli_query($koneksi, "SELECT count(*) as total_pdt from tbl_pendeta");
$data3 = mysqli_fetch_assoc($result3);
?>;
<?php
$result4 = mysqli_query($koneksi, "SELECT count(*) as total_mj from tbl_majelis");
$data4 = mysqli_fetch_assoc($result4);
?>;
<?php
$result5 = mysqli_query($koneksi, "SELECT count(*) as total_pria from tbl_jemaat WHERE gender = 'Pria'");
$data5 = mysqli_fetch_assoc($result5);
?>;
<?php
$result6 = mysqli_query($koneksi, "SELECT count(*) as total_wanita from tbl_jemaat WHERE gender = 'Wanita'");
$data6 = mysqli_fetch_assoc($result6);
?>; -->