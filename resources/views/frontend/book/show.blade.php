@extends('frontend.templates.default')

@section('content')
<div class="col s12 m12">
    <div class="card horizontal hoverable" style="width: 100%; height: 40vh;">
        {{-- <div class="card-image" > --}}
            <img src="{{ $book->getCover() }}">
        {{-- </div> --}}
        <div class="card-stacked">
            <div class="card-content">

                <h5 class="red-text accent-2">{{ $book->title }}</h5>
                <blockquote>
                    <p class="text-justify">{{ $book->description }}</p>
                </blockquote>
                <p>
                    <i class="material-icons" style = "position:relative; top:5px;">person</i> : {{ $book->author->name }}
                </p>      
                <p>
                    <i class="material-icons" style = "position:relative; top:5px;">book</i> : {{ $book->qty }}
                </p>
                
            </div>
            <div class="card-action">
                <a href="#" class="btn red accent-1 right waves-effect waves-light">Pinjam Buku</a>
            </div>
        </div>
    </div>
@endsection