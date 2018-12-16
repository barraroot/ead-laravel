@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Usuários Cadastrados</h3>
                <a href="{{route('admin.users.create')}}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Novo Usuário</a>
                <br/><br/>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr>
                            <td scope="row">{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                <a href="{{route('admin.users.edit', $item->id)}}" class="btn"><i class="fas fa-pen"></i> Editar</a>
                                <a href="{{route('admin.users.show', $item->id)}}" class="btn"><i class="fas fa-th-list"></i> Visualizar</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
