@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{__('commons.contact')}}</div>
                    <div class="card-body">
                        <div class="card-title text-center">
                            <p>Número de teléfono:</p>
                            <p>+506 22791848</p>
                            <iframe class="Map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7860.68584461165!2d-83.9849062551514!3d9.905370490455686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e1547aff6621%3A0xaa258fe59a4dace1!2sCentro%20Misionero%20Pentecostes!5e0!3m2!1ses!2svg!4v1586908927860!5m2!1ses!2svg" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <a href="https://www.facebook.com/cenmiscr/" class="fa fa-facebook"></a>

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
