<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    
<div class="d-flex justify-content-between ">
    
    {{-- edit --}}

    <a href="{{ route('users.edit', $id) }}" class="btn  btn-sm  btn-warning mx-2">Edit</a>
    {{-- delete --}}
    <form action="{{ route('users.destroy',$id) }}" id="delete-form" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete(event,{{ $id }})">Delete</button>
    </form>

</div>


<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                // If confirmed, submit the form for deletion
                document.getElementById('delete-form').submit();
            }
          
        });
    }
</script>

</body>
</html>