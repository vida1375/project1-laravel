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
          <div class="form-group" style="margin-left: 537px;margin-top:50px">
            <form action="/search"  method="GET">
            <div class="row">
                <button type="submit" style="margin-right:-15px"><i class='fas fa-search' style='font-size:30px'></i></button>
                  <div class="col-sm-3">
                      <input type="text"class="form-control"name="search" placeholder="search" style="text-align:center;">
                      </div>
            </div>
        </form>
        </div> 
        <div class="panel-body" style="margin-top: 50px">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>  نام محصول</th>
                        <th>  تعداد</th>
                        <th>  قیمت</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                    <tr>
                    <td>{{$post->product_name}}</td>
                    <td>{{$post->product_tedad}}</td>
                    <td>{{$post->product_price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>