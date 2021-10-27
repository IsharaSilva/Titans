@extends('account.index')

@section('content')

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="module module-login span4 offset1">
				<form class="form-vertical" action="{{ URL::route('account-sign-in-post') }}" method="POST">
					@csrf
					
					<div class="module-body">	
					<div class="login-wrap">
					<div class="login-html">
						<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Admin Sign-In</label>
						<div class="login-form">
							<div class="sign-in-htm">
								<div class="group">
									<br>
									<input class="span2.5" type="text" name="username" placeholder="Username" value="{{ Request::old('login') }}" autofocus>
										@if($errors->has('user_login'))
										{{ $errors->first('login')}}
										@endif
								</div>
								<br>

								<div class="group">
									<input class="span2.5" type="password" name="password" placeholder="Password">
										@if($errors->has('password'))
										{{ $errors->first('password')}}
										@endif

								</div>
								<div class="group">
								<input id="check" type="checkbox" class="check" checked>
								<label for="check"><span class="icon"></span> Keep me Signed in</label>
								</div>
								<div class="group">
								<input type="submit" class="button" value="Sign In">
								</div>
								<div class="hr"></div>
								<div class="foot-lnk">
							
								<br>
								<a href="{{ URL::route('account-create') }}">New librarian? Sign Up</a>
								</div>
							</div>
						</div>
					</div>
					</div>

					</div>
					
				</form>
			</div>

			<div class="module module-login span4 offset3">
			
			<div class="module-body">
			 
			
				<div class="StudentSection-wrap">
					<div class="StudentSection-html">	
					<input id="tab-1" type="radio" name="tab" class="StudentSection" checked><label for="tab-1" class="tab">Student Section</label>
									
								<p><br><a href="{{ URL::route('student-registration') }}">Student Registration Form</a><br></p>
								<p><a href="{{ URL::route('search-book') }}">Search Book</a><br></p>

		
						
					</div>
				</div>
			
			</div>
			</div>
        </div>
	</div>
</div>
@include('account.style')
@stop


				
