<?php

$fp = fopen('./google.csv', 'r');
if ($fp === false) {
    echo 'cannot open google.csv';
    exit;
}

$row = 0;
while (($data = fgetcsv($fp, 100000, ',')) !== false) {

    $row++;
    // skip first header
    if ($row == 1) continue;

    echo "BEGIN:VCARD", PHP_EOL;
    echo "VERSION:3.0", PHP_EOL;
    echo "FN:$data[0]", PHP_EOL;
    echo "N:$data[0]", PHP_EOL;
    echo "SORT-STRING:$data[4]", PHP_EOL;
    echo "TEL;TYPE=PREF:".addZero($data[34]), PHP_EOL;
    echo "TEL:".addZero($data[36]), PHP_EOL;
    echo "EMAIL;TYPE=PREF:$data[28]", PHP_EOL;
    echo "EMAIL:$data[30]", PHP_EOL;
    echo "EMAIL:$data[32]", PHP_EOL;
    echo "END:VCARD", PHP_EOL;

}

fclose($fp);
exit;

function addZero($num) {
    if (strlen($num) == 0) return $num;
    $add = "";
    if (strpos($num, "0") !== 0) {
        $add = "0";
    }
    return $add.$num;
}
