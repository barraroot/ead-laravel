@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Dados do Usuários</h3>
            <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-info"><i class="fas fa-pen"></i> Editar</a>
            <a href="#" onclick="event.preventDefault();document.getElementById('formDelete').submit();" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Excluir</a>
            @php
                $form = \FormBuilder::plain([
                    'id' => 'formDelete',
                    'url' => route('admin.users.destroy', ['user' => $user->id]),
                    'method' => 'DELETE',
                    'style' => 'display:none'
                ])
            @endphp
            {!! form($form) !!}
            <br><br>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th scoped="row">#</th>
                        <td>{{$user->id}}</td>
                    </tr>
                    <tr>
                        <th scoped="row">Nome</th>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th scoped="row">E-mail</th>
                        <td>{{$user->email}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
