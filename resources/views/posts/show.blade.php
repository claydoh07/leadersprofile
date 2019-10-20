@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
        <div class="col-8">
           <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-baseline">
                    <div class="pr-3"><a href="/profile/{{ $post->user->id }}">
                        <img src="{{$post->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width: 40px"
                        href="/profile/{{ $post->user->id }}">
                    </div>
                    <div>
                        <div class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"><span class="text-dark">{{$post->user->username}}</span></div>
                    </div>
                    
                </div>

                <hr>

                <p><span class="font-weight-bold"><a href="/profile/{{ $post->user->id }}"><span class="text-dark font-weight-bold">{{ $post->user->username }}</span></a></span> {{ $post->caption }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
