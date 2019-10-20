@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
        <div class="col-4">
           <img src="/storage/{{ $victorygroup->image }}" class="w-100">
        </div>
        <div class="col-8">
            <div>
                <div class="d-flex align-items-baseline">
                    <div class="pr-3"><a href="/profile/{{ $victorygroup->user->id }}">
                        <img src="{{$victorygroup->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width: 40px"
                        href="/profile/{{ $victorygroup->user->id }}">
                    </div>
                    <div class="pr-3">
                        <div class="font-weight-bold"><a href="/profile/{{ $victorygroup->user->id }}"><span class="text-dark">{{ $victorygroup->user->username }}</span></div>

                    </div>
                    <div > <a class="dropdown-item" href="/members/create/{{ $victorygroup->id }}">+&nbsp&nbspAdd New Member</a></div>
                    
                </div>

                <hr>
            </div>
            <div>
                {{ $victorygroup->name }} {{ $victorygroup->type }} {{ $victorygroup->description }} 
            </div>
            <div>
                @foreach($members as $row)
                <tr>
                    {{ $row['name'] }}
                    {{ $row['contactNumber'] }}
                    {{ $row['one2One'] }}
                    {{ $row['victoryGroup'] }}
                    {{ $row['victoryWeekend'] }}
                    {{ $row['discipleshipClass'] }}
                    {{ $row['leadership113'] }}
                </tr><br>
                @endforeach
            
            </div>
          
        </div>
    </div>
</div>
@endsection
