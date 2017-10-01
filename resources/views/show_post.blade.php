@extends('layouts.main')

@section('styles')
@parent
<!-- your custom css here -->
@endsection

@section('content')
<!-- ################################################################################################ -->
<div class="nextfooter">
   <div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 

     <div id="content" class="three_quarter first"> 
      <div id="comments">
          <h2>{{$post->title}}</h2>
          {{$post->short_description}}
        <div class="clear"></div>
        <br>
        <div class="imgl borderedbox">
            <img src="{{ asset('upload/posts/' . $post->feature_photo) }}" alt="" style="width: 220px; height: 220px;">
        </div>
        <div class="clear"></div>    
        <br>
        <br>
        <p>
            {{$post->detail_description}}
        </p>
        <div class="imgl borderedbox">
            <img src="{{ asset('upload/posts/' . $post->detail_photo) }}" alt="" style="width: 220px; height: 220px;">
        </div>

        <br>


      </div>
    </div>  
  <!-- ################################################################################################ -->  
    <div class="one_quarter sidebar"> 
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
    </div>
      <div class="clear"></div>
    </main>
  </div>
</div> 
<!-- ################################################################################################ -->
@endsection

@section('scripts')
@parent
<!-- your custom script here -->
@endsection