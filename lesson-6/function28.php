<?php
// array function
$data = [1,2,3,4,5];

// mengubah data array dengan callback
var_dump(array_map(fn($data)=>$data*5, $data));

// membalik urutan array
rsort($data);
var_dump($data);

// mendapatkan key array
var_dump(array_keys($data));

// mendapatkan value array
var_dump(array_values($data));

// mengacak array
shuffle($data);
var_dump($data);