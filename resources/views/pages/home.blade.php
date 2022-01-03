@extends('layouts.app')
@section('header_1')
 <!-- Insert to your webpage before the </head> -->
 <script src="sliderengine/jquery.js"></script>
 <script src="sliderengine/amazingslider.js"></script>
 <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">
 <script src="sliderengine/initslider-1.js"></script>
 <!-- End of head section HTML codes -->
@endsection

@section('main')
<div class="slider">
    <!-- Insert to your webpage where you want to display the slider -->
    <div class="amazingslider-wrapper" id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:1337px;margin:40px auto 56px; margin-left:-88px;margin-right:-98px">
        <div class="amazingslider" id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
            <ul class="amazingslider-slides" style="display:none;">
                <li><img src="{{ asset('images/slider-amahi-970721.jpg') }}" alt="پوشاک"  title="پوشاک" />
                </li>
                <li><img src="{{ asset('images/slider-asics-970711.jpg') }}" alt="کفش اسپورت"  title="کفش اسپورت" />
                </li>
                <li><img src="{{ asset('images/slider-dorsa-970723.jpg') }}" alt="کفش"  title="کفش" />
                </li>
                <li><img src="{{ asset('images/slider-topsecret-970507.jpg') }}" alt="لباس"  title="لباس" />
                </li>
                <li><img src="{{ asset('images/IMG_20200319_194459_854.jpg') }}" alt="اکسسوری"  title="اکسسوری" />
                </li>
                <li><img src="{{ asset('images/IMG_20200319_194405_130.jpg') }}" alt="بلوز مردانه"  title="بلوز مردانه" />
                </li>
            </ul>
            <ul class="amazingslider-thumbnails" style="display:none;">
                <li><img src="{{ asset('images/slider-amahi-970721-tn.jpg') }}" alt="پوشاک" title="پوشاک" /></li>
                <li><img src="{{ asset('images/slider-asics-970711-tn.jpg') }}" alt="کفش اسپورت" title="کفش اسپورت" /></li>
                <li><img src="{{ asset('images/slider-dorsa-970723-tn.jpg') }}" alt="کفش" title="کفش" /></li>
                <li><img src="{{ asset('images/slider-topsecret-970507-tn.jpg') }}" alt="لباس" title="لباس" /></li>
                <li><img src="{{ asset('images/IMG_20200319_194459_854-tn.jpg') }}" alt="اکسسوری" title="اکسسوری" /></li>
                <li><img src="{{ asset('images/IMG_20200319_194405_130-tn.jpg') }}" alt="بلوز مردانه" title="بلوز مردانه" /></li>
            </ul>
        </div>
    </div>
    <!-- End of body section HTML codes -->
    
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-push-3">
            <p>ضمانت برگشت وجه<i class="fa fa-american-sign-language-interpreting" style="font-size:24px"></i></p>
           </div>
        <div class="col-sm-3 col-sm-pull-6">
            <p>ضمانت کیفیت<i class='fab fa-dropbox' style='font-size:24px'></i></p>
        </div>
        <div class="col-sm-3">
            <p>ارسال به تمام نقاط ایران<i class='fas fa-shipping-fast' style='font-size:24px'></i></p>
        </div>
    </div>
