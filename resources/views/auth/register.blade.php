<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<h1>Register</h1>
@if($errors->any())

    <ul>
        @foreach {$error->all()}
        @endforeach
    </ul>
<form action="{{route(register.store)}}" method="POST">
    @csrf
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    <label for="password_confirmation">Password Confirmation</label>
    <input type="password" name="password" id="password">
    <button type="submit">Register</button>
</form>
    
</body>
</html>