@extends('frontend.templates.default')

@section('content')
    <h2>Koleksi Buku</h2>

    <blockquote> 
        <p class="flow-text">Koleksi buku yang bisa kamu baca & pinjam</p>
    </blockquote>

    <div class="row">
        @foreach ($books as $book)
        <div class="col s12 m6">
            <div class="card horizontal hoverable" style="width: 100%; height: 35vh;">
                <div class="card-image" >
                    <img src="{{ $book->getCover() }}" height="200px" style="margin: 10px;">
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <h6><b>{{ Str::limit($book->title), 20 }}</b></h6>
                        <p>{{ Str::limit($book->description), 50 }}</p>
                    </div>
                    <div class="card-action">
                        <a href="#">This is a link</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    {{ $books->links('vendor.pagination.materialize') }}
    
@endsection