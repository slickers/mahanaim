<div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
    <a class="dropdown-item" href="index.php?page=edit_keluarga&& id_kel=<?php echo $kel['id_kel']; ?>">Edit</a>
    <a class="dropdown-item" href="index.php?page=kartu&& id_kel=<?php echo $kel['id_kel']; ?>&nama_kel=<?php echo $kel['nama_kel']; ?>">Lihat KK</a>
    <a onclick="destroy_data(<?php echo $kel['id_kel']; ?>)" class="dropdown-item" href="#">Hapus</a>
</div>