</div>
 <!-- End of body section HTML codes -->
 
 </div>
 <div class="wrapper" style="margin-top:70px">
    <div class="title" style="width: 100%" >
        <h3  style="text-align: center;background-color:#708090;height:80px;padding-top:10px" >محصولات </h3>
      </div>
      <div class="container">
 <div class="content">
      <div class="row" style="margin-top: 50px">
        <div class="column" style="padding-right:20px;border:1px black solid;margin-right:15px;margin-left:-18px">
          <img src="{{ asset('images/images_5.jpg') }}" alt="Snow" style="width:240px;margin-left:10px">
          <div class="col-xs-9 col-lg-10">
            <p class="text-justify" style="margin-left:50px" ><strong>قیمت:100000تومان</strong></p>
            </div>
        </div>
        <div class="column"  style="padding-right:20px;border:1px black solid;margin-right:15px">
          <img src="{{ asset('images/1744907-1-e1532986725911.jpg') }}" alt="Forest" style="width:230px">
          <div class="col-xs-9 col-lg-10">
            <p class="text-justify" style="margin-left:50px" ><strong>قیمت:60000تومان</strong></p>
            </div>
        </div>
        <div class="column"  style="padding-right:20px;border:1px black solid;margin-right:15px">
          <img src="{{ asset('images/download (7).jpg') }}" alt="Mountains" style="width:230px;padding-top:10px">
          <div class="col-xs-9 col-lg-10">
            <p class="text-justify" style="margin-left:50px;margin-top:50px" ><strong>قیمت:130000تومان</strong></p>
            </div>
        </div>
        <div class="column"  style="padding-right:20px;border:1px black solid">
            <img src="{{ asset('images/سارافون-بچه-گانه.jpg') }}" alt="Mountains" style="width:220px;padding-top:10px">
            <div class="col-xs-9 col-lg-10">
                <p class="text-justify" style="margin-left:50px;margin-top:20px" ><strong>قیمت:80000تومان</strong></p>
                </div>
          </div>
      </div>
      <div class="row" style="margin-top: 50px">
        <div class="column" style="padding-right:20px;border:1px black solid;margin-right:15px;margin-left:-18px">
          <img src="{{ asset('images/download (2).jpg') }}" alt="Snow" style="width:240px;margin-left:10px;padding-top:10px">
          <div class="col-xs-9 col-lg-10">
            <p class="text-justify" style="margin-left:50px" ><strong>قیمت:100000تومان</strong></p>
            </div>
        </div>
        <div class="column"  style="padding-right:20px;border:1px black solid;margin-right:15px">
          <img src="{{ asset('images/72666318-parsnaz-com.jpg') }}" alt="Forest" style="width:230px;padding-top:10px">
          <div class="col-xs-9 col-lg-10">
            <p class="text-justify" style="margin-left:50px;margin-top:20px" ><strong>قیمت:50000تومان</strong></p>
            </div>
        </div>
        <div class="column"  style="padding-right:20px;border:1px black solid;margin-right:15px">
          <img src="{{ asset('images/10-1.jpg') }}" alt="Mountains" style="width:230px;padding-top:10px">
          <div class="col-xs-9 col-lg-10">
            <p class="text-justify" style="margin-left:50px;margin-top:20px" ><strong>قیمت:110000تومان</strong></p>
            </div>
        </div>
        <div class="column"  style="padding-right:20px;border:1px black solid">
            <img src="{{ asset('images/download (5).jpg') }}" alt="Mountains" style="width:220px;padding-left:10px;padding-top:10px">
            <div class="col-xs-9 col-lg-10">
                <p class="text-justify" style="margin-left:50px;margin-top:20px" ><strong>قیمت:150000تومان</strong></p>
                </div>
          </div>
      </div>
      <div class="row" style="margin-top: 50px">
        <div class="column" style="padding-right:20px;border:1px black solid;margin-right:15px;margin-left:-18px">
          <img src="{{ asset('images/download (6).jpg') }}" alt="Snow" style="width:240px;margin-left:10px;padding-top:10px">
          <div class="col-xs-9 col-lg-10">
            <p class="text-justify" style="margin-left:50px;margin-top:110px" ><strong>قیمت:200000تومان</strong></p>
            </div>
        </div>
        <div class="column"  style="padding-right:20px;border:1px black solid;margin-right:15px">
          <img src="{{ asset('images/ست-کیف-و-کفش-کتور-چرم-مدل-کیان.png') }}" alt="Forest" style="width:230px;padding-top:10px">
          <div class="col-xs-9 col-lg-10">
            <p class="text-justify" style="margin-left:50px;margin-top:20px" ><strong>قیمت:250000تومان</strong></p>
            </div>
        </div>
        <div class="column"  style="padding-right:20px;border:1px black solid;margin-right:15px">
          <img src="{{ asset('images/images (1).jpg') }}" alt="Mountains" style="width:230px;padding-top:10px">
          <div class="col-xs-9 col-lg-10">
            <p class="text-justify" style="margin-left:50px;margin-top:136px" ><strong>قیمت:80000تومان</strong></p>
            </div>
        </div>
        <div class="column"  style="padding-right:20px;border:1px black solid">
            <img src="{{ asset('images/images (5).jpg') }}" alt="Mountains" style="width:220px;padding-left:10px;padding-top:10px">
            <div class="col-xs-9 col-lg-10">
                <p class="text-justify" style="margin-left:50px;margin-top:20px" ><strong>قیمت:170000تومان</strong></p>
                </div>
          </div>
      </div>
 </div></div>
      </div>
     <!-- End of body section HTML codes -->
@endsection