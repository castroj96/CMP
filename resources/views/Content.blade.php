@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{__('commons.content')}}</div>
                    <div class="card-body">
                        <div class="card-title text-center">
                            <!--Agregar fotos, videos, etc aqui-->
                            <iframe class="Video" src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fcenmiscr%2Fvideos%2F643522143099120" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
