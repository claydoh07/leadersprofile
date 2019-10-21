@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/members" enctype="multipart/form-data" method="post">
        @csrf
        <div class="row">
            <div class="card mx-auto col-md-6   ">
                <div class="card-body">
                    <div class="card-title">Personal Information<hr/></div>
                    <form>

                        <div class="form-group" hidden>
                            <br>
                            <label for="vgId">ID<font color="dark-red"> *</font></label>
                            <input id="vgId" 
                            type="text" 
                            name="vgId" 
                            value="{{ $victorygroup }}">

                            @error('vgId')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <br>
                            <label for="name">Name<font color="dark-red"> *</font></label>
                            <input id="name" 
                            type="text" 
                            placeholder="Full Name" 
                            class="form-control @error('name') is-invalid @enderror" 
                            name="name" 
                            value="{{ old('name') }}" 
                            autocomplete="name" 
                            required 
                            autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="contactNumber">Contact Number<font color="dark-red"> *</font></label>
                                <input type="text" class="form-control" id="contactNumber" 
                                class="form-control @error('contactNumber') is-invalid @enderror" 
                                name="contactNumber" 
                                placeholder="eg. 09XX-XXX-XXXX"
                                value="{{ old('contactNumber') }}" 
                                autocomplete="contactNumber" 
                                required 
                                autofocus>

                                @error('contactNumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                    </div>

                <div class="card-title">Discipleship Journey<hr/></div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="custom-control custom-checkbox">

                            <input type="checkbox" id="one2One" 
                            name="one2One" class="custom-control-input" 
                            value="1" >

                            <label class="custom-control-label" for="one2One">One2One</label>
                        </div>
                         <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="victoryGroup" name="victoryGroup" class="custom-control-input" 
                            value="1">
                            <label class="custom-control-label" for="victoryGroup">Victory Group</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="victoryWeekend" name="victoryWeekend" class="custom-control-input"  
                            value="1">
                            <label class="custom-control-label" for="victoryWeekend">Victory Weekend</label>
                        </div>

                        
                    </div>
                    <div class="form-group col-md-6">
                       
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="discipleshipClass" name="discipleshipClass" class="custom-control-input" 
                            value="1">
                            <label class="custom-control-label" for="discipleshipClass">Discipleship Class</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" id="leadership113" name="leadership113" class="custom-control-input" 
                            value="1">
                            <label class="custom-control-label" for="leadership113">Leadership 113</label>
                        </div>
                    </div>


                </div>

                

        <button type="submit" class="btn btn-primary float-right">Save</button>
    </form>
</div>
</div>
</div>
</form>
</div>
@endsection
