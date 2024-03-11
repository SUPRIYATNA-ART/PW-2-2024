<?php
    $customer = isset($_POST["customer"]) ? $_POST['customer'] : null;
    $produk = isset($_POST["produk"]) ? $_POST['produk'] : null;
    $jumlah = isset($_POST["jumlah"]) ? $_POST['jumlah'] : null;
    
    $TV = 4200000;
    $Kulkas = 3100000;
    $Mesin_Cuci = 3800000;

    $total_harga = 0;
    if ($produk == "TV") {
        $total_harga = $TV * $jumlah;
    } elseif ($produk == "Kulkas"){
        $total_harga = $Kulkas * $jumlah;
    } elseif ($produk == "Mesin Cuci"){
        $total_harga = $Mesin_Cuci * $jumlah;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h1 class="text-center">Belanja Online</h1>
    <form method="post" action="">
      <div class="form-group row">
        <label class="col-1 col-form-label" for="text1">Customer</label> 
        <div class="col-8">
          <input id="text1"  name="customer" placeholder="Name..." type="text" class="form-control" required="required">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-1">Pilih Produk</label> 
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="TV" type="radio" class="custom-control-input" value="TV" required="required" aria-describedby="radioHelpBlock"> 
            <label for="TV" class="custom-control-label">TV</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="Kulkas" type="radio" class="custom-control-input" value="Kulkas" required="required" aria-describedby="radioHelpBlock"> 
            <label for="Kulkas" class="custom-control-label">Kulkas</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="MesinCuci" type="radio" class="custom-control-input" value="Mesin Cuci" required="required" aria-describedby="radioHelpBlock"> 
            <label for="MesinCuci" class="custom-control-label">Mesin Cuci</label>
          </div> 
          <span id="radioHelpBlock" class="form-text text-muted">choose products</span>
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-1 col-form-label">Jumlah Produk</label> 
        <div class="col-8">
          <input id="text2" name="jumlah" type="text" required="required" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div> 
      </div>
    </form>

    <div class="card p-4 mx-5 mt-5 border-primary">
      <h6>Nama customer: <?= $customer; ?></h6>
      <h6>Pilih Produk: <?= $produk ; ?></h6>
      <h6>Jumlah Produk: <?= $jumlah; ?></h6>
      <h6>Total Harga: <?= $total_harga; ?></h6>
    </div>

</body>
</html>
