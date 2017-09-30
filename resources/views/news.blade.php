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
     <h2>Latest News &amp; Events</h2>
          <ul class="nospace listing">
            @foreach($posts as $post)
            <li class="clear">
              <div class="imgl borderedbox">
                <a href="{{ route('news.show',$post->id) }}">
                  <img src="{{ asset('upload/posts/' . $post->feature_photo) }}" alt="" style="width: 120px; height: 120px;">
                </a>
              </div>
              <p class="nospace btmspace-15"><a href="{{ route('news.show',$post->id) }}">{{$post->title}}</a><br>
               <small>Post on:&nbsp; {{$post->created_at->toFormattedDateString()}}</small>
               </p>
              <p>{{$post->short_description}}</p>
            </li>
            @endforeach
          </ul>    
            
    </div>  
    {{$posts->render()}}
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

      <!-- ################################################################################################ -->
      <!-- <nav class="pagination">
        <ul>
            
            

        </ul>
      </nav> -->
      <!-- ################################################################################################ --> 
      <!-- / main body -->
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