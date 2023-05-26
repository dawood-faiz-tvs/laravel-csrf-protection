<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>X-CSRF</title>
</head>
<body>
    <form id="x-csrf">
        <input type="email" name="email" id="email" placeholder="email...">
        <button type="submit">Submit</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#x-csrf').on('submit', function (e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "{{ url('x-csrf') }}",
                    data: {
                        'first_name': 'Dawood',
                        'last_name' : 'Faiz'
                    },
                    dataType: "JSON",
                    success: function (response) {
                        console.log("AJAX DONE");    
                    }
                });
            });
        });
    </script>
</body>
</html>