<?php
    function hitungDiskon($harga, $persen) {
        $potongan = $harga * ($persen / 100);
        return $harga - $potongan;
    }
    $hargaAkhir = hitungDiskon(150000, 10);
    echo "Harga setelah diskon: Rp" . number_format($hargaAkhir, 0, ",", ".");
    function hitungLuas($panjang, $lebar) {
        return $panjang * $lebar;
    }
    $luas = hitungLuas(10, 5);
    echo "<br>Luas persegi panjang: " . $luas . " cm2";
?>