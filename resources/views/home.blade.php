@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('commons.dashboard')}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-title text-center">
                        <h3>{{Auth::user()->name}} {{Auth::user()->lastName}}</h3>
                    </div>
                    <div class="card-img">
                        @if (Auth::user()->gender == '1')
                            <img src="{{ asset('img/avatarman.png') }}" alt="Avatar" class="avatar center">
                        @else
                            <img src="{{ asset('img/avatarwoman.png') }}" alt="Avatar" class="avatar center">
                        @endif
                    </div>

                    <div class="card card-title text-center">
                        <h6>{{__('commons.personalinfo')}}</h6>
                    </div>

                    <form method="POST" action="{{ route('home') }}">
                        @csrf

                        <!--province-->
                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('logins.province') }}</label>

                            <div class="col-md-6">
                                <input id="province" type="text" class="form-control @error('province') is-invalid @enderror" name="province" value="{{ old('province') }}" required autocomplete="province" autofocus>

                                @error('province')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--canton-->
                        <div class="form-group row">
                            <label for="canton" class="col-md-4 col-form-label text-md-right">{{ __('logins.canton') }}</label>

                            <div class="col-md-6">
                                <input id="canton" type="text" class="form-control @error('canton') is-invalid @enderror" name="canton" value="{{ old('canton') }}" required autocomplete="canton" autofocus>

                                @error('canton')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--district-->
                        <div class="form-group row">
                            <label for="district" class="col-md-4 col-form-label text-md-right">{{ __('logins.district') }}</label>

                            <div class="col-md-6">
                                <input id="district" type="text" class="form-control @error('district') is-invalid @enderror" name="district" value="{{ old('district') }}" required autocomplete="district" autofocus>

                                @error('district')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!--address-->
                        <div class="form-group row">
                            <label for="address1" class="col-md-4 col-form-label text-md-right">{{ __('logins.address1') }}</label>

                            <div class="col-md-6">
                                <input id="address1" type="text" class="form-control @error('address1') is-invalid @enderror" name="address1" value="{{ old('address1') }}" required autocomplete="address1" autofocus>

                                @error('address1')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('commons.save') }}
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
