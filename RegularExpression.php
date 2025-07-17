<?php

$matches = [];
$result = (bool)preg_match_all("/Muham|ais|Bya/i", "Muhammad Unais Basya", $matches); //i adalah incasesensitive

var_dump($result);
var_dump($matches);

// contoh untuk memfilter kata tertentu
$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing, BANGSAT!");
echo $result;

// mensplit kalimat
$result = preg_split("/[\s,-]/", "Muhammad Unais Basya Anak-Sholeh"); // split berdasarkan spasi (\s) dan strip (-)
var_dump($result);