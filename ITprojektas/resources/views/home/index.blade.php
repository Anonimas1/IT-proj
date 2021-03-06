@extends('layouts\main')
@section('content')
<div class="container mt-3">
    @if (session('alert'))
        <div class = "row ml-0">
            <div class="col alert alert-success">
                {{session('alert')}}
            </div>
        </div>
    @endif
    <div class=row>
        @foreach ($animals as $animal)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card h-100">
                <a href="/post/{{$animal->post_id}}"><img class="card-img-top" src={{asset($animal->image_path)}} alt={{$animal->name}}></a>
                <div class="card-body">
                    <h4 class="card-title">
                    <a class="h4" href="/post/{{$animal->post_id}}">{{$animal->name}}</a>
                @can('viewCount', App\Models\Post::class)
                        {{-- @dd($animal->Post->view_count) --}}
                    <p>Peržiūrėta: {{$animal->Post->view_count}}</p>
                @endcan
                </h4>
                <p class="card-text">{{$animal->description}}</p>
              </div>

              <div class="row card-footer">
                <div class = "col">{{$animal->State->name}}</div>
                @can('delete', App\Models\Post::class)
                    <div class ="col">
                        <form method="GET" action="post/delete/{{$animal->post_id}}">
                            <button class="btn btn-danger" type="submit" >Šalinti skelbimą</button>
                        </form>
                    </div>
                @endcan
              </div>
            </div>
          </div>
        @endforeach

    </div>
</div>
@endsection
