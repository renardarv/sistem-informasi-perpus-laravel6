@extends('frontend.templates.default')

@section('content')
<h4>Detail Buku</h4>
<div class="col s12 m12">
    <div class="card horizontal hoverable" style="width: 100%; height: 45vh;">
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
                <form action="{{ route('book.borrow', $book) }}" method="post">
                    @csrf
                    <button type="submit"class="btn red accent-1 right waves-effect waves-light">Pinjam Buku</button>
                </form>
            </div>
        </div>
    </div>

    <h5>Buku lainnya dari penulis {{ $book->author->name }} ...</h5>
    <div class="row">
        {{-- shuffle() untuk random book dan take() untuk max capacity book --}}
        @foreach ($book->author->books->shuffle()->take(4) as $book)
            @component('frontend.templates.components.card-book', ['book' => $book])
                {{-- bisa menggunakan include --}}
            @endcomponent
        @endforeach
    </div>
@endsection