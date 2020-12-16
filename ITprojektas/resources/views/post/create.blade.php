@extends('layouts\main')
@section('content')
<div class="container">
    <form method="POST" action="/post/create">
        <div class="row">
            <h1 class= "col h2 mt-3">Sukurti naują skelbimą</h1>
        </div>
        <div class = "row mt-3">
            <div class ="col form-group">
                <label class = "h5" for="image">Įkelkite nuotrauką</label>
                <input type="file" class="form-control-file" name="image">
            </div>
        </div>
        <div class ="row">
            <div class="col-6 ml-0 form-group">
                <label class = "h5" for="descriptiob">Gyvūno aprašymas</label>
                <textarea class="form-control" name="description" rows="4"></textarea>
            </div>
        </div>
        <div class ="row">
            <div class="col-6 ml-0 form-group">
                <label class = "h5" for="descriptiob">Gyvūno rūšis</label>
                <textarea class="form-control" name="description" rows="1"></textarea>
            </div>
        </div>
        <div class ="row">
            <div class="col-6 ml-0 form-group">
                <label class = "h5" for="descriptiob">Gyvūno amžius</label>
                <textarea class="form-control" name="description" rows="1"></textarea>
            </div>
        </div>
        <div class ="row">
            <div class="col-6 ml-0 form-group">
                <label class = "h5" for="descriptiob">Gyvūno namų adresas</label>
                <textarea class="form-control" name="description" rows="1"></textarea>
            </div>
        </div>
        <div class = "row">
            <div class="col-2 form-group">
                <label class = "h5" for="gender">Lytis</label>
                <select class="form-control" name=gender>
                    <option>-</option>
                    <option>Berniukas</option>
                    <option>Mergaite</option>
                </select>
              </div>
        </div>
        <div class = "row">
            <div class="col-2 form-group">
                <label class = "h5" for="gender">Statusas</label>
                <select class="form-control" name=state>
                    <option>-</option>
                    <option>Rastas</option>
                    <option>Dinges</option>
                </select>
              </div>
        </div>
        <div class="row">
            <div class ="col">
                <button class="btn btn-success" type="button">Sukurti skelbimą</button>
            </div>
        </div>
    </form>
</div>
@endsection
