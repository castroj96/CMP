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

                     <div class="alert alert-danger print-error-msg" style="display:none">
                         <ul></ul>
                     </div>

                    <form>
                        @csrf

                        <!--province-->
                        <div class="form-group row">
                            <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('logins.province') }}</label>

                            <div class="col-md-6">
                                <select id="province" name="province" class="form-control @error('province') is-invalid @enderror">
                                    @foreach($provinces as $prov)
                                        <option value="{{$prov->id}}">{{$prov->name}}</option>
                                    @endforeach
                                </select>

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

                            <div class="col-md-6 canton">
                                <select id="canton" name="canton" class="form-control @error('canton') is-invalid @enderror">
                                </select>

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
                                <select id="district" name="district" class="form-control @error('district') is-invalid @enderror">
                                </select>

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
                                <button type="submit" class="btn btn-primary btn-success btn-submit">
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


<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        var _token = $('input[name="_token"]').val();
        var province = $('select[name="province"]').val();
        var canton = $('select[name="canton"]').val();
        var district = $('select[name="district"]').val();
        var address1 = $('input[name="address1"]').val();

        $(".btn-submit").click(function(e){
            e.preventDefault();

            province = $('select[name="province"]').val();
            canton = $('select[name="canton"]').val();
            district = $('select[name="district"]').val();
            address1 = $('input[name="address1"]').val();

            $.ajax({
                url: '/homeSave',
                method: "POST",
                data:{_token: _token, province: province, canton: canton, district: district, address1: address1},
                success: function(data){
                    if($.isEmptyObject(data.error)){
                        printMsg(data, true);
                    }else{
                        printMsg(data, false);
                    }
                },
            });
        });

        $("#province").click(function(e){
            e.preventDefault();

            province = $('select[name="province"]').val();

            $.ajax({
                url: '/homeCanton',
                method: "POST",
                data:{_token: _token, province: province},
                success: function(data)
                {
                    clearSelect("#canton");
                    clearSelect("#district");
                    populateSelect(data,"#canton");
                }
            })
        });

        $("#canton").click(function(e){
            e.preventDefault();

            canton = $('select[name="canton"]').val();

            $.ajax({
                url: '/homeDistrict',
                method: "POST",
                data:{_token: _token, canton: canton},
                success: function(data)
                {
                    clearSelect("#district");
                    populateSelect(data,"#district");
                }
            })
        });

        function populateSelect(data, name)
        {
            $(name).find("select").html();
            $.each(data, function(key, value) {
                $(name).append('<option value="' + key + '">' + value + '</option>');
            });
        }

        function clearSelect(name)
        {
            $(name).find('option').remove().html();
        }

        function printMsg(msg, success){
            if (success == true)
                $(".print-error-msg").removeClass("alert-danger").addClass("alert-success");
            else
                $(".print-error-msg").removeClass("alert-success").addClass("alert-danger");

            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
</script>
