<?php

/**
 * 
 * test file Helper/Input.php
 */

require_once "../Helper/Input.php";

$nama = input("Nama");
$alamat = input("Alamat");

echo "halo nama saya $nama, saya tinggal di $alamat";