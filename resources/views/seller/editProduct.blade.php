<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BawangIn</title>
        <link rel="stylesheet" href="{{asset('asset/css/seller/editSeller.css')}}">
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
                <a class="icon-sub" href="#"><img src="{{asset('asset/icon/shop.png')}}" alt=""></a>
                <a class="icon-sub" href="#"><img src="{{asset('asset/icon/notif.png')}}" alt=""></a>
                <a class="icon-sub" href="#"><img src="{{asset('asset/icon/person.png')}}" alt=""></a>
            </div>
        </nav>
        <head>
            <div class="container">
                <a href="#"><i class="fa fa-arrow-left" style="font-size:30px;color:#69975E"></i></a>
                <h1>Edit Produk</h1>
            </div>
            <div class="background-head-1">
                <form action="#" method="POST" >
                    @csrf
                    <div class="form-container-2">
                        <button class="button">Simpan</button>
                    </div>
                    {{-- <div class="form-container-3">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="form-container-1">
                        <h3 class="kategori">Kategori</h3>
                        <input type="text" placeholder="Email" class="form-control-1" name="email">
                    </div>
                    <div class="form-container-1">
                        <h3 class="grade">Grade </h3>
                        <input id="pass1" type="password" placeholder="password" class="form-control-2" name="password">
                    </div>
                    <div class="form-container-1">
                        <h3 class="nama-produk">Nama Produk </h3>
                        <input id="pass2" type="text" placeholder="password" class="form-control-3">
                    </div>
                    <div class="form-container-1">
                        <h3 class="deskripsi">Deskripsi </h3>
                        <input id="pass2" type="text" placeholder="password" class="form-control-4">
                    </div>
                    <div class="form-container-1">
                        <h3 class="stok">Stok </h3>
                        <input id="pass2" type="text" placeholder="password" class="form-control-5">
                    </div>
                    <div class="form-container-1">
                        <h3 class="harga-normal">Harga Normal </h3>
                        <input id="pass2" type="text" placeholder="password" class="form-control-6">
                    </div>
                    <div class="form-container-1">
                        <h3 class="minim-grosir">Minimal Pembelian Harga Grosir </h3>
                        <input id="pass2" type="text" placeholder="password" class="form-control-7">
                    </div>
                    <div class="form-container-1">
                        <h3 class="grosir">Harga Grosir </h3>
                        <input id="pass2" type="text" placeholder="password" class="form-control-8">
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
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#imageUpload").change(function() {
                readURL(this);
            });
        </script>
    </body>
</html>