<?php
$queries = mysqli_query($koneksi, "SELECT (
SELECT count(*) from tbl_jemaat WHERE gender = 'Pria'
) as total_pria ,
(
SELECT count(*) from tbl_jemaat WHERE gender = 'Wanita'
) AS total_wanita,
(
SELECT count(*) from tbl_jemaat WHERE stat_jmt = 'Aktif'
) AS jmt_aktif,
(
SELECT count(*) from tbl_keluarga WHERE stat_kel = 'Aktif'
) AS kel_aktif,
(
SELECT count(*) from tbl_pendeta
) AS total_pendeta,
(
SELECT count(*) from tbl_majelis
) AS total_majelis");
$results = mysqli_fetch_array($queries);
