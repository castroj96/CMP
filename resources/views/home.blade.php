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
                        <h6>{{__('commons.activities')}}</h6>
                    </div>

                     <div class="alert alert-danger print-error-msg" style="display:none">
                         <ul></ul>
                     </div>

                    <form>
                        @csrf

                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="{{route('chat', ['id' => 1000])}}">Culto Martes</a>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 1001])}}">Ayuno Miércoles</a>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 1002])}}">Culto Jueves</a>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 1003])}}">Refugio Jóvenes</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>Sectores</th>
                                    <th>Gedeón</th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2001])}}">San Diego 1</a>
                                        <h6>Coordinadores</h6>
                                        <p>Erick y Ruth</p>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2002])}}">San Diego 2</a>
                                        <h6>Coordinador</h6>
                                        <p>Sandra López</p>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2003])}}">San Diego 3</a>
                                        <h6>Coordinador</h6>
                                        <p>Guadalupe Loaiza</p>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2004])}}">San Rafael 1</a>
                                        <h6>Coordinador</h6>
                                        <p>Joaquin Quesada</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2005])}}">San Rafael 2</a>
                                        <h6>Coordinador</h6>
                                        <p>Joao Pessoa</p>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2006])}}">Tres Ríos 1</a>
                                        <h6>Coordinador</h6>
                                        <p>Deyanira Aguilar</p>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2007])}}">Tres Ríos 2</a>
                                        <h6>Coordinador</h6>
                                        <p>Yanina Barberena</p>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2008])}}">MVD</a>
                                        <h6>Coordinador</h6>
                                        <p>Celia Villalobos</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2009])}}">Tres Ríos 4</a>
                                        <h6>Coordinador</h6>
                                        <p>Flory Mora</p>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2010])}}">Tres Ríos 5</a>
                                        <h6>Coordinador</h6>
                                        <p>Marco Tulio Vega</p>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2011])}}">Concepción 1</a>
                                        <h6>Coordinador</h6>
                                        <p>Joaquín Quesada</p>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2012])}}">Concepción 2</a>
                                        <h6>Coordinador</h6>
                                        <p>Carlos Chinchilla</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2013])}}">Concepción 3</a>
                                        <h6>Coordinador</h6>
                                        <p>Yanina Barberena</p>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2014])}}">Dulce Nombre 1</a>
                                        <h6>Coordinador</h6>
                                        <p>Grettel Padilla</p>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2015])}}">San Juan 1</a>
                                        <h6>Coordinador</h6>
                                        <p>Pablo Varela</p>
                                    </td>
                                    <td>
                                        <a href="{{route('chat', ['id' => 2016])}}">Cartago</a>
                                        <h6>Coordinador</h6>
                                        <p>Jorge Molina</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


