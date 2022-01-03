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
</head>
<body>
    <<div class="wrapper">
      <div class="title">
          <h3  style="text-align: center;background-color:#708090" >نظرات </h3>
        </div>
        @foreach ( $coments as $coment)
      <div class="container" style="margin-top:50px">
          <div class="box">
              <div class="content" >
                <div class="row news-item" style="border: 1px black solid" >
                  <div class="col-xs-9 col-lg-10">
                  <h3><strong>{{$coment->comment_name}}</strong></h3>
                  </div>
                  <div class="col-xs-3 col-lg-10">
                    <p class="text-justify" ><strong  style="margin-left:0px;margin-top:0px">نظرات شما:{!!$coment->comment_text!!}</strong></p>
                    </div>
                </div>

              </div>
          </div>
      </div>

    </div>
@endforeach
</body>
</html>