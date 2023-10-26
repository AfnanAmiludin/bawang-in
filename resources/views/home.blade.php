<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BawangIn</title>
        <link rel="stylesheet" href="{{asset('asset/css/home.css')}}">
    </head>
    <body>
        <nav>
            <div class="logo">
                <a href="#"><img src="{{asset('asset/image/bawangIn.png')}}" alt=""></a>
            </div>
            <ul>
                <li><a class="page" href="#">Home</a></li>
                <li><a class="page" href="/pembeli-produk">product</a></li>
                <li><a class="page" href="#">Pesanan saya</a></li>
            </ul>
            <div class="icon" style="">
                <a class="icon-sub" href="/logout"><img src="{{asset('asset/icon/shop.png')}}" alt=""></a>
                <a class="icon-sub" href="/logout"><img src="{{asset('asset/icon/notif.png')}}" alt=""></a>
                <a class="icon-sub" href="/logout"><img src="{{asset('asset/icon/person.png')}}" alt=""></a>
            </div>
        </nav>
        <head>
            <div class="background-head">
                <div class="container-head-1" >
                    <div class="content-1"><h2>Fresh</h2></div>
                    <div class="content-2"><h1>Bawang Merah dan Bawang Putih</h1></div>
                    <div class="content-3"><h3>Menyediakan Bawang Merah dan Bawang Putih dengan kualitas terbaik dan harga terjangkau.</h1></div>
                    <div class="button">
                        <button class="button-1">Beli Sekarang</button>
                        <button class="button-2">Register</button>
                    </div>
                </div>
                <div class="container-head-2" >
                    <div class="container-logo">
                        <img class="logo-1" src="{{asset('asset/image/home/keranjang.png')}}" alt="">
                        <img class="logo-2" src="{{asset('asset/image/home/kereta-sorong.png')}}" alt="">
                        <img class="logo-3" src="{{asset('asset/image/home/semangka.png')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="background-head-2">
                <div class="container-type">
                    <div class="container-type-logo"><img class="" src="{{asset('asset/image/home/icon.png')}}" alt=""></div>
                    <div class="container-type-text">
                        <h3>High Quality Product</h3>
                        <p>We provide new and fresh products so that the quality is guaranteed</p>
                    </div>
                </div>
                <div class="container-type">
                    <div class="container-type-logo"><img class="" src="{{asset('asset/image/home/icon2.png')}}" alt=""></div>
                    <div class="container-type-text">
                        <h3>24 Hours Instan Pelivery</h3>
                        <p>We provide 24 hour instant service to the customer's home</p>
                    </div>
                </div>
                <div class="container-type">
                    <div class="container-type-logo"><img class="" src="{{asset('asset/image/home/icon3.png')}}" alt=""></div>
                    <div class="container-type-text">
                        <h3>Trusted Seller</h3>
                        <p>Without fraud, and certainly reach their destination at affordable prices.</p>
                    </div>
                </div>
            </div>
            <div class="background-head-3">
                <form action="#" class="search">
                    <input type="text" placeholder="Search.." name="search" class="search">
                </form>
            </div>
            <div class="background-head-4">
                <h1>Kategori Bawang</h1>
                <div class="background-head-image">
                    <div class="background-head-sub-image">
                        <img class="" src="{{asset('asset/image/home/bawang-merah.png')}}" height="300px" alt="">
                        <div class="background-head-text">
                            <h2><b>Bawang Merah</b></h2>
                            <a class="page" href="#">Lihat semua</a>
                        </div>
                    </div>
                    <div class="background-head-sub-image">
                        <img class="" src="{{asset('asset/image/home/bawang-putih.png')}}" height="300px" alt="">
                        <div class="background-head-text">
                            <h2><b>Bawang Merah</b></h2>
                            <a class="page" href="#">Lihat semua</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background-head-5">
                <h1>Produk Bawang</h1>
                <button class="background-head-5-button">Lihat semua</button>
            </div>
            @foreach ($data as $item)
            <div class="background-head-6">
                <div class="background-head-6-container">
                    <div class="background-head-6-container-label">
                        <h4 style="font-size: 20px">Harga Grosir</h4>
                        <p style="font-size: 16px">Min. pembelian 1000 kg</p>
                    </div>
                    <div class="background-head-6-sub-container">
                        <img src="{{asset('asset/image/Seller/bawang.png')}}" alt="Avatar">
                        <p style="color: #727270; font-size: 14px">Bawang merah - (Grade B)</p>
                        <p><b>{{$item->harga_normal}} /kg</b></p> 
                        <div class="rating">
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                        </div>
                        <h4 style="color: #45484F; font-size: 24px"><b>Bawang Merah Nganjuk</b></h4>
                        <div class="content-9"><button class="tambah-produk">Tambah Produk</button></div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="footer">
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
    </body>
</html>