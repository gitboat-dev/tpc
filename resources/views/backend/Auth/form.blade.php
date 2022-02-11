@extends('backend.layouts.app')
@section('title','backoffice | Thaipolyester')
@section('css')
	<link rel="preload stylesheet" href="/css/backend/Auth/form.css?v={{time()}}" as="style" type="text/css" crossorigin>
@endsection
@section('content')

	<div class="block_login">
		<h1 class="login-header"><a href="/"><img src="/assets/custom/images/home/logo.webp"></a></h1>
		<div class="login-content">
			<h1 class="login-header">Admin | TPC</h1>
			<div class="subtitle">
	        	Please enter password to access this page
	    	</div>
	    	<div class="login-body">
	    		<form class="form-horizontal" method="POST" action="{{ route('backoffice.login') }}">
					@csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" @if(old('email')) value="hello@gmail.com" @else value="" @endif id="username" placeholder="Enter username" autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="userpassword">Password</label>
                        <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="userpassword" value="" placeholder="Enter password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    @error('failed')
                        <div class="text-danger">
                          {{ $message }}
                        </div>
                    @enderror
                    <div class="mt-3">
                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                    </div>
				</form>
	    	</div>
		</div>
	</div>
@endsection
@section('js')
@endsection