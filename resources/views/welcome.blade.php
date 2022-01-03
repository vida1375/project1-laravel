<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            ul{
                list-style: none;
                  width:100%;
                 height: 50px;
                 display:inline-block;
                  background: #708090;
	               box-shadow: 0px 0px 9px rgba(0,0,0,0.15);
                   padding-top: 7px;
                    padding-right: 20px;
                   position:fixed;
                   margin-bottom: 1rem;
                  z-index: 1;
            }
            ul li{
                float: right;
  position: relative;
  padding-right: 77px;
  padding-top: 10px;
            }
            ul li a{
                display: block;
    padding-left:50px;
   padding-right: -24px;
    color: white;
  text-decoration: none;
            }
            #text_9 {
                padding-top: 80px;
                border: 0px;
                float: right;
            }
            #text_10 {
    padding-top: 130px;
    padding-left: 86px;
}
            #text_10 img {
                width: 508px;
    height: 293px
            }
        </style>
    </head>
    <body>
        <div class="wrapper" >
            <div class="container">
                <div class="panel-heading">
                    <h3 class="panel-title" style="text-align:center;padding-top:10px">مدیر سایت </h3>
                </div>
                <div class="form-group">
                    <ul>
                        <li>
                            <a href="http://127.0.0.1:8000/home">صفحه اصلی</a>
                        </li>
                        <li>
                            <a href="">محصولات </a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:8000/posts/create">ارسال محصولات </a>
                        </li>
                        <li>
                            <a href="http://127.0.0.1:8000/home">خروج </a>
                        </li>
                    </ul>
                </div>
                <div class="form-group" id="text_9">
                    <h3 style="margin-left:200px">نام:ویدا</h3>
                    <br>
                    <h3 style="margin-left:130px">نام خانوادگی:یوسفی</h3>
                    <br>
                    <h3 style="margin-left:180px">متولد 1375</h3>
                    <br>
                    <h3 style="margin-left:90px">فارغ التحصیل مهندسی نرم افزار</h3>
                    <br>

                </div>
                <div class="form-group" id="text_10">
                    <img src="{{ asset('images/images (2).jpg') }}" alt="پوشاک"  title="پوشاک" />
                </div>
            </div>
            </div>
    </body>
</html>
