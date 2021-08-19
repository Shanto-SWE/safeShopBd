@extends('front.layout.layout')
@section('title','user login and registration')

@section('content')

<div class="span9">
	<ul class="breadcrumb">
		<li><a href="/">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
  </ul>
  <h3> Login</h3>
  <div class="well">
  @if ($errors->any())
      <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach   
      </div>
    @endif
  	
  	<form class="form-horizontal" method="post" action="{{route('loginCheck')}}">
  		@csrf
			<div class="control-group">
				<label class="control-label" for="input_email">Email <sup>*</sup></label>
				<div class="controls">
				  <input type="text" name="email" id="input_email" placeholder="Email" required>
				</div>
		  </div>

			<div class="control-group">
				<label class="control-label" for="password">Password <sup>*</sup></label>
				<div class="controls">
				  <input type="password" name="password" id="password" placeholder="*******" required>
				</div>
		  </div>

			<div class="control-group">
				<div class="controls">
					<input type="submit" class="btn btn-success" value="Login"> 
				</div>
		  </div>

  	</form>
  </div>
  <h3> Registration</h3>
  <div class="well">
  	<form class="form-horizontal" method="post" action="{{route('user.register')}}">
  		@csrf
  		<div class="control-group">
				<label class="control-label" for="inputFname1" required>First name <sup>*</sup></label>
				<div class="controls">
				  <input type="text" id="inputFname1" name="first_name" placeholder="First Name" required>
				</div>
		 	</div>

		 	<div class="control-group">
				<label class="control-label" for="inputLnam">Last name <sup>*</sup></label>
				<div class="controls">
				  <input type="text" id="inputLnam"  name="last_name" placeholder="Last Name" required>
				</div>
		 	</div>

			<div class="control-group">
				<label class="control-label"  for="input_email">Email <sup>*</sup></label>
				<div class="controls" required>
				  <input type="text" id="input_email" name="email" placeholder="Email" required>
				</div>
		  </div>

			<div class="control-group">
				<label class="control-label" for="password">Password <sup>*</sup></label>
				<div class="controls" required>
				  <input type="password" name="password" id="password" placeholder="*******" required> 
				</div>
		  </div>

			<div class="control-group">
				<div class="controls">
					<input type="submit" class="btn btn-success" value="Submit"> 
				</div>
		  </div>

  	</form>
  </div>
</div>

@endsection