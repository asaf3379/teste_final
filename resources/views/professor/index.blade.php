<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de professores </h1>
    <table>
        <thead>
            <th>Nome</th>
            <th>Disciplina</th>
        </thead>
        <tbody>
            @foreach($professor as $professor)
            <tr>
            <td>{{$professor-> nome}}</td>
            <td>{{$professor-> disciplina}}</td>
            </tr>
            <td>
            <a href="{{ route('professor.edit', $professor) }}">Editar</a>
<a href="{{ route('professor.show', $professor) }}">Visualizar</a>

<form action="{{ route('professor.destroy', $professor) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Excluir</button>
</form>

            </td>
            @endforeach
        </tbody>
    </table>
</body>
</html>