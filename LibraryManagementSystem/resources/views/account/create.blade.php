@extends('account.index')

@section('content')

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="module module-login span4 offset4">
				<form class="form-vertical" action="{{ URL::route('account-create-post') }}" method="POST">
					@csrf
					
					<div class="module-body">	
					<div class="login-wrap">
					<div class="login-html">
						<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign Up</label>
						<div class="login-form">
							<div class="sign-up-htm">
								<div class="group">
									<br>
									<input class="span2.5" type="text" placeholder="Username" name="username" value="{{ Request::old('login') }}"> 
										@if($errors->has('login'))
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

								<br>

								<div class="group">
									<input class="span2.5" type="password" name="password_again" placeholder="Confirm Password">
										@if($errors->has('password_again'))
										{{ $errors->first('password_again')}}
										@endif

								</div>

								
								<div class="group">
								<br>
								<input type="submit" class="button" value="Sign Up">
								</div>
								<div class="hr"></div>
								<div class="foot-lnk">
								<a href="{{ URL::route('account-sign-in') }}">Already A User?</a>
								</div>
							</div>
						</div>
					</div>
					</div>
					</div>


				</form>
			</div>
		</div>
	</div>
</div>
@include('account.style')
@stop



					