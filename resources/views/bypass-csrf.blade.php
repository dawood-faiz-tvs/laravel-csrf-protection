<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bypass Tokens</title>
</head>
<body>
    <form action="{{ url('bypass-csrf') }}" method="post">
        <input type="email" name="email" id="email" placeholder="email...">
        <button type="submit">Submit</button>

    </form>
</body>
</html>