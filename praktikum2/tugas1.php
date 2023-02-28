<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>
<body>
<br>

 <div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <!-- F O R M -->
<form method="POST" action="">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text"></div>
        </div> 
        <input id="nama" name="customer" type="text" class="form-control">
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-4">Pilihan Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
        <label for="radio_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
        <label for="radio_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="mesincuci"> 
        <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" type="text" class="form-control">
    </div>
  </div> 

  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
  </div>

    <div class="col-4">
      <!-- DAFTAR HARGA -->
  <ul class="list-group">
      <li class="list-group-item active" aria-current="true">Daftar Harga</li>
      <li class="list-group-item">Televisi : 4.200.000</li>
      <li class="list-group-item">Kulkas : 3.100.000</li>
      <li class="list-group-item">Mesin Cuci : 3.000.000</li>
      <li class="list-group-item active" aria-current="true">HARGA DAPAT BERUBAH SETIAP SAAT</li>
  </ul>
    </div>    
    </div>


        <?php if(isset($_POST[ 'submit'])) : ?>

          Nama Customer : <?= $_POST[ 'customer' ] ?>
          <br>
          Produk Pilihan  : <?= $_POST[ 'radio' ] ?>
          <br>
          Jumlah Beli : <?= $_POST[ 'jumlah' ] ?>
          <br>

        <?php
            if( $_POST[ 'radio' ] == "tv" && $_POST[ 'jumlah'] >= 1){
              $harga = 4200000 * $_POST[ 'jumlah' ];
              echo "Total Harga : " . number_format($harga,0,',',',',);
            } elseif ($_POST[ 'radio' ] == "kulkas" && $_POST[ 'jumlah' ] >=1 ){
              $harga = 3100000 * $_POST[ 'jumlah' ];
              echo "Total Harga : " . number_format($harga,0,',',',',);
            } elseif ($_POST[ 'radio' ] == "mesincuci" && $_POST[ 'jumlah' ] >=1 ){
              $harga = 3000000 * $_POST[ 'jumlah' ];
              echo "Total Harga : " . number_format($harga,0,',',',',);
            }
        ?>


        <?php endif  ?>
    </div>
</body>
</html>