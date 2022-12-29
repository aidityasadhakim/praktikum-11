<?php
require 'function.php';
$id = $_GET["id"];
hapus($id);
echo "<script>
    alert('data berhasil dihapus');
    document.location.href = 'index.php';
    </script>";