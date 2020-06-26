@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-auto">
                <div class="card">
                    <div class="card-header">{{__('commons.data')}}</div>
                    <div class="card-body">
                        <div class="card-title text-center"></div>
                        <div class="text-center container-fluid py-2">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr class="d-flex">
                                            <th scope="col" class="col-1">#</th>
                                            <th scope="col" class="col-2">{{__('logins.id')}}</th>
                                            <th scope="col" class="col-2">{{__('logins.name')}}</th>
                                            <th scope="col" class="col-2">{{__('logins.lastName')}}</th>
                                            <th scope="col" class="col-2">{{__('logins.motherLastName')}}</th>
                                            <th scope="col" class="col-2">{{__('logins.dateBirth')}}</th>
                                            <th scope="col" class="col-2">{{__('logins.gender')}}</th>
                                            <th scope="col" class="col-2">{{__('logins.email')}}</th>
                                            <th scope="col" class="col-2">{{__('logins.phoneNumber')}}</th>
                                            <th scope="col" class="col-2">{{__('logins.province')}}</th>
                                            <th scope="col" class="col-2">{{__('logins.canton')}}</th>
                                            <th scope="col" class="col-2">{{__('logins.district')}}</th>
                                            <th scope="col" class="col-3">{{__('logins.address1')}}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($userData as $data)
                                            <tr class="d-flex">
                                                <th scope="row" class="col-1">
                                                    {{$loop->iteration}}
                                                </th>
                                                <td class="col-2">
                                                    {{$data->id}}
                                                </td>
                                                <td class="col-2">
                                                    {{$data->name}}
                                                </td>
                                                <td class="col-2">
                                                    {{$data->lName1}}
                                                </td>
                                                <td class="col-2">
                                                    {{$data->lName2}}
                                                </td>
                                                <td class="col-2">
                                                    {{$data->bDate}}
                                                </td>
                                                <td class="col-2">
                                                    {{$data->gender}}
                                                </td>
                                                <td class="col-2">
                                                    {{$data->email}}
                                                </td>
                                                <td class="col-2">
                                                    {{$data->phone}}
                                                </td>
                                                <td class="col-2">
                                                    {{$data->province}}
                                                </td>
                                                <td class="col-2">
                                                    {{$data->canton}}
                                                </td>
                                                <td class="col-2">
                                                    {{$data->district}}
                                                </td>
                                                <td class="col-3">
                                                    {{$data->address}}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $userData->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-auto">
                <div class="card">
                    <div class="card-header">{{__('commons.pendingData')}}</div>
                    <div class="card-body">
                        <div class="card-title text-center"></div>
                        <div class="text-center container-fluid py-2">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr class="d-flex">
                                        <th scope="col" class="col-1">#</th>
                                        <th scope="col" class="col-2">{{__('logins.id')}}</th>
                                        <th scope="col" class="col-2">{{__('logins.name')}}</th>
                                        <th scope="col" class="col-2">{{__('logins.lastName')}}</th>
                                        <th scope="col" class="col-2">{{__('logins.motherLastName')}}</th>
                                        <th scope="col" class="col-2">{{__('logins.dateBirth')}}</th>
                                        <th scope="col" class="col-2">{{__('logins.gender')}}</th>
                                        <th scope="col" class="col-2">{{__('logins.email')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pendingData as $data)
                                        <tr class="d-flex">
                                            <th scope="row" class="col-1">
                                                {{$loop->iteration}}
                                            </th>
                                            <td class="col-2">
                                                {{$data->id}}
                                            </td>
                                            <td class="col-2">
                                                {{$data->name}}
                                            </td>
                                            <td class="col-2">
                                                {{$data->lName1}}
                                            </td>
                                            <td class="col-2">
                                                {{$data->lName2}}
                                            </td>
                                            <td class="col-2">
                                                {{$data->bDate}}
                                            </td>
                                            <td class="col-2">
                                                {{$data->gender}}
                                            </td>
                                            <td class="col-2">
                                                {{$data->email}}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $pendingData->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
