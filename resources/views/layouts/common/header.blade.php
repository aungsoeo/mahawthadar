<!-- ################################################################################################ -->
<div class="nextheader">
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <!-- <li><a href="#">Contact Us</a></li> -->
        <li><a href="register.php">ေက်ာင္း၀င္ခြင့္ပုံစံ</a></li>
        <li><a href="login.php">Admin Login</a></li>
      </ul>
    </nav>
  </div>

<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <div id="logo" class="fl_left">
    <h1>&nbsp;<img src="images/demo/logo.jpeg" width="10px" class="img11">&nbsp;&nbsp;&nbsp;&nbsp;<marquee width="700px" align="centre">ပညာေ၀ျဖာ မေဟာ္သဓာ အမ်ိဳးသားေရးအထက္တန္းေက်ာင္း</marquee>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/demo/logo.jpeg" width="10px" class="img11"></h1>
      <!-- <p>အမ်ိဳးသားေရးအထက္တန္းေက်ာင္း</p> --> 
    </div>
  </header>
</div>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded" id="row2">
    <nav id="mainav" class="clear"> 
      <ul class="clear">
        <li @if (Request::is('/*')) class="active" @endif ><a href="{{ route('user.index') }}">Home</a></li>
        <li @if (Request::is('history*')) class="active" @endif ><a href="{{ route('history.index') }}">History</a></li>
        <li @if (Request::is('news*')) class="active" @endif ><a href="{{ route('news.index') }}">News</a></li>
        
        <li @if (Request::is('donation*')) class="active" @endif ><a href="{{ route('donation.index') }}" class="drop">Donations</a>
          <ul>
            <li style="display:none"><a href="teacher.php">Donate</a></li>
            <li><a href="{{ route('donation.donate') }}">Donate</a></li>
          </ul>
        </li>

        <li @if (Request::is('galllery*')) class="active" @endif ><a href="{{ route('gallery.index') }}">Gallery</a></li>
        <li @if (Request::is('book*')) class="active" @endif ><a href="{{ route('book.index') }}">Booking Form</a></li>
        <li @if (Request::is('staff*')) class="active" @endif ><a href="#" class="drop">Staffs</a>
          <ul>
            <li><a href="{{ route('staff.teacher') }}">Teachers</a></li>
            <li><a href="{{ route('staff.timetable') }}">School Timetables</a></li>
          </ul>
        </li>
        <li @if (Request::is('contact*')) class="active" @endif ><a href="{{ route('contact.index') }}">Contact Us</a></li>
      </ul>
    </nav>
  </div>
</div>
</div>