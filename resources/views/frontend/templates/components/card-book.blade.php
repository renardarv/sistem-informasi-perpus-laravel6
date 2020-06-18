<div class="col s12 m6">
    <div class="card horizontal hoverable" style="width: 100%; height: 37vh;">
        <div class="card-image" >
            <img src="{{ $book->getCover() }}" height="270px" style="margin: 10px;">
        </div>
        <div class="card-stacked">
            <div class="card-content">
                <h6>
                    <a href="{{ route('book.show', $book) }}">{{ Str::limit($book->title), 20 }}</a>
                </h6>
                <p>{{ Str::limit($book->description), 50 }}</p>
            </div>
            <div class="card-action">
                
                <form action="{{ route('book.borrow', $book) }}" method="post">
                    @csrf
                    <button type="submit"class="btn red accent-1 right waves-effect waves-light">Pinjam Buku</button>
                </form>
                
            </div>
        </div>
    </div>
</div>