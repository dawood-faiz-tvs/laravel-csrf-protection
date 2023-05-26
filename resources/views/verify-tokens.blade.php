<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verify Tokens</title>
</head>
<body>
    <form action="{{ url('verify-tokens') }}" method="post">
        @csrf
        <input type="email" name="email" id="email" placeholder="email...">
        <button type="submit">Submit</button>

    </form>
</body>
</html>