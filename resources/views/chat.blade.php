@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{__('commons.videoConference')}}</div>
                    <div class="card-body">
                        <div class="card-title text-center">
                            <div id="meet">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src='https://meet.jit.si/external_api.js'></script>
<script>
    $(document).ready(function(){

        const domain = "meet.jit.si";
        const options = {
            roomName: 'CMPCulto',
            width: '100%',
            height: 700,
            parentNode: document.querySelector('#meet'),

            userInfo: {
                email: '{{Auth::user()->email}}',
                displayName: '{{Auth::user()->name}} {{Auth::user()->lastName}}'
            }
        };
        var api = new JitsiMeetExternalAPI(domain, options);
    });
</script>
