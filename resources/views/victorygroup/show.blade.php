@extends('layouts.app')

@section('content')
<div class="container">
 <div class="row">
    <div class="col-4">
     <img src="/storage/{{ $victorygroup->image }}" class="w-100">
 </div>
 <div class="col-8">
    <div>
        <div class="d-flex align-items-baseline justify-content-between">
            <div class="d-flex align-items-baseline justify-content-between">
                <div class="pr-3">
                    <a href="/profile/{{ $victorygroup->user->id }}">
                    <img src="{{$victorygroup->user->profile->profileImage()}}" class="rounded-circle w-100" style="max-width: 40px"
                    href="/profile/{{ $victorygroup->user->id }}">
                </div>
                <div class="pr-3">
                    <div class="font-weight-bold"><span class="text-dark">{{ $victorygroup->user->username }}</span>
                    </div>
                </div>
            </a>


            
          

            </div>
            <div>
                <strong>{{ $victorygroup->name }}</strong> {{ $victorygroup->type }} {{ $victorygroup->description }} 
            </div>
                <div> <a class="dropdown-item" href="/members/create/{{ $victorygroup->id }}">+&nbsp&nbspAdd New Member</a></div>

        </div>

            <hr>
        </div>
        <div class="d-flex align-items-center justify-content-between">
           
        </div>
        <div class="table-responsive-md">
            @foreach($members as $row)

            <table class="table table-bordered">
                <thead>
                    <tr>
                      <th scope="col">Full Name</th>
                      <th scope="col">Contact Number</th>
                      <th scope="col">One2One</th>
                      <th scope="col">VG</th>
                      <th scope="col">VW</th>
                      <th scope="col">DC</th>
                      <th scope="col">L113</th>
                      <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>{{ $row['name'] }}</td>
                    <td>{{ $row['contactNumber'] }}</td>
                    <td>{{ $row['one2One'] }}</td>
                    <td>{{ $row['victoryGroup'] }}</td>
                    <td>{{ $row['victoryWeekend'] }}</td>
                    <td>{{ $row['discipleshipClass'] }}</td>
                    <td>{{ $row['leadership113'] }}</td>
                    <td><a class="btn btn-secondary" href="/members/create/{{ $victorygroup->id }}">Edit</a>
                        <a class="btn btn-secondary" href="/members/create/{{ $victorygroup->id }}">Delete</a></td>
                    </tr>
                </tbody>
            </table>    
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection
