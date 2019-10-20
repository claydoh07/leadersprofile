@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4 p-5"> 
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-8 p-5">
            <div>
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-3">

                        <div class="h4">{{ $user->username }}</div> 
                        
                    </div>
                </div>
                @can('update', $user->profile)


                <div class="btn-group dropright" >
                    <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
                     Manage Victory Group
                 </button>
                 <div class="dropdown-menu">

                  <a class="dropdown-item" href="/victorygroup/create">Add New Victory Group</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                  <a class="dropdown-item" href="/profile/{{ $user->id }}/show">Show Profile</a>
                  <div class="dropdown-divider"></div>

                </div>
                </div>
                @endcan

          <div class="d-flex pt-4">                
            <div class="pr-5"><strong>{{ $postCount }}</strong> posts </div>
            <div class="pr-5"><strong>{{ $followerCount }}</strong> followers</div>
            <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>  

        </div>

        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
</div>

<div class="row pt-5">   
    @foreach($user->victorygroups as $victorygroup)


    <div class="col-4 pt-4">  
        <a href="/vg/{{ $victorygroup->id }}">
          <div align="center">
            <label>{{ $victorygroup->name }}</label>

             <?php $GLOBALS['vgid'] = $victorygroup->id ?>
            <img src="/storage/{{ $victorygroup->image }}" class="w-100 h=100">
          </div>
        </a>
    </div>     

    @endforeach  
</div>

</div>
</div>
@endsection
