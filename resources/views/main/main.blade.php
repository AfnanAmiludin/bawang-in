<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BawangIn</title>
        <link rel="stylesheet" href="{{asset('asset/css/main.css')}}">
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
                <a class="icon-a" href="#"><img src="{{asset('asset/icon/shop.png')}}" alt=""></a>
                <a class="icon-b" href="#"><img src="{{asset('asset/icon/notif.png')}}" alt=""></a>
                <a class="icon-c" href="#"><img src="{{asset('asset/icon/person.png')}}" alt=""></a>
            </div>
        </nav>
        <head>
            <div class="container">
                @yield('addProduct')
            
                
            </div>
            
        </head>
        <body>
            <footer>
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
            </footer>
        </body>
    </body>
</html>