<?php

$dateTime = new DateTime();
$dateTime->setDate(1996, 05, 24);
$dateTime->setTime(10, 10, 59, 0);

// tambah 4 tahun
$dateTime->add(new DateInterval("P4Y"));

// mundur 1 bulan
$minusOneMount = new DateInterval("P1M");
$minusOneMount->invert = true;
$dateTime->add($minusOneMount);

var_dump($dateTime);

$now = new DateTime();
$now->setTimezone(new DateTimeZone("Europe/Paris"));
var_dump($now);

$string = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini : $string";

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2025-12-10 12:05:00", new DateTimeZone("Asia/Jakarta"));
var_dump($date);

$dateSalah = DateTime::createFromFormat("Y-m-d H:i:s", "20251030 12:05:00", new DateTimeZone("Asia/Jakarta"));
if ($dateSalah) {
    var_dump($dateSalah);
} else {
    echo "Format waktu salah" . PHP_EOL;
}
