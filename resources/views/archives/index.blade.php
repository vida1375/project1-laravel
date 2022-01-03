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
        <div class="panel-body" style="margin-top: 50px">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>  نام محصول</th>
                        <th>  نام</th>
                        <th>  نام خانوادگی</th>
                        <th>  آدرس </th>
                        <th>  شماره </th>
                        <th>  قیمت </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>{{$text->post_name}}</td>
                    <td>{{$text->archive_name}}</td>
                    <td>{{$text->archive_name_kanevadegi}}</td>
                    <td>{{$text->address}}</td>
                    <td>{{$text->phone}}</td>
                    <td>{{$text->post_price}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div>
            <p><strong style="float:right;margin-right:20px"><i class="fa fa-check" style="font-size:36px;color:#708090"></i>.خرید شما با موفقیت ثبت شد</strong></p>
          </div>
    </body>
</html>