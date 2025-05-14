<?php
require_once 'config.php';

// Contoh data produk
$produk = [
    "nama" => "Keyboard Mechanical RGB",
    "harga" => 500000 // dalam rupiah
];

// Hitung pajak
$pajak = $produk['harga'] * (PAJAK_PERSEN / 100);
$total = $produk['harga'] + $pajak;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Produk - <?= NAMA_TOKO ?></title>
</head>
<body>
    <h2>Detail Produk</h2>
    <p>Nama: <?= $produk['nama'] ?></p>
    <p>Harga: Rp<?= number_format($produk['harga'], 0, ',', '.') ?></p>
    <p>Pajak (<?= PAJAK_PERSEN ?>%): Rp<?= number_format($pajak, 0, ',', '.') ?></p>
    <p><strong>Total: Rp<?= number_format($total, 0, ',', '.') ?></strong></p>

    <a href="<?= BASE_URL ?>">Kembali ke Beranda</a>
</body>
</html>
