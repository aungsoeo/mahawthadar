@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
<!--<link href="{{ asset('layout/styles/layout1.css') }}" rel="stylesheet" type="text/css" media="all">-->
@endsection

@section('content')

<!-- ################################   slider   ###################################### -->
<div class="nextfooter">
  <div class="wrapper" id="image_slider">
    <div id="slider">
      <div id="slide-wrapper" class="rounded clear">
        <figure id="slide-1"><img src="images/demo/slider/1.jpeg" alt="" name="Banner"></figure>
      </div>
    </div>
  </div>
  <!-- ################################################################################################ -->

  <div class="wrapper row3">
    <div class="rounded">
      <main class="container clear"> 
        <!-- main body --> 
        <div class="group btmspace-30"> 
          <!-- Left Column -->
          <div class="one_quarter first"> 
            <ul class="nospace">
              <li class="btmspace-15"><em class="heading">တည္ေထာင္အုပ္ခ်ဳပ္သူမ်ား</em><a href="history.php"><p>ဥကၠဌ >></p><br><img class="borderedbox" src="images/demo/8.jpeg" alt=""></a></li>
              <li class="btmspace-15"><a href="history.php"><p>နာယက >></p><br><img class="borderedbox" src="images/demo/6.jpeg" alt=""></a></li>
              <li class="btmspace-15"><a href="history.php"><p>ေက်ာင္းအုပ္ၾကီး >></p><br> <img class="borderedbox" src="images/demo/9.jpeg" alt=""></a></li>
              <!-- <li><a href="#"><em class="heading">Alumni</em> <img class="borderedbox" src="images/demo/220x95.gif" alt=""></a></li> -->
            </ul>
          </div>
          <!-- / Left Column --> 
          <!-- Middle Column -->
          <div class="one_half"> 
          <!-- <h2>Latest News &amp; Events</h2>
          <ul class="nospace listing">
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">Sentumquisque morbi dui congue.</a></p>
              <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a></p>
            </li>
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">Sentumquisque morbi dui congue.</a></p>
              <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files.</p>
            </li>
            <li class="clear">
              <div class="imgl borderedbox"><img src="images/demo/120x120.gif" alt=""></div>
              <p class="nospace btmspace-15"><a href="#">Sentumquisque morbi dui congue.</a></p>
              <p>For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>. Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>
            </li>
          </ul>
          <p class="right"><a href="#">Click here to view all of the latest news and events &raquo;</a></p> -->
          <h2>မေဟာ္သဓာ ကိုယ္ပုိင္အထက္တန္းေက်ာင္း</h2>
          <div class="imgholder"><img src="images/demo/10.jpeg" alt="" /></div><br>
          <p><center>"ေပ်ာ္ေအာင္လည္းေန ေတာ္ေအာင္လည္းၾကိဳးစား မေဟာ္သဓာေက်ာင္းသား"</center></p>
          <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
          <br>
          <h2 class="title">၈ - ၉ - ၁၀ သင္တန္းမ်ားလက္ခံသင္ၾကားေပးပါသည္</h2>
          <p>Etiam euismod porttitor diam, eget tristique lacus eleifend tincidunt. In hac habitasse platea dictumst.</p>
          <ul>
            <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
            <li>Donec at nunc nec lectus viverra pretium sit amet a orci.</li>
            <li>Praesent ac felis non magna accumsan accumsan.</li>
            <li>Vivamus non est nunc, non pulvinar libero.</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum et sapien id quam sodales tincidunt. Cras facilisis mi eu nibh ultricies sed malesuada metus varius.</p>
          <!-- ################################################################################################ --> 
        </div>
        <!-- / Middle Column --> 
        <!-- Right Column -->
        <div class="one_quarter sidebar"> 
          <!-- ################################################################################################ -->
          <!-- <div class="sdb_holder">
            <h2 class="title">Lorem ipsum dolor</h2>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
        <ul>
          <li><a href="#">Lorem ipsum dolor sit</a></li>
          <li>Etiam vel sapien et</li>
          <li><a href="#">Etiam vel sapien et</a></li>
        </ul>
        <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </div> -->
      <h6>Campus Life</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="news.php">News Activity</a></li>
          <li><a href="news.php">Student Life</a></li>
          <li><a href="news.php">Sports</a></li>
          <li><a href="news.php">Health Care</a></li>
          <li><a href="news.php">Food</a></li>
        </ul>
      </nav>
      <div class="sdb_holder">
        <h6>Latest News &amp; Events</h6>
        <ul class="nospace quickinfo">
          <li class="clear"><a href="news.php"><img src="images/demo/80x80.gif" alt=""> Make An Application</a></li>
          <li class="clear"><a href="news.php"><img src="images/demo/80x80.gif" alt=""> Order A Prospectus</a></li>
        </ul>
      </div>
      <!-- ################################################################################################ --> 
    </div>
    <!-- / Right Column --> 
  </div>
  
  <div class="clear"></div>
</main>
</div>
</div>

@endsection

@section('scripts')
@parent
<script>
  ImageArray = new Array("{{ asset('images/demo/slider/1.jpeg') }}","{{ asset('images/demo/slider/2.jpeg') }}","{{ asset('images/demo/slider/3.jpeg') }}","{{ asset('images/demo/slider/4.jpeg') }}","{{ asset('images/demo/slider/5.jpeg') }}");
</script>
<script src="{{ asset('layout/scripts/slider.js') }}"></script> 
@endsection