@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row pt-5">
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

        <div class="row pl-3 pr-3">   

            @foreach($members as $row)

            <div class="card" style="width: 33.3%;">  
                <div class="card-body" align="center">

                    <h5 class="card-title pb-1"><strong>{{ $row['name'] }}</strong></h5>

                    <h6 class="card-subtitle mb-2 pb-1">{{ $row['contactNumber'] }}</h6>

                    <div class="custom-control custom-checkbox">

                        <input type="checkbox" id="one2One" name="one2One" class="custom-control-input" <?php if ($row['one2One'] == 1) echo "checked"; ?> 
                        value="1" >
                        <label class="custom-control-label" for="one2One">One2One</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="victoryWeekend" name="victoryWeekend" class="custom-control-input"  <?php if ($row['victoryWeekend'] == 1) echo "checked"; ?> 
                        value="1">
                        <label class="custom-control-label" for="victoryWeekend">Victory Weekend</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="leadership113" name="leadership113" class="custom-control-input" <?php if ($row['leadership113'] == 1) echo "checked"; ?> 
                        value="1">
                        <label class="custom-control-label" for="leadership113">Leadership 113</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" id="victoryGroup" name="victoryGroup" class="custom-control-input" <?php if ($row['victoryGroup'] == 1) echo "checked"; ?> 
                        value="1">
                        <label class="custom-control-label" for="victoryGroup">VictoryGroup</label>
                    </div>
                    <div class="custom-control custom-checkbox pb-3">
                        <input type="checkbox" id="discipleshipClass" name="discipleshipClass" class="custom-control-input" <?php if ($row['discipleshipClass'] == 1) echo "checked"; ?> 
                        value="1">
                        <label class="custom-control-label" for="discipleshipClass">Discipleship Class</label>
                    </div> 
                    <a href="#" class="btn btn-primary">Update</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </div>
            </div>  



            @endforeach

        </div>
    </div>










         <!--    <table class="table table-bordered">
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
                @foreach($members as $row)

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
                @endforeach
            </table> -->


        </div>
    </div>
</div>
</div>
@endsection
