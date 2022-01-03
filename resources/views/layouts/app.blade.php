<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="%PUBLIC_URL%/favicon.ico">
         
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        @yield('header_1')
    </head>
    <body>
        <nav class="nav" >
              <ul >
                  <li><i class='fas fa-female' style='font-size:24px'></i></li>
                <li> <a href="http://127.0.0.1:8000/logins/create">ورود/عضویت</a></li>
                <li><i class='fas fa-search' style='font-size:24px'></i></li>
                <li><a href="http://127.0.0.1:8000/search">جستجو </a></li>  
              </ul>

        </nav>
          <ul id="main-menu">
                        <li > <a href="" > <i class='fas fa-align-justify'></i></a>
                            <ul class="sub-menu">
                                  <li><a href="http://127.0.0.1:8000/product/woman">زنانه</a></li>
                                    <li><a href="http://127.0.0.1:8000/product/man">مردانه</a><li>
                                    <li><a href="http://127.0.0.1:8000/product/child">بچگانه</a></li>
                                    <li><a href="http://127.0.0.1:8000/product/accessory">اکسسوری</a></li>
                                    {{-- <li><a href="#about">ارسال مطلب</a></li> --}}
                           </ul>
                         </li>
         </ul>
        {{-- <div class="form-group" id="input_1">
            <form action=""  method="GET">
            <div class="row">
                <button type="submit" style="margin-right:-15px"><i class='fas fa-search' style='font-size:30px'></i></button>
                  <div class="col-sm-3">
                      <input type="text"class="form-control"name="category" placeholder="search" style="text-align:center;">
                      </div>
            </div>
        </form>
        </div>  --}}
        <div class="container" style="margin-top: 100px">
            @yield('main')
        </div>

        
            <div class="wrapper" style="background-color: #708090;width:100%;height:200px;margin-top:30px">
                <div class="container">
                    <div class="content">
                <div class="row">
                    <div class="column">
                        <div class="row" style="margin-top: 77px">
                
                        <p><i class='fab fa-instagram' style='font-size:36px;margin-right:20px'></i></p>
                        <p><i class='fas fa-phone-alt' style='font-size:36px;margin-right:20px'></i></p>
                        <p><i class='far fa-paper-plane' style='font-size:36px'></i></p>
                    </div>
                </div>
                <div class="column">
                    <ul style="list-style: none;margin-left:900px">
                        <li style=" position: relative;margin-top:25px"><a href="http://127.0.0.1:8000/coments/create" style=" color: white;text-decoration: none">ارسال نظرات</a></li>
                        <li style=" position: relative;margin-top:20px;margin-left:18px"><a href="http://127.0.0.1:8000/product"style=" color: white;text-decoration: none"> محصولات</a></li>
                        <li style=" position: relative;margin-top:20px;margin-left:30px"><a href="http://127.0.0.1:8000/danestani"style=" color: white;text-decoration: none">دانستنی </a></li>
                    </ul>
                </div>
            </div>
        </div>
            </div>

    </body>
</html>