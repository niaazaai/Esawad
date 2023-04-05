@extends('layouts.app')
@section('content')
<link href="{{asset('css/videojs.css')}}" rel="stylesheet">
<!-- Fantasy -->
<link href="{{asset('css/fantasy-theme.css')}}" rel="stylesheet">   
<!-- quality selector -->
<link href="{{asset('css/quality-selector.css')}}" rel="preload" as="style">
<!-- Playlist UI  -->
<link href="{{asset('css/videojs-playlist-ui.vertical.css')}}" rel="stylesheet">


<link rel="preload" as="video" href="{{asset('Lessons/SubjectLessons/queen728.mp4')}}">

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
  
<div class="card">
  <div class="card-header d-flex align-items-center justify-content-between">
  <h2>تمام دروس</h2> 
  <div class="text-right">
    <div class="actions">
      <button type="button" class="btn btn-primary btn-icon-label  rounded-0"
      data-toggle="modal" data-target="#lesson_model">
        <span class="btn-inner--icon">
            <i class="fas fa-plus"></i>
        </span>
        <span class="btn-inner--text">علاوه نمودن درس</span>
      </button>
    </div>
  </div>
</div>
</div>

<div class="row">
 <div class="col-sm-12 col-md-3 col-lg-3">
  <div class="vjs-playlist " style = "" ></div>
</div><!-- END OF COL  -->

<div class="col-sm-12 col-md-9 col-lg-9  d-flex justify-content-center" style = "border-right:3px solid black;">
   

  <div style = "border:3px solid black" class = "p-1">
    <video id="video" style = "" 
    controls  width="728p" height="" 
    autoplay data-setup="{}"
    class="video-js  vjs-theme-fantasy  vjs-big-play-centered"
    preload="metadata" >
    </video>
  </div><!-- end of style div  -->


</div><!-- end of col  -->
</div><!-- end of row -->

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

<!-- Scripts  -->
<script src="{{asset('js/videojs.min.js')}}" ></script>
<!-- Quality Selector  -->
<script src="{{asset('js/quality-selector.min.js')}}" ></script>
<!-- Playlist -->
<script src="{{asset('/js/videojs-playlist.min.js')}}" ></script>
<!-- Playlist UI -->
<script src="{{asset('/js/videojs-playlist-ui.js')}}" rel="stylesheet"></script>

<!-- All Scripts  -->


<!-- <script>
let video = document.getElementById('video');
console.log(video);
video.addEventListener('loadedmetadata', function() {
    if (video.buffered.length === 0) return;

    const bufferedSeconds = video.buffered.end(0) - video.buffered.start(0);
    console.log(`${bufferedSeconds} seconds of video are ready to play.`);
  });
  
</script> -->


<script>
  // Later on, after some condition has been met, set video source to the
  // preloaded video URL.
  let video = document.getElementById('video');
  video.src = '{{asset("Lessons/SubjectLessons/queen728.mp4")}}';
  video.play().then(() => {
    // If preloaded video URL was already cached, playback started immediately.
  });
</script>


<script>
const player = videojs('video');

document.querySelector('#previous').addEventListener('click', function() {
  player.playlist.previous();
});

document.querySelector('#forward').addEventListener('click', function() {
  player.playlist.next();
});


player.playlist([{
      name: 'first test video ',
      description: 'laborum.',
      duration: 45,
      sources: [
        { src: '{{asset("Lessons/SubjectLessons/queen360.mp4")}}', type: 'video/mp4' ,label:'360P' },
        { src: '{{asset("Lessons/SubjectLessons/queen480.mp4")}}', type: 'video/mp4' ,label:'480P' },
        { src: '{{asset("Lessons/SubjectLessons/queen728.mp4")}}', type: 'video/mp4' ,label:'720P' , selected:'true'},
      ],
      thumbnail: [
        {
          srcset: '{{asset("Poster/Subject/a.png")}}',
          type: 'image/jpeg',
          media: '(min-width: 400px;)'
        },
        {
          src: '{{asset("Poster/Subject/a.png")}}'
        }
      ]
    },
    {
      name: 'second test video',
      description: 'Explore the depths of our planet\'s oceans. ',
      duration: 45,
      sources: [
        { src: '{{asset("Lessons/SubjectLessons/boss360.mp4")}}', type: 'video/mp4' ,label:'360P' },
        { src: '{{asset("Lessons/SubjectLessons/boss480.mp4")}}', type: 'video/mp4' ,label:'480P' },
        { src: '{{asset("Lessons/SubjectLessons/boss728.mp4")}}', type: 'video/mp4' ,label:'720P' , selected:'true'},
      ],

      // you can use <picture> syntax to display responsive images
      thumbnail: [
        {
          srcset: '{{asset("Poster/Subject/a.png")}}',
          type: 'image/jpeg',
          media: '(min-height: 100px;)'
        },
        {
          src: '{{asset("Poster/Subject/a.png")}}'
        }
      ]
    }
    ]);

player.playlist.autoadvance(0);
player.controlBar.addChild('QualitySelector');
// Initialize the plugin and build the playlist!
player.playlistUi();

</script>




@endsection

 
        