<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Tugas Praktikum</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

      <div class="container">
            <div class="row">
                  <div class="col-md-8">
                        <h1 class="mt-2">Belanja Online</h1>
                        <hr>

                        <form action="tugas_praktikum.php" method="post" class='p-2'>
                              <div class="form-group row">
                                    <label for="costumer" class="col-4 col-form-label">Costumer</label>
                                    <div class="col-8">
                                          <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control" required="required">
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label class="col-4">Radio Buttons</label>
                                    <div class="col-8">
                                          <div class="custom-control custom-radio custom-control-inline">
                                                <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="TV" required="required">
                                                <label for="radio_0" class="custom-control-label">TV</label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                                <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="Kulkas" required="required">
                                                <label for="radio_1" class="custom-control-label">Kulkas</label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                                <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required">
                                                <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
                                          </div>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
                                    <div class="col-8">
                                          <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <div class="offset-4 col-8">
                                          <button name="submit" type="submit" class="btn btn-success">Kirim</button>
                                    </div>
                              </div>
                        </form>
                        <hr>
                  </div>
                  <div class="col-md-4">
                        <div class="border rounded">
                              <div class="bg-primary py-3 rounded">
                                    <h6 class="text-white mx-3">Daftar Harga</h6>
                              </div>
                              <div class="">
                                    <p class="border-bottom py-1 mx-3 mt-2">TV : 4.200.000</p>
                                    <p class="border-bottom py-1 mx-3">Kulkas : 3.100.000</p>
                                    <p class="border-bottom py-1 mx-3">Mesin Cuci : 3.800.000</p>
                              </div>
                              <div class="bg-secondary py-3 rounded">
                                    <h6 class="text-white mx-3">Harga dapat berubah setiap saat</h6>
                              </div>
                        </div>
                        <div class="mt-4 p-2">
                              <h3 class="border-bottom py-2">Daftar Harga</h3>
                              <p class='border p-2 rounded'>Nama Costumer: <?= isset($_POST['costumer']) ? $_POST['costumer'] : ''; ?></p>
                              <p class='border p-2 rounded'>Produk Pilihan: <?= isset($_POST['radio']) ? $_POST['radio'] : ''; ?></p>
                              <p class='border p-2 rounded'>Jumlah Beli: <?= isset($_POST['jumlah']) ? $_POST['jumlah'] : ''; ?></p>
                              <?php
                              // Menghitung total belanja
                              $harga_tv = 4200000;
                              $harga_kulkas = 3100000;
                              $harga_mesin_cuci = 3800000;

                              $produk = isset($_POST['radio']) ? $_POST['radio'] : '';
                              $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
                              $total = 0;

                              switch ($produk) {
                                    case 'TV':
                                          $total = $harga_tv * $jumlah;
                                          break;
                                    case 'Kulkas':
                                          $total = $harga_kulkas * $jumlah;
                                          break;
                                    case 'Mesin Cuci':
                                          $total = $harga_mesin_cuci * $jumlah;
                                          break;
                                    default:
                                          $total = 0;
                                          break;
                              }
                              ?>
                              <p class='border p-2 rounded'>Total Belanja: <?= number_format($total, 0, ',', '.'); ?></p>
                        </div>
                  </div>
            </div>



      </div>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>