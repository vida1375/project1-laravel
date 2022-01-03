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
    #rty {
        width: 450px;
        height: 450px;
    }
    #rty img{
        width: 400px;
        height: 400px;
    }
    #min {
        margin-right: 449px;
    margin-top: -277px;
    }
    #minr {
        margin-right: 449px;
    margin-top: -210px;
    width: 30px;
    }
    #mino {
        text-decoration: none;
      color: black;
      margin-right: 449px;
    margin-top: 0px;
      width: 60px;
    }
    #mint {
        border: 1px black solid;
        margin-top: 38px;
    }
    #text_5{
        background-color:black;
      color: white;
      padding: 18px 20px;
      margin-top: -241px;
      margin-right: 452px;
      border: none;
      cursor: pointer;
      width: 400px;
    }
</style>
</head>
<body>
    <div class="wrapper">
        <div class="title">
            <h3  style="text-align: center;background-color:#708090" >مردانه </h3>
          </div>
        <div class="container">
            <div class="box">
                <div class="content" >
                    @foreach ($posts as $post)
                    <div class="row news-item" id="mint">
                        <div class="col-xs-9 col-lg-10">
                        <h3><a href="http://127.0.0.1:8000/posts/{{$post->id}}" id="mino" target="_blank"><strong>نام محصول:{{$post->product_name}}</strong></a></h3>
                        </div>
                      <div class="col-xs-4 col-lg-4" id="rty"><img alt="" src="{{ $post->image_url() }}" class="img-thumbnail img-responsive"></div>
                      <div class="col-xs-9 col-lg-10">
                      <p class="text-justify" id="min"><strong>قیمت:{!!$post->product_price!!}تومان</strong></p>
                      </div>
                      <div class="col-xs-9 col-lg-10">
                        <p class="text-justify" id="minr"><strong>نوع:{!!$post->subject!!}</strong></p>
                        </div>
                    </div>
                    <div class="col-sm-offset-2">
                      <button type="submit" class="btn btn-mianeh" id="text_5"><a href="http://127.0.0.1:8000/posts/{{$post->id}} " style="display: block;color: white;text-decoration: none" target="_blank"> افزودن به سبد خرید</a></button>
                  </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</body>
</html>