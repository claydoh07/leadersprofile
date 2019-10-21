@extends('layouts.app')

@section('content')

<div class="container">
	<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
		@csrf
		@method('PATCH')

		<div class="row">
			<div class="card mx-auto col-md-6	">
				<div class="card-body">
					<div class="card-title">Personal Information<hr/></div>
					<form>
						<div class="form-group">
							<font color="dark-red" size="2px">Fields with asterisk(*) are required </font><br>
							<label for="address">Address<font color="dark-red"> *</font></label>
							<input id="address" 
							type="text" 
							placeholder="Address" 
							class="form-control @error('address') is-invalid @enderror" 
							name="address" 
							value="{{ old('address') ?? $user->profile->address }}" 
							autocomplete="address" 
							autofocus>

							@error('address')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror

						</div>
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="birthday">Birthday<font color="dark-red"> *</font></label>
								<input type="date" class="form-control" id="birthday" 
								class="form-control @error('birthday') is-invalid @enderror" 
								name="birthday" 
								value="{{ old('birthday') ?? $user->profile->birthday }}" 
								autocomplete="birthday" 
								autofocus>

								@error('birthday')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>


							<div class="form-group col-md-6">
								<label for="gender">Gender<font color="dark-red"> *</font></label>
								<select id="gender" 
								class="form-control  @error('gender') is-invalid @enderror" 
								name="gender" 
								value="{{ old('gender') ?? $user->profile->gender }}" 
								autocomplete="gender" 
								autofocus> 

								<option selected disabled="">Choose...</option>
								<option <?php if($user->profile->gender == "Male") echo " selected"; ?> >Male</option>
								<option <?php if($user->profile->gender == "Female") echo " selected"; ?> >Female</option>
								
								@error('gender')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</select>
						</div>
					</div>
					<div class="form-row">

						<div class="form-group col-md-6">
							<label for="primaryNumber">Primary Contact Number<font color="dark-red"> *</font></label>
							<input 
							type="text" 
							name="primaryNumber" 
							value="{{ old('primaryNumber') ?? $user->profile->primaryNumber }}" 
							class="form-control" 
							id="primaryNumber" 
							placeholder="Primary Contact Number" autofocus>

							@error('mobileNo21')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror						
						</div>

						<div class="form-group col-md-6">
							<label for="secondaryNumber">Secondary Contact Number</label>
							<input 
							type="text" 
							name="secondaryNumber" 
							value="{{ old('mobileNo21') ?? $user->profile->secondaryNumber }}" 
							class="form-control" 
							id="secondaryNumber" 
							placeholder="Secondary Contact Number" autofocus>

							@error('mobileNo21')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror						
						</div>

					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="civilStatus">Civil Status<font color="dark-red"> *</font></label>
							<select id="civilStatus"
							class="form-control @error('civilStatus') is-invalid @enderror" 
							name="civilStatus" 
							value="{{ old('civilStatus') ?? $user->profile->civilStatus }}" 
							autocomplete="civilStatus" 
							autofocus> >
							<option selected disabled="">Choose...</option>
							<option <?php if($user->profile->civilStatus == "Single") echo "selected"; ?> >Single</option>
							<option <?php if($user->profile->civilStatus == "Married") echo "selected"; ?> >Married</option>
							<option <?php if($user->profile->civilStatus == "Widowed") echo "selected"; ?> >Widowed</option>
							<option <?php if($user->profile->civilStatus == "Separated") echo "selected"; ?> >Separated</option>
							<option <?php if($user->profile->civilStatus == "Divorced") echo "selected"; ?> >Divorced</option>

							@error('civilStatus')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror

						</select>
					</div>
					<div class="form-group col-md-6">
						<label for="peopleGroup">People Group<font color="dark-red"> *</font></label>
						<select id="peopleGroup"
						class="form-control @error('peopleGroup') is-invalid @enderror" 
						name="peopleGroup" 
						value="{{ old('peopleGroup') ?? $user->profile->peopleGroup }} " 
						autocomplete="peopleGroup" 
						autofocus> >
						<option <?php if($user->profile->peopleGroup == "ENC") echo "selected"; ?>  >ENC</option>
						<option <?php if($user->profile->peopleGroup == "Singles") echo "selected"; ?>  >Single</option>
						<option <?php if($user->profile->peopleGroup == "Married") echo "selected"; ?>  >Married</option>
						<option <?php if($user->profile->peopleGroup == "Single Parent") echo "selected"; ?>  >Single Parent</option>
						<option <?php if($user->profile->peopleGroup == "Senior") echo "selected"; ?>  >Senior</option>
						@error('peopleGroup')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</select>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="weddingAnniversary">Wedding Anniversary (if available)</label>
					<input type="date" class="form-control" id="weddingAnniversary-anniv" placeholder="Wedding Anniversary"
					class="form-control @error('weddingAnniversary') is-invalid @enderror" 
					name="weddingAnniversary" 
					value="{{ old('weddingAnniversary') ?? $user->profile->weddingAnniversary }}" 
					autocomplete="weddingAnniversary" 
					autofocus>

					@error('weddingAnniversary')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror

				</div>
				<div class="form-group col-md-6">
					<label for="victoryWeekendDate">Victory Weekend Date (mm-dd-yyyy)</label>
					<input type="date" class="form-control" id="victoryWeekendDate" placeholder="Victory Weekend"
					class="form-control @error('victoryWeekendDate') is-invalid @enderror" 
					name="victoryWeekendDate" 
					value="{{ old('victoryWeekendDate') ?? $user->profile->victoryWeekendDate }}" 
					autocomplete="victoryWeekendDate"
					autofocus>
					@error('victoryWeekendDate')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror

				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="facebook">Facebook</label>
					<input type="text" class="form-control" id="facebook" 
					type="text" 
					placeholder="facebook.com/username" 
					class="form-control @error('facebook') is-invalid @enderror" 
					name="facebook" 
					value="{{ old('facebook') ?? $user->profile->facebook }}" 
					autocomplete="facebook" 
					autofocus>

					@error('facebook')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror


				</div>
				<div class="form-group col-md-6">
					<label for="gender">Service Attended<font color="dark-red"> *</font></label>
					<select id="serviceAttended"
					class="form-control @error('serviceAttended') is-invalid @enderror" 
					name="serviceAttended" 
					value="{{ old('serviceAttended') ?? $user->profile->serviceAttended }} " 
					autocomplete="serviceAttended" 
					autofocus>
					<option selected disabled="">Choose...</option>
					<option <?php if($user->profile->serviceAttended == "9am") echo "selected"; ?> >9am</option>
					<option <?php if($user->profile->serviceAttended == "11am") echo "selected"; ?> >11am</option>
					<option <?php if($user->profile->peopleGroup == "5pm") echo "selected"; ?> >5pm</option>
				</select>
			</div>
		</div>
		<div class="card-title">Discipleship Journey<hr/></div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<div class="custom-control custom-checkbox">

					<input type="checkbox" id="one2One" name="one2One" class="custom-control-input" <?php if ($user->profile->one2One == 1) echo "checked"; ?> 
					value="1" >
					<label class="custom-control-label" for="one2One">One2One</label>
				</div>
				<div class="custom-control custom-checkbox">
					<input type="checkbox" id="victoryWeekend" name="victoryWeekend" class="custom-control-input"  <?php if ($user->profile->victoryWeekend == 1) echo "checked"; ?> 
					value="1">
					<label class="custom-control-label" for="victoryWeekend">Victory Weekend</label>
				</div>

				<div class="custom-control custom-checkbox">
					<input type="checkbox" id="leadership113" name="leadership113" class="custom-control-input" <?php if ($user->profile->leadership113 == 1) echo "checked"; ?> 
					value="1">
					<label class="custom-control-label" for="leadership113">Leadership 113</label>
				</div>
			</div>
			<div class="form-group col-md-6">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" id="victoryGroup" name="victoryGroup" class="custom-control-input" <?php if ($user->profile->victoryGroup == 1) echo "checked"; ?> 
					value="1">
					<label class="custom-control-label" for="victoryGroup">Victory Group</label>
				</div>
				<div class="custom-control custom-checkbox">
					<input type="checkbox" id="discipleshipClass" name="discipleshipClass" class="custom-control-input" <?php if ($user->profile->discipleshipClass == 1) echo "checked"; ?> 
					value="1">
					<label class="custom-control-label" for="discipleshipClass">Discipleship Class</label>
				</div>
				<div class="custom-control custom-checkbox">
					<input type="checkbox" id="discipleshipCoaching" name="discipleshipCoaching" class="custom-control-input" <?php if ($user->profile->discipleshipCoaching == 1) echo "checked"; ?> 
					value="1">
					<label class="custom-control-label" for="discipleshipCoaching">Discipleship Coaching</label>
				</div>
			</div>
		</div>

		<div class="card-title">Ministry Involvement<hr/></div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="primaryMinistry">Primary Ministry<font color="dark-red"> *</font></label>
				<select id="primaryMinistry"
				class="form-control @error('primaryMinistry') is-invalid @enderror" 
				name="primaryMinistry" 
				value="{{ old('primaryMinistry') ?? $user->profile->primaryMinistry }} " 
				autocomplete="primaryMinistry" 
				autofocus> >



				<option selected disabled="">Choose...</option>
				<option <?php if($user->profile->primaryMinistry == "Admin Support") echo "selected"; ?>  >Admin Support</option>
				<option <?php if($user->profile->primaryMinistry == "Communications") echo "selected"; ?> >Communications</option>
				<option <?php if($user->profile->primaryMinistry == "Discipleship") echo "selected"; ?> >Discipleship</option>
				<option <?php if($user->profile->primaryMinistry == "Music") echo "selected"; ?> >Music</option>
				<option <?php if($user->profile->primaryMinistry == "Prayer") echo "selected"; ?> >Prayer</option>
				<option <?php if($user->profile->primaryMinistry == "Technical and Stage Management") echo "selected"; ?> >Technical and Stage Management</option>
				<option <?php if($user->profile->primaryMinistry == "Pastoral Care") echo "selected"; ?> >Pastoral Care</option>
				<option <?php if($user->profile->primaryMinistry == "Kids Church") echo "selected"; ?> >Kids Church</option>
				<option <?php if($user->profile->primaryMinistry == "Prayer") echo "selected"; ?> >Prayer</option>
				<option <?php if($user->profile->primaryMinistry == "Production and Creatives") echo "selected"; ?> >Production and Creatives</option>
				<option <?php if($user->profile->primaryMinistry == "Ushering") echo "selected"; ?> >Ushering</option>
				<option <?php if($user->profile->primaryMinistry == "Parking and Security") echo "selected"; ?> >Parking and Security</option>

				@error('primaryMinistry')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror

			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="secondaryMinistry">Secondary Ministry</label>
			<select id="secondaryMinistry"
			class="form-control @error('secondaryMinistry') is-invalid @enderror" 
			name="secondaryMinistry" 
			value="{{ old('secondaryMinistry') ?? $user->profile->secondaryMinistry }} " 
			autocomplete="secondaryMinistry" 
			autofocus> >
			<option selected disabled="">Choose...</option>
			<option <?php if($user->profile->secondaryMinistry == "Admin Support") echo "selected"; ?>  >Admin Support</option>
			<option <?php if($user->profile->secondaryMinistry == "Communications") echo "selected"; ?> >Communications</option>
			<option <?php if($user->profile->secondaryMinistry == "Discipleship") echo "selected"; ?> >Discipleship</option>
			<option <?php if($user->profile->secondaryMinistry == "Music") echo "selected"; ?> >Music</option>
			<option <?php if($user->profile->secondaryMinistry == "Prayer") echo "selected"; ?> >Prayer</option>
			<option <?php if($user->profile->secondaryMinistry == "Technical and Stage Management") echo "selected"; ?> >Technical and Stage Management</option>
			<option <?php if($user->profile->secondaryMinistry == "Pastoral Care") echo "selected"; ?> >Pastoral Care</option>
			<option <?php if($user->profile->secondaryMinistry == "Kids Church") echo "selected"; ?> >Kids Church</option>
			<option <?php if($user->profile->secondaryMinistry == "Prayer") echo "selected"; ?> >Prayer</option>
			<option <?php if($user->profile->secondaryMinistry == "Production and Creatives") echo "selected"; ?> >Production and Creatives</option>
			<option <?php if($user->profile->secondaryMinistry == "Ushering") echo "selected"; ?> >Ushering</option>
			<option <?php if($user->profile->secondaryMinistry == "Parking and Security") echo "selected"; ?> >Parking and Security</option>


			@error('secondaryMinistry')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror
		</select>
	</div>
