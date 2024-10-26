<?php
// null coalescing
/* kalau variable $status ada, maka $presensi akan di isi dengan nilai variable $status,
tapi jika tidak ada/ null/ tidak membuat variable maka $presensi akan di isi nilai 'alfa'
*/

$status = "masuk";
$presensi = $status ?? 'alfa';
echo $presensi;
