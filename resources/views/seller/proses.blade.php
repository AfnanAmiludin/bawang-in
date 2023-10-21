<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BawangIn</title>
        <link rel="stylesheet" href="{{asset('asset/css/seller/proseSeller.css')}}">
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
                <h1>Pesanan saya</h1>
            </div>
            <div class="background-head-1">
                <div class="page-sub-nav">
                    <a class="sub-nav" href="#">Pending</a>
                    <a class="sub-nav" href="#">Proses</a>
                    <a class="sub-nav" href="#">Dikirim</a>
                    <a class="sub-nav" href="#">Diterima</a>
                    <a class="sub-nav" href="#">Selesai</a>
                    <a class="sub-nav" href="#">Dibatalkan</a>
                    <a class="sub-nav" href="#">Kontrak</a>
                </div>
            </div>
            <div class="background-head-2">
                <div class="box">
                    <div class="box-1">
                        <h3>Bawangstore</h3>
                        <div class="background-1">
                            <div class="picture">
                                <a href="#"><img src="{{asset('asset/image/Seller/bawang.png')}}" style="width: 100px; border-radius: 5px" alt=""></a>
                            </div>
                            <div class="detail">
                                <h2>Bawang Merah Nganjuk</h2>
                                <p>Minimal pembelian produk: <b>500 Kilogram</b></p>
                                <p>Minimal pembelian <b>1000 Kilogram</b></p>
                                <p>Dapatkan harga grosir <b>20.000/Kg</b></p>
                            </div>
                            <div class="price">
                                <h2><b>Harga Satuan</b></h2>
                                <p><b>20.000</b></p>
                            </div>
                            <div class="price">
                                <h2><b>Kuantitas</b></h2>
                                <p><b>1000</b></p>
                            </div>
                            <div class="price">
                                <h2><b>Total Harga</b></h2>
                                <p><b>20.000.000</b></p>
                            </div>
                        </div>
                        <div class="detail-2">
                            <h2>Informasi ongkir: Rp 3.000.000</h2>
                        </div>
                        <div class="detail-3">
                            <h2>Total Pembayaran: Rp 20.000.000</h2>
                        </div>
                    </div>
                    <div class="box-2">
                        <div class="button">
                            <button class="button-1">kirim informasi ongkos kirim</button>
                        </div>
                        <div style="height: 10px"></div>
                        <div class="button">
                            <button class="button-2">kirim informasi ongkos kirim</button>
                        </div>
                    </div>
                </div>
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