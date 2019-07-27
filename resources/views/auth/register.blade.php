@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="FirstName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="FirstName" type="text" class="form-control @error('FirstName') is-invalid @enderror" name="FirstName" value="{{ old('FirstName') }}" required autocomplete="FirstName" autofocus>

                                @error('FirstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="LastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="LastName" type="text" class="form-control @error('LastName') is-invalid @enderror" name="LastName" value="{{ old('LastName') }}" required autocomplete="LastName" autofocus>

                                @error('LastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Rank" class="col-md-4 col-form-label text-md-right">{{ __('Rank') }}</label>

                            <div class="col-md-6">

                             <center>Strathmore Student/Staff</center>   <input id="Rank" type="radio" class="form-control @error('Rank') is-invalid @enderror" name="Rank" value="{{ old('Rank') }}" onclick="expand(0)" autocomplete="Rank">
                             <center> Other </center> <input id="Rank" type="radio" class="form-control @error('Rank') is-invalid @enderror" name="Rank" value="{{ old('Rank') }}" onclick="expand(1)" autocomplete="Rank"> 
                                @error('Rank')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div id="Members">
                        <div class="form-group row">
                            <label for="AdminNo" class="col-md-4 col-form-label text-md-right">{{ __('Student/Staff Number') }}</label>

                            <div class="col-md-6">
                                <input id="AdminNo" type="number" class="form-control @error('AdminNo') is-invalid @enderror" name="AdminNo" required autocomplete="AdminNo">

                                @error('AdminNo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                                <select id="Department" type="text" class="form-control{{ $errors->has('Department') ? ' is-invalid' : '' }}" name="Department" value="{{ old('Department') }}" required autofocus>
                                <option >Select your department</option>
                                    <option >FIT</option>
                                    <option >SLS</option>
                                    <option >SBS</option>
                                    <option >STH</option>
                                    <option >SMC</option>
                                    <option >SOA</option>
                                    <option >SHSS</option>
                                    <option >SGS</option>
                                    </select>
                                @if ($errors->has('Department'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Department') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </div>

                        <script>
                        function expand(x){
                            if(x==0)
                            document.getElementById('Members').style.display='block';
                            else
                            document.getElementById('Members').style.display='none';
                        return;
                        }
                        </script>
                

                        <div class="form-group row">
                            <label for="Diet" class="col-md-4 col-form-label text-md-right">{{ __('Diet') }}</label>

                            <div class="col-md-6">

                                <center>Vegetarian </center> <input id="Diet" type="radio" class="form-control @error('Diet') is-invalid @enderror" name="Diet" value="{{ old('Diet') }}"  autocomplete="Diet"> 
                                <center>Non-Vegetarian </center> <input id="Diet" type="radio" class="form-control @error('Diet') is-invalid @enderror" name="Diet" value="{{ old('Diet') }}"  autocomplete="Diet"> 
                                @error('Diet')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
