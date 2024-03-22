<?php require_once "class_nilai_mahasiswa.php" ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Mahasiswa</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Form Nilai Ujian</h1>
        <form method="POST" action="form_mahasiswa.php">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label>
                <div class="col-8">
                    <input id="nim" name="nim" type="text" class="form-control">
                </div>
            </div>


            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Prodi</label>
                <div class="col-8">
                    <select id="matkul" name="matkul" class="custom-select">
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Bisnis Digital">Bisnis Digital</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label>
                <div class="col-8">
                    <input id="nilai" name="nilai" type="number" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <?php
        if (isset($_POST["submit"])) {

            // Set nilai properti pada objek dari nilai yang diisi pada form
            $nim = $_POST["nim"];
            $matkul = $_POST["matkul"];
            $nilai = $_POST["nilai"];

            // Buat objek baru dari class bmiPasien
            $mahasiswa1 = new NilaiMahasiswa($nim, $matkul, $nilai);

            echo "<h2>Nilai Mahasiswa</h2> . <br>";
            echo "<p>NIM: " . $mahasiswa1->nim . "</p>";
            echo "<p>Prodi: " . $mahasiswa1->matkul . "</p>";
            echo "<p>Hasil ujian: " . $mahasiswa1->hasil($nilai) . "</p>";
            echo "<p>Grade ujian: " . $mahasiswa1->grade($nilai) . "</p>";
        }
        ?>
    </div>