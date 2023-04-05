@extends('layouts.chat.app')

@section('content')

<div class="layout">
<!-- Navigation -->
<div class="navigation navbar navbar-light justify-content-center py-xl-7">

    <!-- Brand -->
    <a href="chat-2.html#" class="d-none d-xl-block mb-6">
        <img src="{{asset('chat_assets/images/brand.svg')}}" class="mx-auto fill-primary" data-inject-svg="" alt="" style="height: 46px;">
    </a>

    <!-- Menu -->
    <ul class="nav navbar-nav flex-row flex-xl-column flex-grow-1 justify-content-between justify-content-xl-center py-3 py-lg-0" role="tablist">

        <!-- Invisible item to center nav vertically -->
        <li class="nav-item d-none d-xl-block invisible flex-xl-grow-1">
            <a class="nav-link position-relative p-0 py-xl-3" href="chat-2.html#" title="">
                <i class="icon-lg fe-x"></i>
            </a>
        </li>

        <!-- Create group -->
        <li class="nav-item">
            <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="chat-2.html#tab-content-create-chat" title="Create chat" role="tab">
                <i class="icon-lg fe-edit"></i>
            </a>
        </li>

        <!-- Friend -->
        <li class="nav-item mt-xl-9">
            <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="chat-2.html#tab-content-friends" title="Friends" role="tab">
                <i class="icon-lg fe-users"></i>
            </a>
        </li>

        <!-- Chats -->
        <li class="nav-item mt-xl-9">
            <a class="nav-link position-relative p-0 py-xl-3 active" data-toggle="tab" href="chat-2.html#tab-content-dialogs" title="Chats" role="tab">
                <i class="icon-lg fe-message-square"></i>
                <div class="badge badge-dot badge-primary badge-bottom-center"></div>
            </a>
        </li>

        <!-- Profile -->
        <li class="nav-item mt-xl-9">
            <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="chat-2.html#tab-content-user" title="User" role="tab">
                <i class="icon-lg fe-user"></i>
            </a>
        </li>

        <!-- Demo only: Documentation -->
        <li class="nav-item mt-xl-9 d-none d-xl-block flex-xl-grow-1">
            <a class="nav-link position-relative p-0 py-xl-3" data-toggle="tab" href="chat-2.html#tab-content-demos" title="Demos" role="tab">
                <i class="icon-lg fe-layers"></i>
            </a>
        </li>

        <!-- Settings -->
        <li class="nav-item mt-xl-9">
            <a class="nav-link position-relative p-0 py-xl-3" href="settings.html" title="Settings">
                <i class="icon-lg fe-settings"></i>
            </a>
        </li>

    </ul>
    <!-- Menu -->

</div>
<!-- Navigation -->

<!-- Sidebar -->
<div class="sidebar">
<div class="tab-content h-100" role="tablist">

<div class="tab-pane fade h-100 show active" id="tab-content-dialogs" role="tabpanel">
    <div class="d-flex flex-column h-100">
        <div class="hide-scrollbar">
            <div class="container-fluid py-6">
            <!-- Title -->
            <h2 class="font-bold mb-6">Chats</h2>
            <!-- Title -->
            <!-- Search -->
            <form class="mb-6">
                <div class="input-group">
                    <input type="text" class="form-control form-control-lg" placeholder="Search for messages or users..." aria-label="Search for messages or users...">
                    <div class="input-group-append">
                        <button class="btn btn-lg btn-ico btn-secondary btn-minimal" type="submit">
                            <i class="fe-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <!-- Search -->
            <!-- Favourites -->
            <div class="text-center hide-scrollbar d-flex my-7" data-horizontal-scroll="">
                <a href="chat-2.html#" class="d-block text-reset mr-7 mr-lg-6">
                    <div class="avatar avatar-sm avatar-online mb-3">
                        <img class="avatar-img" src="{{asset('chat_assets/images/avatars/2.jpg')}}" alt="Image Description">
                    </div>
                    <div class="small">William</div>
                </a>

                <a href="chat-2.html#" class="d-block text-reset mr-7 mr-lg-6">
                    <div class="avatar avatar-sm avatar-online mb-3">
                        <img class="avatar-img" src="{{asset('chat_assets/images/avatars/3.jpg')}}" alt="Image Description">
                    </div>
                    <div class="small">Simon</div>
                </a>
            </div>
            <!-- Favourites -->

            <!-- Chats -->
            <nav class="nav d-block list-discussions-js mb-n6">
            @if($Users->count() > 0 )
            @foreach($Users as $user)
                <a class="text-reset nav-link p-0 mb-6" href="{{route('chat.conversation' , $user->id)}}">
                    <div class="card card-active-listener">
                        <div class="card-body">
                            <div class="media">
                                <div class="avatar mr-5 ">
                                    <span class="avatar-img h3 text-uppercase">{!!  makeImageFromName($user->name)!!}</span>
                                </div>
                                <div class="media-body overflow-hidden">
                                    <div class="d-flex align-items-center mb-1">
                                        <h6 class="text-truncate mb-0 mr-auto">{{$user->name}}</h6>
                                        <p class="small text-muted text-nowrap ml-4">10:42 am</p>
                                    </div>
                                    <div class="text-truncate">Anna Bridges: Hey, Maher! How are you? The weather is great isn't it?</div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="badge badge-circle badge-primary badge-border-light badge-top-right">
                            <span>3</span>
                        </div> -->
                    </div>
                </a>
                @endforeach
                @endif
                
                </nav>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<!-- Sidebar -->
<div class="main" data-mobile-height="">
    <!-- Default Page -->
    <div class="chat flex-column justify-content-center text-center">
        <div class="container-xxl">
            <div class="avatar avatar-lg mb-5">
            <span class="avatar-img h3 text-uppercase">{!!  makeImageFromName(Auth::user()->name)!!}</span>
            </div>
            <h6>{{ Auth::user()->name}}</h6>
            <p>Please select a chat to start messaging.</p>
        </div>
    </div>
    <!-- Default Page -->

</div>

@endsection

@push('scripts')
<!-- Scripts -->
    <script src="{{asset('chat_assets/js/libs/jquery.min.js')}}"></script>
    <script src="{{asset('chat_assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('chat_assets/js/plugins/plugins.bundle.js')}}"></script>
    <!-- <script src="{{asset('chat_assets/js/template.js')}}"></script> -->
<!-- Scripts -->


<script>

  $(function(){
    let user_id  = "{{auth()->user()->id}}";
    let user_name = "{{auth()->user()->name}}";
    let ip = '127.0.0.1';
    let port = '8028';
    let socket = io(ip + ':' + port);

    socket.on('connect' , function(){
      socket.emit('user_connected' , user_id , user_name  );
    });
    socket.on('updateUserStatus' , (data) => {
        $.each(data, function(key , val){
        if(val !== null && val !== 0){
            // let e = document.getElementById("user-icon-" + key);
            $("#user-icon-" + key).addClass('avatar-online');
            $("#cs-text-" + key).text('Online');
            $("#cs-btn-" + key).addClass('avatar-online');
        }
        });
    });
  });


</script>

@endpush