</div>

<div class="card-title">Profile Information<hr/></div>
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="image" class="col-md-md-6 col-form-label">Profile Image</label>
		<input type="file" class="form-control-file" id="image" name="image">

		@error('image')
		<strong>{{ $message }}</strong>
		@enderror
	</div>
	<div class="form-group col-md-12">
		<label for="title" class="col-md-md-6 col-form-label">Title</label>

		<input id="title" 
		type="text" 
		class="form-control @error('title') is-invalid @enderror" 
		name="title" 
		value="{{ old('title') ?? $user->profile->title }} " 
		autocomplete="title" 
		autofocus>

		@error('title')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</div>
	<div class="form-group col-md-12">
		<label for="description" class="col-md-md-6 col-form-label">Description</label>

		<input id="description" 
		type="text" 
		class="form-control @error('description') is-invalid @enderror" 
		name="description" 
		value="{{ old('description') ?? $user->profile->description }}" 
		autocomplete="description" 
		autofocus>

		@error('description')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror

	</div>
</div>
<div class="form-row">
	<div class="form-group col-md-12">
		<label for="url" class="col-md-md-6 col-form-label">URL</label>

		<input id="url" 
		type="text" 
		class="form-control @error('url') is-invalid @enderror" 
		name="url" 
		value="{{ old('url') ?? $user->profile->url }}" 
		autocomplete="url" 
		autofocus>

		@error('url')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror

	</div>
</div>

<button type="submit" class="btn btn-primary float-right">Update</button>
</form>
</div>
</div>
</div>
</form>
</div>
@endsection
