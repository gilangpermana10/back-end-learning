<?php
$bbm_harga = array(
    "pertamax" => 12500,
    "pertalite" => 10000,
    "dexlite" => 13000,
    "solar" => 6000
);

function showHarga($bbm_harga){
    echo "\n";
    echo "daftar nama Nama BBM dan harga :\n";
    $nomor_urut = 1;
    foreach ($bbm_harga as $key => $value) {
        echo $nomor_urut . ". " . $key . ": " . $value . " Rupiah/liter\n"; 
        $nomor_urut++;
    }
}

function jenisBbm($bbm_harga){
    $jenis_bbm = intval(readline("silahkan pilih salah satu, contoh \"1\" : \n"));
    if ($jenis_bbm < 1 || $jenis_bbm > count($bbm_harga)) {
        echo "Jenis BBM tidak valid\n";
        exit(1);
    }
    return $jenis_bbm;   
}

function jumlahBeli(){
    $jumlah_beli = readline("silahkan masukan jumlah BBM yang akan dibeli, contoh \"1.5\" : \n");
    if ($jumlah_beli < 0) {
        echo "Jumlah beli harus lebih dari 0 \n ";
        exit(1);
    }
    return $jumlah_beli;
}

function uangBayar(){
    $uang_bayar = readline("silahkan masukan jumlah uang yang akan dibayar, contoh \"200000\" : \n");
    if ($uang_bayar <= 0) {
        echo "Jumlah beli harus lebih dari 0 \n";
        exit(1);
    }
    return $uang_bayar;
}    

function main(){
    global $bbm_harga;

    showHarga($bbm_harga);
    $jenis_bbm = jenisBbm($bbm_harga);
    $jumlah_beli = jumlahBeli();
    $uang_bayar = uangBayar();

    // Hitung total harga
    $harga_per_liter = $bbm_harga[array_keys($bbm_harga)[$jenis_bbm - 1]];
    $total_harga = $jumlah_beli * $harga_per_liter;
    
    // Hitung kembalian
    $kembalian = $uang_bayar - $total_harga;
    
    // Tampilkan output
    echo "\nRincian Pembelian:\n";
    echo "Jenis BBM: " . array_keys($bbm_harga)[$jenis_bbm - 1] . "\n";
    echo "Harga per liter: $harga_per_liter Rupiah\n";
    echo "Jumlah yang dibayar:". $uang_bayar ." Rupiah\n";
    echo "Jumlah BBM yang dibeli: ". $jumlah_beli ." liter\n";
    echo "Total harga: $total_harga Rupiah\n";
    
    if ($kembalian >= 0) {
            echo "Kembalian: $kembalian Rupiah\n";
    } else {
        echo "Uang yang dibayarkan kurang. Silakan bayar lebih.\n";
    }
    
    echo "\n";
    $opsi = intval(readline("apakah anda ingin melanjutkan pembelian 1.iya atau 2.tidak \n"));
    if($opsi == 1){
        main();
    }else{
        echo "Terima kasih sudah melakukan pembelian";
        exit(1);
    }
    
}

main();

?>