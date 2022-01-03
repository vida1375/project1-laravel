<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    #text_5{
        background-color:black;
      color: white;
      padding: 14px 20px;
      margin: 48px 0;
      margin-left: 10px;
      border: none;
      cursor: pointer;
      width: 400px;
    }
    ul{
        list-style: none;
    }
    ul li{
  position: relative;
    }
    #hy {
        text-decoration: none;
        background-color:red;
      color: white;
      padding: 14px 20px;
      margin: 48px 0;
      margin-left: 10px;
      width: 100px;
     
    }
</style>
</head>
<body>
    <div class="wrapper" style="background-color:#708090;width:80%;height:500px;margin-left:115px;margin-top:60px">
        <div class="container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif 
                <form action="/logins" role="form" method="POST">
                    @csrf
            <div class="panel-heading">
                <h3 class="panel-title" style="text-align:center;padding-top:10px">Login </h3>
            </div>
            <ul>
                <li style=""> 
                    <div class="form-group">
                        <p><i class="fa fa-users" style="font-size:300px;margin-left:600px"></i></p>
                    </div></li>
            <li style="margin-top:-314px">
            <div class="form-group">
                <label for="user_name" class="col-sm-2 control-label"  ><h3 style="padding-left:15px"> UserName: </h3></label>
                <div class="col-sm-3">
                    <input type="text"name="user_name" id="user_name" style="margin-left:10px;text-align:center;padding-left:15px" placeholder="UserName" class="form-control" value="{{old('user_name')}}">
                    
                   </div>
                   <label for="password"  class="col-sm-2 control-label"  ><h3 style="padding-left:15px;padding-top:10px"> Password: </h3></label>
                <div class="col-sm-3">
                    <input type="password" name="password" id="password" style="margin-left:10px;text-align:center;padding-left:15px" placeholder="Password"class="form-control" value="{{old('password')}}">
                    
                   </div>
                    <div class="col-sm-offset-2">
                        <button type="submit" class="btn btn-mianeh" id="text_5">Login</button>
                    </div>
                    <div class="col-sm-offset-2 ">
                        <a href="http://127.0.0.1:8000/homee" id="hy">cancel</a>
                    </div>
                    <div class="col-sm-offset-2 " style="margin-left:320px;margin-top:-18px">
                        <a href="http://127.0.0.1:8000/signups/create" id="hy">Signup</a>
                    </div>
            </div></li>
         </ul>
        </form>
        </div>
    </div>
</body>
</html>
