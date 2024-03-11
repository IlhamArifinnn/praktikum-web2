<?php

$nama = $_POST["nama"] ?? "";
$matkul = $_POST["matkul"] ?? "";
$nilai_uts = $_POST["nilai_uts"] ?? "";
$nilai_uas = $_POST["nilai_uas"] ?? "";
$nilai_tugas = $_POST["nilai_tugas"] ?? "";

echo "nama: $nama <br>";
echo "matkul: $matkul <br>";
echo "nilai uts: $nilai_uts <br>";
echo "nilai uas: $nilai_uas <br>";
echo "nilai tugas: $nilai_tugas <br>";
