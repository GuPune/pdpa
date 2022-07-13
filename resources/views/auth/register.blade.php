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
                        {{-- <input id="avatar" type="hidden" class="form-control" name="avatar" value="{{$avatar}}" required autocomplete="avatar" >
                        <input id="id" type="hidden" class="form-control" name="id" value="{{$id}}" required autocomplete="avatar" > --}}

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">

                           @if(!empty($name))

                           <input id="name" type="text" class="form-control" name="name" value="{{$name}}" required autofocus>

                       @else

                           <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                       @endif

                       @if ($errors->has('name'))

                       <span class="help-block">

                           <strong>{{ $errors->first('name') }}</strong>

                       </span>

                   @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                @if(!empty($email))

                                <input id="email" type="email" class="form-control" name="email" value="{{$email}}" required>

                                @else

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @endif


                               @if ($errors->has('email'))

                               <span class="help-block">

                                   <strong>{{ $errors->first('email') }}</strong>

                               </span>

                           @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
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
