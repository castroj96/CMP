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
                            <iframe class="Video" src="https://www.youtube.com/embed/videoseries?list=PLxUvQyNWI2oD93x5QjmZLdUR2bU2E4LrY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                        </div>
                    </div>
                    <div class="card-header">{{__('commons.bankAccount')}}</div>
                    <div class="card-body">
                        <div class="card-title text-center">
                            <p>Banco Nacional de Costa Rica</p>
                            <p>Número de cuenta: CR97015100010012054491</p>
                            <p>Cédula Jurídica: 3-002-051271</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
