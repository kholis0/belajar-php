<?php
// array numeric
// array berisi angka
$angka = array(1, 2, 3, 4, 5);
// var_dump($angka);


// array berisi string
$nama = ["paijo", "wahyono"];
// var_dump($nama);


// array berisi campuran
$campuran = [
    null,
    true,
    4.8,
    "paku"
];

// var_dump($campuran);

// array asosiatif
$alamat = [
    "jalan" => "Margayasa No. 33",
    "Kelurahan" => "Mojorejo",
    "Kecamatan" => "Taman",
    "Kota" => "Madiun",
];

// var_dump($alamat);

// menampilkan data array
// echo $angka[3];
// mengganti value dari key
// echo $alamat["Kelurahan"].PHP_EOL;
// $alamat["Kelurahan"] = "Madigondo";
// echo $alamat["Kelurahan"];

// menambahkan data array
$nama[] = "Gendor";
var_dump($nama);

// menambahkan key dan data baru
$alamat["Provinsi"] = "Jawa Timur";
var_dump($alamat);

// menghapus data di dalam array
unset($alamat["Kecamatan"]);
var_dump($alamat);

// menghitung jumlah data array
echo count($alamat);

// membuat array multi-dimensi
$pegawai = [
    "id" => "K17",
    "nama" => [
        "nama_depan" => "Aman",
        "nama_belakang" => "abdurrahman"
    ],
    "umur" => 60,
];

$pegawai["alamat"] = [
    "dukuh" => [
        "dukuh" => "Beku",
        "desa" => "Kliwonan"
    ],
    "kecamatan" => "Kliwonan",
    "kabupaten" => "Sragen"
];

// menampilkan data agar terlihat rapi
print_r($pegawai);

echo $pegawai["nama"]["nama_belakang"];

echo $pegawai["alamat"]["dukuh"]["desa"] . PHP_EOL;
$pegawai["alamat"]["dukuh"]["desa"] = "Kuyang";
echo $pegawai["alamat"]["dukuh"]["desa"];