<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar professor</h1>
    <form action="{{route('professor.update', $professor->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome" value="{{$professor->nome}}">
        <label for="">Disciplina</label>
        <input type="text" name="disciplina" id="disciplina" value="{{$professor->disciplina}}">

        <button type="submit">Salvar</button>
    </form>
</body>
</html>