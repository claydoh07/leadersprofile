@extends('layouts.app')

@section('content')

<div class="container">
	

	<div class="row">
		<div class="card mx-auto col-md-6	">
			<div class="card-body">
				<div class="card-title">Personal Information<hr/></div>
				<form>
					<div class="form-group">
						<label for="address">Address</label>
						<input id="address" 
						type="text" 
						class="form-control" 
						readonly 
						name="address" 
						value="{{ old('address') ?? $user->profile->address }} " 
						autocomplete="address" 
						>

					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="birthday">Birthday</label>
							<input type="text" class="form-control" id="birthday" 
							class="form-control" 
							readonly 
							name="birthday" 
							value="{{ old('birthday') ?? $user->profile->birthday }} " 
							autocomplete="birthday" 
							>

							@error('birthday')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>


						<div class="form-group col-md-6">
							<label for="gender">Gender</label>
							<input type="text" id="gender" 
							class="form-control  @error('gender') is-invalid @enderror" 
							readonly 
							name="gender" 
							value="{{ old('gender') ?? $user->profile->gender }} " 
							autocomplete="gender" 
							> 

							
							@error('gender')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</input>
					</div>
				</div>
				<div class="form-row">

					<div class="form-group col-md-6">
						<label for="primaryNumber">Primary Number</label>
						<input type="text" class="form-control" id="primaryNumber" 
						class="form-control" 
						readonly 
						name="primaryNumber" 
						value="{{ old('primaryNumber') ?? $user->profile->primaryNumber }} " 
						autocomplete="primaryNumber" 
						>

						@error('primaryNumber')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

					<div class="form-group col-md-6">
						<label for="secondaryNumber">Secondary Number</label>
						<input type="text" class="form-control" id="secondaryNumber" 
						class="form-control" 
						readonly 
						name="secondaryNumber" 
						value="{{ old('secondaryNumber') ?? $user->profile->secondaryNumber }} " 
						autocomplete="secondaryNumber" 
						>

						@error('secondaryNumber')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror
					</div>

				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
						<label for="civilStatus">Civil Status</label>
						<input type="text" id="civilStatus"
						class="form-control @error('civilStatus') is-invalid @enderror" 
						readonly 
						name="civilStatus" 
						value="{{ old('civilStatus') ?? $user->profile->civilStatus }} " 
						autocomplete="civilStatus" 
						> 
						

						@error('civilStatus')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
						@enderror

					</input>
				</div>
				<div class="form-group col-md-6">
					<label for="peopleGroup">People Group</label>
					<input type="text" id="peopleGroup"
					class="form-control @error('peopleGroup') is-invalid @enderror" 
					readonly 
					name="peopleGroup" 
					value="{{ old('peopleGroup') ?? $user->profile->peopleGroup }} " 
					autocomplete="peopleGroup" 
					> 
					@error('peopleGroup')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</input>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="weddingAnniversary">Wedding Anniversary</label>
				<input type="text" class="form-control" id="weddingAnniversary-anniv" placeholder="N/A"
				class="form-control @error('weddingAnniversary') is-invalid @enderror" 
				readonly 
				name="weddingAnniversary" 
				value="{{ old('weddingAnniversary') ?? $user->profile->weddingAnniversary }}" 
				autocomplete="weddingAnniversary" 
				default="N/A"
				>

				@error('weddingAnniversary')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror

			</div>
			<div class="form-group col-md-6">
				<label for="victoryWeekendDate">Victory Weekend Date (mm-dd-yyyy)</label>
				<input type="text" class="form-control" id="victoryWeekendDate" placeholder="Victory Weekend"
				class="form-control @error('victoryWeekendDate') is-invalid @enderror" 
				readonly 
				name="victoryWeekendDate" 
				value="{{ old('victoryWeekendDate') ?? $user->profile->victoryWeekendDate }} " 
				autocomplete="victoryWeekendDate"
				>
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
				class="form-control @error('facebook') is-invalid @enderror" 
				readonly 
				name="facebook" 
				value="{{ old('facebook') ?? $user->profile->facebook }} " 
				autocomplete="facebook" 
				>

				@error('facebook')
				<span class="invalid-feedback" role="alert">
					<strong>{{ $message }}</strong>
				</span>
				@enderror


			</div>
			<div class="form-group col-md-6">
				<label for="gender">Service Attended</label>
				<input type="text" id="serviceAttended"
				class="form-control @error('serviceAttended') is-invalid @enderror" 
				readonly 
				name="serviceAttended" 
				value="{{ old('serviceAttended') ?? $user->profile->serviceAttended }} " 
				autocomplete="serviceAttended" 
				>
			</input>
		</div>
	</div>
	<div class="card-title">Discipleship Journey<hr/></div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<div class="custom-control custom-checkbox">

				<input type="checkbox" id="one2One" 
				name="one2One" class="custom-control-input" <?php if ($user->profile->one2One == 1) echo "checked"; ?> 
				disabled 
				
				value="{{ old('one2One') ?? $user->profile->one2One }} " >
				<label class="custom-control-label" for="one2One">One2One</label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" id="victoryWeekend" 
				name="victoryWeekend" class="custom-control-input"  <?php if ($user->profile->victoryWeekend == 1) echo "checked"; ?> 
				disabled 
				
				value="{{ old('victoryWeekend') ?? $user->profile->victoryWeekend }} ">
				<label class="custom-control-label" for="victoryWeekend">Victory Weekend</label>
			</div>

			<div class="custom-control custom-checkbox">
				<input type="checkbox" id="leadership113" 
				name="leadership113" class="custom-control-input" <?php if ($user->profile->leadership113 == 1) echo "checked"; ?> 
				disabled 
				
				value="{{ old('leadership113') ?? 
				$user->profile->leadership113 }} ">
				<label class="custom-control-label" for="leadership113">Leadership 113</label>
			</div>
		</div>
		<div class="form-group col-md-6">
			<div class="custom-control custom-checkbox">
				<input type="checkbox" id="victoryGroup" 
				name="victoryGroup" class="custom-control-input" <?php if ($user->profile->victoryGroup == 1) echo "checked"; ?> 
				disabled 
				
				value="{{ old('victoryGroup') ?? 
				$user->profile->victoryGroup }} ">
				<label class="custom-control-label" for="victoryGroup">Victory Group</label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" id="discipleshipClass" 
				disabled 
				name="discipleshipClass" class="custom-control-input" <?php if ($user->profile->discipleshipClass == 1) echo "checked"
				; ?> 
				value="{{ old('discipleshipClass') ?? $user->profile->discipleshipClass }} ">
				<label class="custom-control-label" for="discipleshipClass">Discipleship Class</label>
			</div>
			<div class="custom-control custom-checkbox">
				<input type="checkbox" id="discipleshipCoaching" 
				disabled 
				name="discipleshipCoaching" class="custom-control-input" <?php if ($user->profile->discipleshipCoaching == 1) echo "
				checked"; ?> 
				value="{{ old('discipleshipCoaching') ?? $user->profile->discipleshipCoaching }} ">
				<label class="custom-control-label" for="discipleshipCoaching">Discipleship Coaching</label>
			</div>
		</div>
	</div>

	<div class="card-title">Ministry Involvement<hr/></div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="primaryMinistry">Primary Ministry</label>
			<input type="text" class="form-control" id="primaryMinistry" 
			class="form-control" 
			readonly 
			name="primaryMinistry" 
			value="{{ $user->profile->primaryMinistry }} " 
			autocomplete="primaryMinistry" 
			>

			@error('primaryMinistry')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
			@enderror

		</input>
	</div>
	<div class="form-group col-md-6">
		<label for="secondaryMinistry">Secondary Ministry</label>
		<input type="text" id="secondaryMinistry"
		class="form-control @error('secondaryMinistry') is-invalid @enderror" 
		readonly 
		name="secondaryMinistry" 
		value="{{ old('secondaryMinistry') ?? $user->profile->secondaryMinistry }} " 
		autocomplete="secondaryMinistry" 
		> 

		@error('secondaryMinistry')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror
	</input>
</div>
</div>

<div class="card-title">Profile Information<hr/></div>
<div class="form-row">
	<div class="form-group col-md-12" align="center">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-50">
	</div>
	<div class="form-group col-md-12">
		<label for="title" class="col-md-md-6 col-form-label">Title</label>

		<input id="title" 
		type="text" 
		class="form-control @error('title') is-invalid @enderror" 
		readonly 
		name="title" 
		value="{{ old('title') ?? $user->profile->title }} " 
		autocomplete="title" 
		>

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
		readonly 
		name="description" 
		value="{{ old('description') ?? $user->profile->description }}" 
		autocomplete="description" 
		>

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
		readonly 
		name="url" 
		value="{{ old('url') ?? $user->profile->url }}" 
		autocomplete="url" 
		>

		@error('url')
		<span class="invalid-feedback" role="alert">
			<strong>{{ $message }}</strong>
		</span>
		@enderror

	</div>
</div>
<div class="d-flex justify-content-between align-items-baseline">
	<a href="/profile/{{ $user->id }}/edit">Go Back
	</a>

	<a href="/profile/{{ $user->id }}">Done
	</a>
</div>


</div>
</div>
</div>

</div>
@endsection
