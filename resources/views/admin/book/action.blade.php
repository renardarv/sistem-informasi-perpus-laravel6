<a href="{{ route('admin.book.edit', $model) }}" class="btn btn-success">Edit</a> 
<button href="{{ route('admin.book.destroy', $model) }}" class="btn btn-danger" id="delete">Hapus</button>

{{-- tidak ditao di index agar tertrigger --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>

    $('button#delete').on('click', function(e){
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
        title: 'Apakah kamu yakin hapus data ini?',
        text: "Yang sudah terhapus tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            
        if (result.value) {

            document.getElementById('deleteForm').action = href;
            document.getElementById('deleteForm').submit();

            Swal.fire(
            'Terhapus!',
            'Data berhasil dihapus.',
            'success'
            )
        }
        })

    })

</script>