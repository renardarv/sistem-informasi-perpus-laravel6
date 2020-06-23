@extends('admin.templates.default')

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Laporan Buku Terlaris</h3>
        <a href="{{ route('admin.book.create') }}" class="btn btn-primary">Tambah Buku</a>
    </div>

    <div class="box-body">
       
        <table id="dataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Jumlah Buku</th>
                    <th>Total Dipinjam</th>
                    <th>Penulis</th>
                    <th>Cover</th>
                </tr>
            </thead>

            <tbody>
                @php
                    $page = 1;

                    if(request()->has('page'))
                    {
                        $page = request('page');
                    }

                    // $no = (10 * $page) - (10 - 1); >> logika matematikanya jika perpage 10 data

                    $no = (env('PAGINATION_ADMIN') * $page) - (env('PAGINATION_ADMIN') - 1);
                @endphp
                @foreach ($books as $index => $book)
                <tr>
                    
                    <td>{{ $no++ }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->qty }}</td>
                    <td>{{ $book->borrowed_count }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>
                        <img src="{{ $book->getCover() }}" height="150px" alt="{{ $book->title }}">    
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $books->links() }}
    </div>
</div>

@endsection
