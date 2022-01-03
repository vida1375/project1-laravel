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
<script async="" src="//www.google-analytics.com/analytics.js"></script>
<script>
  function load_posts_azad(p) {
    $("#aloader").html('<img src="https://vom.ir/ajax-loader.gif" alt="صبر کنید..." style="margin:auto;width:auto;height:auto;" />');
    $("#posts_a_p" + p).load("https://vom.ir/archive?section=1&page=" + p + " .news-item");
    return false;
  }
  function load_posts_ravabet(p) {
    $("#rloader").html('<img src="https://vom.ir/ajax-loader.gif" alt="صبر کنید..." style="margin:auto;width:auto;height:auto;" />');
    $("#posts_r_p" + p).load("https://vom.ir/archive?section=3&page=" + p + " .news-item");
    return false;
  }
</script>
<style>
   #text_5{
    background-color: black;
    color: white;
    padding: 18px 20px;
    margin-top: 57px;
    margin-right: 777px;
    border: none;
    cursor: pointer;
    width: 79px;
    }
   </style>
</head>
<body>
  <div class="wrapper">
    <div class="panel panel-mianeh" id="products">
      <h3  class="panel-title" style="text-align: center;background-color:#708090;height: 50px;padding-top: 13px;margin-bottom: 14px"><strong> مشخصات مشتری </strong> </h3>         
   </div>
    <div class="container">
      <form class="form-horizontal" action="/archives" method="POST">
        @csrf
        <input type="hidden" name="post_id" value="{{ $post->id }}" />
        <input type="hidden" name="post_name" value="{{ $post->product_name }}" />
        <input type="hidden" name="post_price" value="{{ $post->product_price }}" />
        <div class="form-group form-group-sm">
            <label for="archive_name" class="col-sm-2 control-label">نام :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="archive_name" name="archive_name"
                    placeholder="نام ">
            </div>
        </div>
        <div class="form-group form-group-sm">
          <label for="archive_name_kanevadegi" class="col-sm-2 control-label">نام خانوادگی:</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" id="archive_name_kanevadegi" name="archive_name_kanevadegi"
                  placeholder="نام خانوادگی">
          </div>
      </div>
      <div class="form-group form-group-sm">
        <label for="address" class="col-sm-2 control-label">آدرس منزل: </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="address" name="address"
                placeholder="آدرس منزل ">
        </div>
    </div>
    <div class="form-group form-group-sm">
      <label for="phone" class="col-sm-2 control-label">شماره تلفن: </label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="phone" name="phone"
              placeholder="شماره تلفن ">
      </div>
  </div>
  <div class="form-group form-group-sm">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary btn-sm">ارسال</button>
    </div>
</div>
<div>
  <p><strong>تذکر:پرداخت به صورت حضوری انجام میشود.</strong></p>
</div>
      </form>
    </div>
  </div>
</body>
</html>