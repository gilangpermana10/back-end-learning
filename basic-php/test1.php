<?php
$bbm_harga = array(
    "pertamax" => 12500,
    "pertalite"=> 10000,
    "dexlite"=> 13000,
    "solar"=> 6000
);


echo "\n";
echo "daftar nama Nama BBM dan harga :\n";
$nomor_urut = 1;
foreach ($bbm_harga as $key => $value) {
    echo $nomor_urut . ". " . $key . ": " . $value . " Rupiah/liter\n";
    $nomor_urut++;
}

   
//fungsi untuk memilih jenis bbm
function pilihjenis(){
    $jenis_bbm = readline("silahkan pilih salah satu, contoh \"1\" : \n");
    if($jenis_bbm < 1 ) {
        echo "Jumlah beli harus lebih dari 0 \n ";
        pilihjenis();
    }
    return $jenis_bbm;
}

function jumlahBeli(){
    $jumlah_beli = readline("silahkan masukan jumlah BBM yang akan dibeli, contoh \"1.5\" : \n");
    if($jumlah_beli < 0){
        echo "Jumlah beli harus lebih dari 0 \n ";
        jumlahBeli();
    }
    return $jumlah_beli;
}

function uangBayar(){
    $uang_bayar= readline("silahkan masukan jumlah BBM yang akan dibeli, contoh \"1.5\" : \n");
    if($uang_bayar <= 0) {
        echo "jumlah beli harus lebih dari 0 \n";
        uangBayar();
    }
    return $uang_bayar;
}   



pilihjenis();
jumlahBeli();
uangBayar();

// Hitung total harga
$harga_per_liter = $bbm_harga[pilihjenis()];
$total_harga = $jumlah_beli() * $harga_per_liter;

// Hitung kembalian
$kembalian = uangBayar() - $total_harga;

// Tampilkan output
echo "\nRincian Pembelian:\n";
echo "Jenis BBM: $jenis_bbm\n";
echo "Harga per liter: $harga_per_liter Rupiah\n";
echo "Jumlah yang dibayar: $uang_bayar Rupiah\n";
echo "Jumlah BBM yang dibeli: $jumlah_beli liter\n";
echo "Total harga: $total_harga Rupiah\n";

if ($kembalian >= 0) {
    echo "Kembalian: $kembalian Rupiah\n";
} else {
    echo "Uang yang dibayarkan kurang. Silakan bayar lebih.\n";
}
?>


