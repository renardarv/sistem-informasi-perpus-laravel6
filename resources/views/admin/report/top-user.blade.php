@extends('admin.templates.default')

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Laporan User Teraktif</h3>
        <a href="{{ route('admin.book.create') }}" class="btn btn-primary">Tambah Buku</a>
    </div>

    <div class="box-body">
       
        <table id="dataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jumlah Peminjaman</th>
                    <th>Bergabung</th>
                </tr>
            </thead>

            <tbody>
                @php
                    $page = 1;

                    if(request()->has('page'))
                    {
                        $page = request('page');
                    }

                    $no = (env('PAGINATION_ADMIN') * $page) - (env('PAGINATION_ADMIN') - 1);
                @endphp
                @foreach ($users as $user)
                <tr>
                    
                    {{-- <td>{{ $index +1 }}</td> >> bila ganti page angka akan reset dr 1--}}
                    <td>{{ $no++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->borrow_count }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</div>

@endsection
