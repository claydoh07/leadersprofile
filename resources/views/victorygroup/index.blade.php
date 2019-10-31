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

        </div>

        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div>{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url }}</a></div>
    </div>
</div>

<div class="row pt-5">   

  <div class="col-4 pt-4">  
        <a class="btn btn-outline-dark" href="/victorygroup/create">
          <div align="center">
            

            <img src="/svg/addnew.png" class="w-100 h=100 pb-3 pt-2" >
            <p class="">
               <br> <strong>Add new victory group</strong> <br> <br>
            </p>
          </div>
        </a>
    </div>    
    @foreach($user->victorygroups as $victorygroup)


    <div class="col-4 pt-4">  
        <a class="btn btn-outline-dark" href="/vg/{{ $victorygroup->id }}">
          <div align="center">
            

             <?php $GLOBALS['vgid'] = $victorygroup->id ?>
            <img src="/storage/{{ $victorygroup->image }}" class="w-100 h=100 pb-3 pt-2" >
            <p class=""><strong>{{ $victorygroup->name }}</strong>
               <br>{{ $victorygroup->type }} <br>{{ $victorygroup->description }}
            </p>
          </div>
        </a>
    </div>     

    @endforeach  
</div>

</div>
</div>
@endsection
