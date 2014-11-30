<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User info</title>
</head>
<body>
<h2>User info</h2>

{{ Form::open(['url' => 'admin/logout']) }}
{{ Form::submit('Logout') }}
{{ Form::close() }}
</body>
</html>
