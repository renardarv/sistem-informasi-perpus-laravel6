@extends('admin.templates.default')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Edit Data Penulis</h3>
        </div>

        <div class="box-body">
            <form action="{{ route('admin.author.update', $author) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="form-group @error('name') has-error @enderror">
                    <label for="">Nama</label>
                    {{-- old('name') ?? $author->name, jika ada old name maka akan redirect ke old name jika tidak maka kembali ke literasi --}}
                    <input type="text" name="name" class="form-control" placeholder="Masukkan nama penulis" value="{{ old('name') ?? $author->name }}"> 
                    @error('name')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" value="Ubah" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
@endsection