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
        <h2>အလွဴရွင္မ်ားစာရင္း</h2>
          <ul>
            @foreach($posts as $post)
            <li>
              <article>
                <header>
                  <figure class="avatar">
                    <a href="{{ route('donation.show',$post->id) }}">  
                      <img src="{{ asset('upload/posts/' . $post->feature_photo) }}" alt="donor_photo" style="width: 120px; height: 120px;">
                    </a>  
                  </figure>
                  <address>
                  By <a href="#">ASO</a> <br>
                  <a href="{{ route('donation.show',$post->id) }}">{{$post->title}}</a>
                  </address>
                  <time datetime="2045-04-06T08:15+00:00">{{$post->created_at->toFormattedDateString()}}</time>
                </header>
                <div class="comcont">
                  <p>{{$post->short_description}}</p>
                </div>
              </article>
            </li>
            <br>
            <hr>
            @endforeach
          </ul>
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
{{$posts->render()}}
<!-- ################################################################################################ -->
@endsection

@section('scripts')
@parent
<!-- your custom script here -->
@endsection