@extends('layouts.app')

@section('content')

<div class="container">
  <h2 align="center"></h2>
  <iframe src="https://victory.org.ph" height="567" width="100%" style=" border:none " scrolling="yes" class="pt-4 "></iframe>
  <!--<audio src="/audio/lakad.mp3" autoplay="autoplay" loop="loop"></audio>-->

   
  @foreach($posts as $post)
   <div class="row pt-2 pb-2">
        <div class="col-6 offset-3 ">
           <div class="d-flex align-items-baseline">
                    <div class="pr-3">
                        <a href="/profile/{{ $post->user->id }}"><img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width: 40px"></a>
                    </div>
                    <div>
                        <div class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{$post->user->username}}</span></div>
                    </div>

                </div>
        </div>
    </div>
   <div class="row">
        <div class="col-6 offset-3">
           <a href="/p/{{ $post->id }}"><img src="/storage/{{ $post->image }}" class="w-100"></a>
        </div>
    </div>
    
    @endforeach
    <div class="pt-1" align="center">Visit us at <a href="https://victory.org.ph" target="_blank">victory.org.ph</a></div>



    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
