@extends('layouts\main')
@section('content')
    <div class="container">
        @if (session('alert'))
            <div class = "row ml-0">
                <div class="col alert alert-success">
                    {{session('alert')}}
                </div>
            </div>
        @endif
        <div class="row mt-2">
            <table class = "table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Vardas</th>
                        <th scope="col">El. paštas</th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <form method="GET" action="/users/{{$user->id}}/edit">
                                <td><button class= "btn btn-danger" type="submit">Keisti privilegijas</button></td>
                            </form>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
