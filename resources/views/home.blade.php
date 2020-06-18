@extends('frontend.templates.default')

@section('content')
    <div class="row">
        <h4>Selamat datang {{ Auth::user()->name }},</h4>
        <h3>Buku yang sedang dipinjam:</h3>

        @foreach ($books as $book)
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
                    
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
@endsection

