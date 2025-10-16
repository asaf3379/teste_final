<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro do professor</h1>
    <form action="{{route('aluno.store')}}" method="post">
    @csrf
    <label for="">Nome</label>
    <input type="text" nome="nome" id="nome">
    <label for="">Disciplina</label>
    <input type="text" nome="disciplina" id="disciplina">
    <button type=submit>salvar</button>
</form>
</body>
</html>