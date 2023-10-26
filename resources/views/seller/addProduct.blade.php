<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BawangIn</title>
        <link rel="stylesheet" href="{{asset('asset/css/seller/addSeller.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav>
            <div class="logo">
                <a href="#"><img src="{{asset('asset/image/bawangIn.png')}}" alt=""></a>
            </div>
            <ul>
                <li><a class="page" href="#">Toko</a></li>
                <li><a class="page" href="#">Produk</a></li>
                <li><a class="page" href="#">Pesanan</a></li>
            </ul>
            <div class="icon" style="">
                <a class="icon-sub" href="/logout"><img src="{{asset('asset/icon/shop.png')}}" alt=""></a>
                <a class="icon-sub" href="/logout"><img src="{{asset('asset/icon/notif.png')}}" alt=""></a>
                <a class="icon-sub" href="/logout"><img src="{{asset('asset/icon/person.png')}}" alt=""></a>
            </div>
        </nav>
        <head>
            <div class="container">
                <a href="#"><i class="fa fa-arrow-left" style="font-size:30px;color:#69975E"></i></a>
                <h1>Tambah Produk</h1>
            </div>
            <div class="background-head-1">
                <form action="/create-produk" method="POST" >
                    @csrf
                    <div class="form-container-1">
                        <h3 class="kategori">Kategori</h3>
                        <input type="text" placeholder="kategori" class="form-control-1" name="kategori">
                    </div>
                    <div class="form-container-1">
                        <h3 class="grade">Grade </h3>
                        <input id="pass1" type="text" placeholder="grade" class="form-control-2" name="grade">
                    </div>
                    <div class="form-container-1">
                        <h3 class="nama-produk">Nama Produk </h3>
                        <input id="pass2" type="text" placeholder="nama produk" class="form-control-3" name="nama_produk">
                    </div>
                    <div class="form-container-1">
                        <h3 class="deskripsi">Deskripsi </h3>
                        <input id="pass2" type="text" placeholder="deskripsi" class="form-control-4" name="deskripsi">
                    </div>
                    <div class="form-container-1">
                        <h3 class="stok">Stok </h3>
                        <input id="pass2" type="text" placeholder="stok" class="form-control-5" name="stok">
                    </div>
                    <div class="form-container-1">
                        <h3 class="harga-normal">Harga Normal </h3>
                        <input id="pass2" type="text" placeholder="harga normal" class="form-control-6" name="harga_normal">
                    </div>
                    <div class="form-container-1">
                        <h3 class="minim-grosir">Minimal Pembelian harga grosir</h3>
                        <input id="pass2" type="text" placeholder="Minimal Pembelian" class="form-control-7" name="minim_pembelian">
                    </div>
                    <div class="form-container-1">
                        <h3 class="grosir">Harga Grosir </h3>
                        <input id="pass2" type="text" placeholder="harga grosir" class="form-control-8" name="harga_grosir">
                    </div>
                    <div class="form-container-2">
                        <button class="button">Simpan Produk</button>
                    </div>
                </form>
            </div>
            <div class="background-head-5">
                <div class="container-2">
                    <h1>About Bawangin</h1>
                    <p>Buy Fruits & Vegetables Online with the best offers and get home delivery across Indonesia. Find great deals on Fruits & Vegetables when shopping online easily and safely.</p>
                </div>
                <div class="container-3">
                    <div class="container-footer-1">
                        <h1>Quick Link</h1>
                        <a href=""><h3>Home</h3></a>
                        <a href=""><h3>Home</h3></a>
                        <a href=""><h3>Home</h3></a>
                    </div>
                    <div class="container-footer-2">
                        <h1>Contact Us</h1>
                        <a href=""><h3>Whatsapp</h3></a>
                        <a href=""><h3>Gmail</h3></a>
                    </div>
                </div>
                <div class="container-4">
                    <p>Proudly powereed by <b>Bawangin</b></p>
                </div>
            </div>
        </head>
        <script>
            function myFunction() {
              var pass1 = document.getElementById("pass1").value;
              var pass2 = document.getElementById("pass2").value;
              var ok = true;
              if (pass1 != pass2) {
                  //alert("Passwords Do not match");
                  document.getElementById("pass1").style.borderColor = "#E34234";
                  document.getElementById("pass2").style.borderColor = "#E34234";
                  return false;
              }
              else {
                  alert("Passwords Match!!!");
              }
              return ok;
            }
          </script>
    </body>
</html>