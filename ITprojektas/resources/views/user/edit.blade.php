@extends('layouts\main')
@section('content')
    <div class="container">
        <div class="row mt-2">
            <div class="col">
                <p class="h4">Vardas: </p>
                <p class="h5">{{$user->name}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="h4">El. paštas</p>
                <p class="h5">{{$user->email}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="h4">Gali dėti skelbimus:</p>
                <form method="POST" action="/users/{{$user->id}}">
                    @method('PUT')
                    @csrf
                    <select class="col-2 form-control" name="permission">
                        @if($user->Role->Permissions->contains(2))
                            <option value="1">Taip</option>
                            <option value="0">Ne</option>
                        @else
                        <option value="0">Ne</option>
                        <option value="1">Taip</option>
                        @endif
                    </select>
                    <div class="row mt-2">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Keisti</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
