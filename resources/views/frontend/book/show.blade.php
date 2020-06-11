@extends('frontend.templates.default')

@section('content')
<h4>Detail Buku</h4>
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

    <h5>Buku lainnya dari penulis {{ $book->author->name }}...</h5>
    <div class="row">
        {{-- shuffle() untuk random book dan take() untuk max capacity book --}}
        @foreach ($book->author->books->shuffle()->take(4) as $book)
        <div class="col s12 m6">
            <div class="card horizontal hoverable" style="width: 100%; height: 35vh;">
                <div class="card-image" >
                    <img src="{{ $book->getCover() }}" height="255px" style="margin: 10px;">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h6>
                            <a href="{{ route('book.show', $book) }}">{{ Str::limit($book->title), 20 }}</a>
                        </h6>
                        <p>{{ Str::limit($book->description), 50 }}</p>
                    </div>
                    <div class="card-action">
                        <a href="#" class="btn red accent-1 right waves-effect waves-light">Pinjam Buku</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection