<?php
$query_fams = "SELECT * FROM `tbl_keluarga`";
$result_fams = mysqli_query($koneksi, $query_fams);

$ls_family = "";

while ($row_fams = mysqli_fetch_array($result_fams)) {
    $ls_family = $ls_family . "<option>$row_fams[1]</option>";
}
?>
