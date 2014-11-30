<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

{{ Form::open() }}
{{ Form::label('username', 'User Name') }}
{{ Form::text('username', Input::old('username', '')) }}
<br>
{{ Form::label('password', 'Password') }}
{{ Form::password('password') }}
<br>
{{ Form::submit('Login') }}
{{ Form::close() }}

</body>
</html>
