@extends('layouts.app')
@section('title','Lista de Alunos')
@section('content')
    <h1>Lista de Alunos</h1>
    <table class="table table-dark">
        <thead class="thead-light">
            <th>Matrícula</th>
            <th>Nome</th>
            <th>E-Mail</th>
            <th>Data de Nascimento</th>
            <th>Opções</th>
        </thead>
        <tbody>
            @foreach($alunos as $aluno)
            <tr>
            <td>{{$aluno->matricula}}</td>
            <td>{{$aluno->nome}}</td>
            <td>{{$aluno->email}}</td>
            <td>{{$aluno->data_nascimento}}</td>
            <td><a href="{{route('aluno.edit',$aluno->id)}}" class="btn btn-success">Editar</a>
               <a href="{{route('aluno.show',$aluno->id)}}" class="btn btn-primary">Visualizar</a>       
               <form action="{{route('aluno.destroy',$aluno->id)}}" method="post">
                @csrf 
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
               </form> 
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection