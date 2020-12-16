@extends('layouts\main')
@section('content')
<div class="container mt-3">
    <div class=row>
        @foreach ($animals as $animal)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
            <a href="/post/{{$animal->post_id}}"><img class="card-img-top" src="http://placehold.it/500x500" alt={{$animal->name}}></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a class="h4" href="/post/{{$animal->post_id}}">{{$animal->name}}</a>
                @can('viewCount', App\Models\Post::class)
                    <p>Peržiūrėta: {{$animal->Post->view_count}}</p>
                @endcan
                </h4>
                <p class="card-text">{{$animal->description}}</p>
              </div>

              <div class="row card-footer">
                <div class = "col">{{$animal->State->name}}</div>
                @can('delete', App\Models\Post::class)
                    <div class ="col">
                    <button class="btn btn-danger" type="button">Šalinti skelbimą</button>
                    </div>
                @endcan
              </div>
            </div>
          </div>
        @endforeach
    </div>
</div>
@endsection
