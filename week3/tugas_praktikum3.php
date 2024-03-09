<?php

echo "<h3>Soal No 1 Looping I Love PHP</h3>";

// Lakukan Looping Pertama Di Sini
echo "LOOPING PERTAMA: <br>";
for ($x = 1; $x <= 20; $x++) {
      if ($x % 2 == 0) {
            echo "$x - STT Nurul Fikri<br>";
      }
}


echo "<br>LOOPING KEDUA: <br>";
// Lakukan Looping Kedua Di Sini
for ($x = 20; $x >= 1; $x--) {
      if ($x % 2 == 0) {
            echo "$x  Ilham Arifin<br>";
      }
}

echo "<h3>Soal No 2 Function Tentukan Nilai</h3>";
/*
Soal 2
buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
*/

// Code function di sini

// Hapus komentar di bawah ini untuk jalankan code
// echo tentukan_nilai(98); //Sangat Baik
// echo tentukan_nilai(76); //Baik
// echo tentukan_nilai(67); //Cukup
// echo tentukan_nilai(43); //Kurang

?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>

<body>
      <p>Masukan Nilai: </p>
      <form action="tugas_praktikum3.php" method="post">
            <input type="number" name="nilai" id="nilai">
            <input type="submit" name="submit" value="Submit">
      </form>
      <?php
      if (isset($_POST['submit'])) {
            $_nilai = $_POST["nilai"] ?? "";

            function grade($_nilai)
            {
                  if ($_nilai < 60) {
                        return "Kurang";
                  } elseif ($_nilai >= 60 && $_nilai < 70) {
                        return "Cukup";
                  } elseif ($_nilai >= 70 && $_nilai < 85) {
                        return "Baik";
                  } elseif ($_nilai >= 85 && $_nilai <= 100) {
                        return "Sangat Baik";
                  } else {
                        return "Nilai Anda Tidak Valid";
                  }
            }

            echo "Grade: " . grade($_nilai);
      }
      ?>

</body>

</html>