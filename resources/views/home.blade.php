<!DOCTYPE html>
<html>
<head>
    <title>Laravel Sweet Alert Message Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-light">
    <div class="container mt-5">
    <h2 class="mb-3">Laravel Ajax Sweetalert 2 Notification Example</h2>
    <table class="table">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>  
                <td>{{$user->email}}</td>  
                <td>
                    <button class="btn btn-outline-danger btn-sm delete-data" data-id="{{ $user->id }}" data-action="{{ route('users.removeData',$user->id) }}">Delete</button>
                </td>  
            </tr>
        @endforeach
    </table>
          
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css" rel="stylesheet">
    <script type="text/javascript">
        $("body").on("click"," .delete-data", function(){
            var current_object = $(this);
            swal.fire({
                title: "Are you sure?",
                text: "We are going to delete this user forever.",
                type: "error",
                showCancelButton: true,
                dangerMode: true,
                cancelButtonClass: 'red',
                confirmButtonColor: 'blue',
                confirmButtonText: 'Delete',
            },function (result) {
                if (result) {
                    var action = current_object.attr('data-action');
                    var token = jQuery('meta[name="csrf-token"]').attr('content');
                    var id = current_object.attr('data-id');
                }
            });
        });
    </script>
</body>
</html>