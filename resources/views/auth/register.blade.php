<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>BawangIn</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{asset('asset/css/auth/register.css')}}">
    </head>
    <body>          
          <div class="row">
            <div class="icon">
              <div class="container">
                <a href="#"><img src="{{asset('asset/image/bawangIn2.png')}}" class="image-logo"  alt=""></a>
                <a href="#"><img src="{{asset('asset/image/login/daun.png')}}" class="image-daun"  alt=""></a>
                <a href="#"><img src="{{asset('asset/image/login/person.png')}}" class="image-person"  alt=""></a>
              </div>
              <div class="icon-2">
                <div class="container">
                  <div class="container">
                    <div class="form">
                      <h2 class="masuk"><b>Daftar</b></h2>
                      <form action="/registrasi" method="POST" onsubmit="return myFunction()">
                        @csrf
                        <h4 class="mail">Masukkan e-mail</h4>
                        <input type="text" placeholder="Email" class="form-control" name="email">
                        <h4 class="mail">Masukkan kata sandi</h4>
                        <input id="pass1" type="password" placeholder="password" class="form-control" name="password">
                        <h4 class="mail">Masukkan konfirmasi kata sandi</h4>
                        <input id="pass2" type="password" placeholder="password" class="form-control">
                        <h4 class="mail">Login sebagai: </h4>
                        <div class="radio">
                          <div>
                            <input type="radio" id="huey" name="role" value="penjual" checked />
                            <label for="huey">Sebagai penjual</label>
                          </div>
                          <div>
                            <input type="radio" id="huey" name="role" value="pembeli" checked />
                            <label for="huey">Sebagai pembeli</label>
                          </div>
                        </div>
                        {{-- <h4 class="sandi">Lupa kata sandi?</h4> --}}
                        <button class="button">Daftar</button>
                      </form>
                      <h5 class="akun">Sudah punya akun? <a href="/" style="color: rgb(45, 137, 57)">Masuk</a></h5>
                      <h5 class="atau">Atau</h5>
                      <button class="google">Masuk</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
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