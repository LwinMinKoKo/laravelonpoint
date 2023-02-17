@extends("layouts.app")
@section("content")
<div class="container">
    <div class="card mb-2">
    <div  lass="card-body">
    <h5 class="card-title">{{ $articles->title }}</h5>
        <div class="card-subtitle mb-2 text-muted small">
        {{ $articles->created_at->diffForHumans() }},
        Category: <b>{{ $articles->category->name ?? 'None' }}</b>

                       </div>
                       <p c lss="card-text"{{ $articles->Body }}</p>
                       <a class="btn btn-warning" href="{{ url("/articles/delete/$articles->id") }}">
                       Delete</a>
                       <a class="btn btn-primary" href={{ url("/") }}>
                       Home</a>
                      
            </div>
<div>
            <ul class="list-group">
            <li class="list-group-item active">
            <b>Coments ({{ count($articles->comments) }})</b>
            </li>
                @foreach($articles->comments as $comment)
                <li class="list-group-item">
                {{ $comment->content }}
            </li>
            @endforeach
            
            </ul>
            </div>
            <form action="{{ url('/comments/add') }}" method="post">
@csrf
<input type="hidden" name="article_id" value="{{ $articles->id }}">
<textarea name="content" class="form-control mb-2"
placeholder="New Comment"></textarea>
<input type="submit" value="Add Comment"
class="btn btn-secondary">
</form>
</div>
            @endsection   
                
            
                   