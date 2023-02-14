@extends("layouts.app")
@section("content")
<div class="container">
    <div class="card mb-2">
    <div  lass="card-body">
    <h5 class="card-title">{{ $articles->title }}</h5>
        <div class="card-subtitle mb-2 text-muted small">
        {{ $articles->created_at->diffForHumans() }}
        </div>
            <p class="card-text">{{ $articles->Body }}</p>
            <a c lss="btn btn-warning"
            href="{{ url('/articles/delete/$article->id') }}">
                Delete
            </a>
                
    </div>
    </div>
</div>
@endsection      
       