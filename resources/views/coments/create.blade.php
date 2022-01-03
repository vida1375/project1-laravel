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
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="box"><!--box:begin-->
                <div class="title"><h3>ارسال پیام</h3></div>
                <div class="content">
                <p></p>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif 
                <form class="form-horizontal"  method="POST" action="/coments">
                    @csrf
                    <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label">نام شما</label>
                        <div class="col-sm-10">
                          <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="نام شما">
                        </div>
                      </div>
                      <div class="form-group form-group-sm">
                        <label class="col-sm-2 control-label">متن پیام</label>
                        <div class="col-sm-10">
                          <textarea name="comment_text"id="comment_text" class="form-control" rows="3" style="min-height: 100px;resize: vertical;" placeholder="متن پیام"></textarea>
                        </div>
                      </div>
                      <div class="form-group form-group-sm">
                        <div class="col-sm-offset-2 col-sm-10">
                          <button type="submit" class="btn btn-primary btn-sm" style="margin-right: 533px;margin-top:35px">ارسال</button>
                        </div>
                      </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end --}}
</body>
</html>