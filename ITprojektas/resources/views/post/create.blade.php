@extends('layouts\main')
@section('content')
<div class="container">
    @if(count($errors) !== 0)
    <div class="row">
        <div class="col">
            <div class="alert alert-danger" role="alert">
                Prašome užpildyti visus laukus!
              </div>
        </div>
    </div>
    @endif
    <form method="POST" action="store" enctype="multipart/form-data"}>
        @csrf
        @method('POST')
        <div class="row">
            <h1 class= "col h2 mt-3">Sukurti naują skelbimą</h1>
        </div>
        <div class = "row mt-3">
            <div class ="col form-group">
                <label class = "h5" for="image">Įkelkite nuotrauką</label>
                <input type="file" class="form-control-file" name="image" id="image">
            </div>
        </div>
        <div class ="row">
            <div class="col-6 ml-0 form-group">
                <label class = "h5" for="descriptiob">Gyvūno vardas</label>
                <textarea class="form-control" name="name" rows="1"></textarea>
            </div>
        </div>
        <div class ="row">
            <div class="col-6 ml-0 form-group">
                <label class = "h5" for="descriptiob">Gyvūno aprašymas</label>
                <textarea class="form-control" name="description" rows="4"></textarea>
            </div>
        </div>
        <div class ="row">
                <div class="col-2 form-group">
                    <label class = "h5" for="gender">Rūšis</label>
                    <select class="form-control" name=type>
                        @foreach ($types as $item)
                            <option value = {{$item->id}}>{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
        </div>
        <div class ="row">
            <div class="col-6 ml-0 form-group">
                <label class = "h5" for="age">Gyvūno amžius</label>
                <input type="number" class="form-control" name="age" rows="1"></textarea>
            </div>
        </div>
        <div class ="row">
            <div class="col-6 ml-0 form-group">
                <label class = "h5" for="descriptiob">Gyvūno namų adresas</label>
                <textarea class="form-control" name="home_address" rows="1"></textarea>
            </div>
        </div>
        <div class = "row">
            <div class="col-2 form-group">
                <label class = "h5" for="gender">Lytis</label>
                <select class="form-control" name=gender>
                    @foreach ($genders as $item)
                        <option value = {{$item->id}}>{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class = "row">
            <div class="col-2 form-group">
                <label class = "h5" for="gender">Statusas</label>
                <select class="form-control" name=state>
                    @foreach ($states as $item)
                        <option value = {{$item->id}}>{{$item->name}}</option>
                    @endforeach
                </select>
              </div>
        </div>
        <div class="row">
            <div class ="col">
                <button class="btn btn-success" type="submit">Sukurti skelbimą</button>
            </div>
        </div>
    </form>
</div>
@endsection
