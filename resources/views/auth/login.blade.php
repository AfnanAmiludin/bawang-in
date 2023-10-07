<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>BawangIn</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{asset('asset/css/auth/login.css')}}">
    </head>
    <body>          
          <div class="row">
            <div class="icon">
              <div class="container">
                <a href="#"><img src="{{asset('asset/image/bawangIn2.png')}}" class="image-logo"  alt=""></a>
                <img src="{{asset('asset/image/login/daun.png')}}" class="image-daun"  alt="">
                <a href="#"><img src="{{asset('asset/image/login/person.png')}}" class="image-person"  alt=""></a>
              </div>
              <div class="icon-2">
                <div class="container">
                  <div class="container">
                    <div class="form">
                      <h2 class="masuk"><b>Masuk</b></h2>
                      <form action="/loginController" method="POST">
                        @csrf
                        <h4 class="mail">Masukkan e-mail</h4>
                        <input type="text" placeholder="Email" class="form-control" name="email">
                        <h4 class="mail">Masukkan kata sandi</h4>
                        <input type="password" placeholder="password" class="form-control" name="password">
                        <h4 class="sandi">Lupa kata sandi?</h4>
                        <button class="button">Masuk</button>
                      </form>
                      <h5 class="akun">Belum punya akun? <a href="#" style="color: rgb(45, 137, 57)">Daftar sekarang</a></h5>
                      <h5 class="atau">Atau</h5>
                      <button class="google">Masuk</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
          
    </body>
</html>