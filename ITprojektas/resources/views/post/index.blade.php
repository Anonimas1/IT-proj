@extends('layouts\main')
@section('content')

<div class='container mt-3'>
    <div class = "row">
        <div class="col-4">
            <img class="card-img-top img-fluid" src="http://placehold.it/500x500" alt="">
        </div>
        <div class="col-8 ml-0">
            <div class="row">
                <p class="h3">{{$post->Animal->name}}({{$post->Animal->State->name}})</p>
            </div>
            <div class="row">
                <p class="h6">Amžius: {{$post->Animal->age}}</p>
            </div>
            <div class="row">
                <p class = "h6 mb-0">Aprašymas:</p>
                <p>{{$post->Animal->description}}</p>
            </div>
        </div>
    </div>

    @can('view', App\Model\Comment::class)
        <div class="row ml-0 mt-2 mb-3">
            <h1 class = "h2">Komenatrai</h1>
        </div>
    @endcan


    @can('create', App\Models\Comment::class)
        <div class= "row">
            <div class="col-12">
                <form method="POST" action="/comments">
                    @csrf
                    <input type="hidden" name = "post_id" value = {{$post->id}}>
                    <input type="hidden" name = "user_id" value = {{$post->user_id}}>
                    <div class="form-group">
                        <label class = "h5" for="content">Rašyti komentarą</label>
                        <textarea class="form-control" name="content" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Paskelbti</button>
                </form>
            </div>
        </div>
    @endcan

    @can('view', App\Models\Comment::class)
        @foreach ($post->Comments as $comment)
            <div class="row ml-0 mr-0">
                <h1 class="h6">{{$comment->User->name}}:</h1>
            </div>
            <div class="row ml-3 mr-0 mt-0 mb-3">
                <div class="col-12">
                    <p>{{$comment->content}}</p>
                </div>
            </div>
        @endforeach
    @endcan
</div>
@endsection
