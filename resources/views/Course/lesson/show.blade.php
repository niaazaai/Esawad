@extends('layouts.class.player')
@section('content')

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif



<div class="card">
  <div class="card-header d-flex align-items-center justify-content-between">
  <h2 id = "les_title"> </h2> 
  <div class="text-right">
    <div class="actions">
      <a type="button" href = "/Course/show/{{$course_id}}" class="btn btn-primary btn-icon-label  rounded-0" >
        <span class="btn-inner--text">برگشت</span>
      </a>
    </div>
  </div>
</div>
</div>

<div class="row">

<div class="col-sm-12 col-md-3 col-lg-3">
  <div class="vjs-playlist " style = "" ></div>
</div><!-- END OF COL  -->

<div class="col-sm-12 col-md-9 col-lg-9" style = "border-right:3px solid #6e00ff; ">
  <div class="row" > 
    <div class="col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center " >
      <div style = "border:3px solid #6e00ff; padding:3px;" >
      <video class="video-js  vjs-theme-fantasy  vjs-big-play-centered p-1" 
        id="video"  controls  width="728p" height="" 
        preload="metadata"  data-setup='{}'  >
      </video>
      </div><!-- end of style div  muted autoplay -->
    </div><!-- end of col  -->
    <div class="col-sm-12 col-md-12 col-lg-12" >
  <div class="card mt-3">
    <div class="card-header d-flex align-items-center justify-content-between">
    <button type="button" id = "forward" class="for btn btn-primary btn-icon-label  rounded-0">
          <span class="btn-inner--text">  درس بعدی</span>
          <span class="btn-inner--icon">
              <i class="fas fa-angle-right"></i>
          </span>
    </button>
    <div class="text-right">
      <div class="actions">
        <button type="button" id = "previous" class=" pre btn btn-primary btn-icon-label rounded-0">
          <span class="btn-inner--icon">
              <i class="fas fa-angle-left"></i>
          </span>
          <span class="btn-inner--text">درس قبلی</span>
        </button>
      </div><!-- end of action -->
    </div><!-- end of text-right -->
    </div><!-- end of card-header -->
  </div> <!-- end of  card-->
    </div><!-- end of col  -->
  </div><!-- end of row -->
</div><!-- end of col  -->
</div><!-- end of row -->


<!-- Scripts  -->
<script src="{{asset('js/videojs.min.js')}}" ></script>
<script src="{{asset('js/quality-selector.min.js')}}" ></script><!-- Quality Selector  -->
<script src="{{asset('/js/videojs-playlist.min.js')}}" ></script><!-- Playlist -->
<script>
  let video = document.getElementById('video');
  video.addEventListener('loadedmetadata', function() {
    if (video.buffered.length === 0) return;
    const bufferedSeconds = video.buffered.end(0) - video.buffered.start(0);
    console.log(`${bufferedSeconds} seconds of video are ready to play.`);
  });
</script>

<?php //  print_r($lesson) ; ?>
<!-- {{asset("Lessons/SubjectLessons/queen728.mp4")}} -->
<script src="{{asset('/js/videojs-playlist-ui.js')}}"  ></script><!-- Playlist UI -->

<script>

const player = videojs('video');

let list =  <?php echo $lesson; ?>
// const object = { a: 1, b: 2, c: 3 };
var lessons_list = [];
for (const key in list) {
  // console.log(`${key}: ${list[key].title}`);
  lessons_list.push({
        name: list[key].title,
        duration: 120 ,
        sources: [
        { src: `{{asset('/Lessons/CourseLessons/${list[key]._360p}')}}` , type:'video/mp4' ,label:'360P' , selected:'true'},
        { src: `{{asset('/Lessons/CourseLessons/${list[key]._480p}')}}`, type: 'video/mp4' ,label:'480P' },
        { src: `{{asset('/Lessons/CourseLessons/${list[key]._720p}')}}`, type: 'video/mp4' , label:'720P' },
         ], 
        thumbnail: [{
          srcset: list[key].video_poster,
          type: 'image/jpeg',
          media: '(min-width: 200px;)'
        },
        {src: list[key].video_poster}
        ]
      });// end of push array 
  
}// end of for loop 

player.playlist(lessons_list);

let les_title = document.getElementById('les_title');
les_title.innerHTML = lessons_list[player.playlist.currentItem()].name;

document.querySelector('#previous').addEventListener('click', function() {
  player.playlist.previous();
  les_title.innerHTML = lessons_list[player.playlist.currentItem()].name; 
});
document.querySelector('#forward').addEventListener('click', function() {
  player.playlist.next();
  les_title.innerHTML = lessons_list[player.playlist.currentItem()].name; 
});


player.playlist.autoadvance(0);
player.controlBar.addChild('QualitySelector');
// Initialize the plugin and build the playlist!
player.playlistUi();
</script>


@endsection