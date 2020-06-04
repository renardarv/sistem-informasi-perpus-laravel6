@extends('admin.templates.default')

@section('content')

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Data Buku</h3>
        <a href="{{ route('admin.book.create') }}" class="btn btn-primary">Tambah Buku</a>
    </div>

    <div class="box-body">
       
        <table id="dataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Penulis</th>
                    <th>Cover</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table> 
    </div>
</div>

<form action="" method="post" id="deleteForm">
    @csrf
    @method('delete')
    <input type="submit" value="Hapus" class="btn btn-danger" style="display: none">
</form>

@endsection

@push('scripts')
    <script src="{{ asset('assets/plugins/bs-notify.min.js') }}"></script>
    @include('admin.templates.partials.alerts')
    <script>
        $(function(){
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.book.data') }}',
                columns: [
                    { data: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'title' },
                    { data: 'description' },
                    { data: 'author' },
                    { data: 'cover' },
                    { data: 'action' },
                ]
            });
        });
    </script>
@endpush