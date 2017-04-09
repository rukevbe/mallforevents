@extends('register.main')
@section('form')
	<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="content one-half modal">
					<!--Login-->
                @if(Session::has('vendor_create'))
                        <div class="alert alert-success"><em>{!! session('vendor_create') !!}</em>
                        <button type="button" class="close" data-dismiss="alert" arial-label="close">
                        <span aria-hidden="true">&times</span>
                        </button>
                        </div>
                        @endif 

					<div class="box">
					@include ('common.errors')
					{!! Form::open( array('url'=>'register')) !!} 
							<div class="f-row">
								<div class="full-width">
						{!! Form::label('firstname','Firstname') !!} 
                        {!! Form::text('first_name',null, array('class'=>'form-control' ))!!} 
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
						{!! Form::label('surname','Surname')!!}
						{!! Form::text('last_name',null,array('class'=>'form-control')) !!}
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
						{!! Form::label('username','username')!!}
						{!! Form::text('username',null,array('class'=>'form-control')) !!}
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
						{!! Form::label('email','Email') !!} 
                        {!! Form::email('email',null, array('class'=>'form-control')) !!} 
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
						{!! Form::label('password','Password') !!} 
                        {!! Form::password('password',null, array('class'=>'form-control')) !!} 
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
						{!! Form::label('re-password','Repeat Password') !!} 
                        {!! Form::password('repeat_password',null, array('class'=>'form-control'))!!} 
								</div>
							</div>
							<div class="f-row">
								<div class="full-width check">
									<input type="checkbox" id="checkbox" />
									<label for="checkbox">I agree with terms and conditions.</label>
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
						{!! Form::submit('Create an account' , array('class'=>'btn color medium full')) !!} 
                        {!! Form::close() !!} 
							<!--<input type="submit" value="Create an account" class="btn color medium full" />-->
								</div>
							</div>
					
							<p>Already have an account? <a href="login.html">Login</a>.</p>

						</form>
					</div>
					<!--//Login-->
				</div>
				<!--- //Content -->
			</div>
		</div>
@endsection