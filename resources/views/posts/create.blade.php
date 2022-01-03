<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="http://beyamooz.com/try_it_yourself/bootstrap/bootstrap-rtl.min_.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<style>
    #text_11 {
        background-color:black;
      color: white;
      text-align: center;
      margin-top: 31px;
    margin-right: 879px;
      /* border:2px black solid; */
    }
</style>

</head>
<body>
    <div class="wrapper">
        <div class="container">
            <div class="panel panel-mianeh" id="products">
                <div class="panel-heading">
                    <h1 class="panel-title" style=" text-align:center"> ارسال محصول جدید  </h1>
                </div>
                <div class="panel-body">
                    <form action="/posts" class="form-horizontal" role="form" method="POST"enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="product_name" class="col-sm-2 control-label" style="float:right" >نام محصول:</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="product_name"style="float:right;text-align:center" name="product_name"value="{{old('product_name')}}" placeholder="نام محصول "/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-2 control-label" style="float:right">تصویر محصول:</label>
                            <div class="col-sm-3"><input type="file" style="float:right;text-align:center" name="image" id="image" /></div>
                            </div>
                            <div class="form-group">
                                <label for="product_tedad" class="col-sm-2 control-label" style="float:right;padding-bottom:30px" >تعداد محصول:</label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" id="product_tedad"style="float:right;text-align:center" name="product_tedad"value="{{old('product_tedad')}}" placeholder="تعداد محصول "/>
                                </div>
                                <div class="col-sm-12"></div>
                                <div class="form-group">
                                    <label for="product_price" class="col-sm-2 control-label" style="float:right;padding-bottom:30px" >قیمت محصول:</label>
                                    <div class="col-sm-3">
                                        <input type="text" class="form-control" id="product_price"style="float:right;text-align:center;padding-right:20px" name="product_price"value="{{old('product_price')}}" placeholder="قیمت محصول "/>
                                    </div>
                                    <div class="col-sm-12"></div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">نوع محصول :</label>
                                        <div class="col-sm-4"><select name="subject" id="subject" class="form-control">
                                        <option value="زنانه">زنانه</option>
                                        <option value="مردانه">مردانه</option>
                                        <option value="بچگانه">بچگانه</option>
                                        <option value="اکسسوری">اکسسوری</option>
                                        </select></div>
                                        <div class="col-sm-12"></div>
                                         <button type="submit" id="text_11" >ذخیره </button>

                    </form>
                </div>
            </div>
            </div>
</body>
</html>