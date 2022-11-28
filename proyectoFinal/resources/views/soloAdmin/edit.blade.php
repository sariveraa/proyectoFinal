<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('administrar.update', $user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label>Nombre</label>
        <input id="name" name="name" type="text" value="{{$user->name}}">
        <label>email</label>
        <input id="email" name="email" type="text" value="{{$user->email}}">
        <label>tipo</label>
        <input name="tipo" type="text" value="{{$user->tipo}}">
        <input type="submit" name="Enviar">
    </form>
</body>
</html>