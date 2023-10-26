<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BawangIn</title>
        <link rel="stylesheet" href="{{asset('asset/css/pembeli/produk.css')}}">
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
                <li><a class="page" href="#">Pesanan Saya</a></li>
            </ul>
            <div class="icon" style="">
                <a class="icon-sub" href="/logout"><img src="{{asset('asset/icon/shop.png')}}" alt=""></a>
                <a class="icon-sub" href="/logout"><img src="{{asset('asset/icon/notif.png')}}" alt=""></a>
                <a class="icon-sub" href="/logout"><img src="{{asset('asset/icon/person.png')}}" alt=""></a>
            </div>
        </nav>
        <head>
            <div class="container">
                <form action="#" class="search">
                    <input type="text" placeholder="Search.." name="search" class="search">
                </form>
            </div>
            <div class="background-head-1">
                <h1>Produk Bawang</h1>
            </div>
            <div class="background-head-2">
                <div class="backgroun-1">
                    <div class="filter">
                        <h4><b>Filter</b></h4>
                    </div>
                    <hr/>
                    <div class="category">
                        <h4><b>Harga</b></h4>
                        <div class="sub-category">
                            <div class="detail-category">
                                <label for="vehicle1"> Termurah</label>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="detail-category">
                                <label for="vehicle1"> Termahal</label>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                        </div>
                        <h4><b>Grade</b></h4>
                        <div class="sub-category">
                            <div class="detail-category">
                                <label for="vehicle1"> Grade A</label>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="detail-category">
                                <label for="vehicle1"> Grade B</label>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                            <div class="detail-category">
                                <label for="vehicle1"> Grade C</label>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            </div>
                        </div>
                    </div>
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
            </div>
            <div class="background-head-3">
                <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
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
        
    </body>
</html>